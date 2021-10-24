@extends('layouts.layout')

@section('title', 'Retur Pembelian')
@section('table')

<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="#faktur" data-toggle="tab" role="tab" aria-controls="spkOpen" aria-selected="true">Faktur pembelian</a></li>
    <li class="nav-item"><a class="nav-link" href="#retur" data-toggle="tab" role="tab" aria-controls="spkClosed" aria-selected="false">Retur pembelian</a></li>
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
                @foreach ($returbeli as $c)
                    <tr>
                        <td>{{ $loop->iteration  }}</td>
                        <td>{{ $c->noRetur }}</td>
                        <td>{{ $c->fakturbeli->supplier->nama}}</td>
                        <td>{{ $c->fakturbeli->NoFaktur }}</td>
                        <td>{{ $c->fakturbeli->tglRetur }}</td>
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
                    <th>Supplier</th>
                    <th>No Faktur</th>
                    <th>Tanggal Faktur</th>
                    <th>Jatuh Tempo Faktur</th>
                    <th>No PO</th>
                    <th>Tanggal PO</th>
                    <th>Jatuh Tempo PO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fakturbeli as $c)
                    <tr>
                        <td>{{ $loop->iteration + $fakturbeli->firstItem() - 1 }}</td>
                        <td>{{ $c->supplier->nama }}</td>
                        <td>{{ $c->NoFaktur }}</td>
                        <td>{{ substr($c->TglFaktur, 0, 10) }}</td>
                        <td>{{ substr($c->TglJatuhTempoFaktur, 0, 10)}}</td>
                        <td>{{ $c->NoPO }}</td>
                        <td>{{ substr($c->TglPO, 0, 10)}}</td>
                        <td>{{ substr($c->TglJatuhTempoPO, 0, 10) }}</td>
                        <td class="text-center">
                            <form method="GET" action="/returPembelian/form/{{$c->id}}">
                                <button class="edit green" type="submit"><i class="fa fa-reply-all" title="Add Retur"></i></button>
                            </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $fakturbeli->links() }}
    </div>
    </div>
</div>

@endsection
@section('content')

@endsection
