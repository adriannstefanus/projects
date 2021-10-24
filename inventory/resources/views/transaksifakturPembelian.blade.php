@extends('layouts.layout')

@section('title', 'Faktur Pembelian')
@section('header')
    <div class="search col-sm-12" style="position: inherit">
        <a href="/fakturPembelian/insertForm">
            <button type="button" class="btn btn-success" id="btnInsert" style="float: left">
                <i class="material-icons">&#xE147;</i><span>Insert</span>
            </button>
        </a>
    </div>
@endsection
@section('table')
    <table class="table table-striped table-hover" border="1px solid #343e42">
        <thead>
            <tr>
                <th>No</th>
                <th>Supplier</th>
                <th>No Faktur</th>
                <th>Tanggal Faktur</th>
                <th>Jatuh Tempo Faktur</th>
                <th>No P.O</th>
                <th>Tanggal P.O</th>
                <th>Jatuh Tempo P.O</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakturbeli as $c)
                <tr>
                    <td>{{ $loop->iteration + $fakturbeli->firstItem() - 1 }}</td>
                    <td>{{ $c->Supplier->nama }}</td>
                    <td>{{ $c->NoFaktur }}</td>
                    <td>{{ date_format(date_create($c->TglFaktur), 'd M Y') }}</td>
                    <td>{{ date_format(date_create($c->TglJatuhTempoFaktur), 'd M Y') }}</td>
                    <td>{{ $c->NoPO }}</td>
                    <td>{{ date_format(date_create($c->TglPO), 'd M Y') }}</td>
                    <td>{{ date_format(date_create($c->TglJatuhTempoPO), 'd M Y') }}</td>
                    <td class="text-center">
                        <a href="/fakturPembelian/viewForm/{{$c->id}}">
                            <button class="edit" type="button"><i class="fa fa-pencil" title="Detail"></i></button>
                        </a>
                        <a href="/fakturPembelian/print/{{$c->id}}">
                            <button class="print" type="button"><i class="fa fa-print" title="Print"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
            {{ $fakturbeli->links() }}
    </div>
@endsection
@section('content')

<script>

</script>
@endsection
