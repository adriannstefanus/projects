@extends('layouts.layout')

@section('title', 'Faktur Penjualan')
@section('header')
    <div class="search col-sm-12" style="position: inherit">
    </div>
@endsection
@section('table')
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
                    <td>{{ date_format(date_create($c->TglFaktur),'d M Y') }}</td>
                    @if($c->TglJatuhTempoFaktur)
                        <td>{{ date_format(date_create($c->TglJatuhTempoFaktur),'d M Y')}}</td>
                    @else
                        <td>{{ date_format(date_create($c->trpenawaran->TglJatuhTempoSO),'d M Y')}}</td>
                    @endif
                    <td>{{ $c->trpenawaran->NoSO }}</td>
                    <td>{{ date_format(date_create($c->trpenawaran->TglSO),'d M Y')}}</td>
                    <td>{{ date_format(date_create($c->trpenawaran->TglJatuhTempoSO),'d M Y') }}</td>
                    <td class="text-center">
                        <form method="POST" action="/fakturPenjualan/editForm/{{$c->id}}">
                            @csrf
                            <button class="edit" type="submit"><i class="fa fa-pencil" title="Edit"></i></button>
                            <a href="/fakturPenjualan/print/{{$c->id}}">
                                <button class="print" type="button"><i class="fa fa-print" title="Print"></i></button>
                            </a>
                        </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
            {{ $fakturjual->links() }}
    </div>
@endsection
@section('content')
<script>
</script>
@endsection
