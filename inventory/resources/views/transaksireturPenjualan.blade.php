@extends('layouts.layout')

@section('title', 'Retur Penjualan')
@section('table')

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="#faktur" data-toggle="tab" role="tab" aria-controls="spkOpen" aria-selected="true">Faktur Penjualan</a></li>
    <li class="nav-item"><a class="nav-link" href="#retur" data-toggle="tab" role="tab" aria-controls="spkClosed" aria-selected="false">Retur Penjualan</a></li>
</ul>

<div class="tab-content" id="myTabContent">
    <div id="retur" class="tab-pane fade" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Retur</th>
                    <th>Supplier</th>
                    <th>No. Faktur</th>
                    <th>Tanggal Retur</th>
                    <th>Item Barang</th>
                    <th>Quantity</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($returjual as $c)
                    <tr>
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $c->noRetur }}</td>
                        <td>{{ $c->trpenawaran->customer->Nama}}</td>
                        <td>{{ $c->trpenawaran->fakturjual->NoFaktur }}</td>
                        <td>{{ date_format(date_create($c->trpenawaran->fakturjual->tglRetur), 'd M Y') }}</td>
                        <td>{{ $c->producttype->tipe }}</td>
                        <td>{{ $c->qtyRetur }}</td>
                        <td>{{ $c->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div id="faktur" class="tab-pane fade show active" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pelanggan</th>
                    <th>No Faktur</th>
                    <th>Tanggal Faktur</th>
                    <th>Jatuh Tempo Faktur</th>
                    <th>No SO</th>
                    <th>Tanggal SO</th>
                    <th>Jatuh Tempo SO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fakturjual as $c)
                    <tr>
                        <td>{{ $loop->iteration + $fakturjual->firstItem() - 1 }}</td>
                    <td>{{ $c->trpenawaran->customer->Nama }}</td>
                    <td>{{ $c->NoFaktur }}</td>
                    <td>{{ date_format(date_create($c->TglFaktur), 'd M Y') }}</td>
                    <td>{{ date_format(date_create($c->TglJatuhTempoFaktur), 'd M Y')}}</td>
                    <td>{{ $c->trpenawaran->NoSO }}</td>
                    <td>{{ date_format(date_create($c->trpenawaran->TglSO), 'd M Y')}}</td>
                    <td>{{ date_format(date_create($c->trpenawaran->TglJatuhTempoSO), 'd M Y') }}</td>
                        <td class="text-center">
                            <form method="GET" action="/returPenjualan/form/{{$c->id}}">
                                <button class="edit green" type="submit"><i class="fa fa-reply-all" title="Add Retur"></i></button>
                            </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $fakturjual->links() }}
    </div>
    </div>
</div>

@endsection
@section('content')

@endsection
