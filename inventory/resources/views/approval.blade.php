@extends('layouts.layout')

@section('title', 'Approval')
@section('table')
<table class="table table-striped table-hover" border="1px solid #343e42">
    <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>No S.O</th>
            <th>Tgl S.O</th>
            <th>Jatuh Tempo S.O</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penawaran as $c)
            <tr>
                <td>{{ $loop->iteration + $penawaran->firstItem() - 1 }}</td>
                <td>{{ $c->customer->Nama }}</td>
                <td>{{ $c->NoSO }}</td>
                <td>{{ date_format(date_create($c->TglSO), 'd M Y') }}</td>
                <td>{{ date_format(date_create($c->TglJatuhtempoSO), 'd M Y') }}</td>
                <td class="text-center">
                    <form action="/approval/view/{{$c->id}}" method="POST">
                        @csrf
                        <button class="blue" type="submit"><i class="fa fa-file-text-o" title="Detail"></i></button>
                        <button class="delete" type="button"><i class="fa fa-check-circle-o" title="Approval"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    <div class="d-flex justify-content-center">
            {{ $penawaran->links() }}
    </div>
@endsection
@section('content')

<div class="modal fade" id="myModalDelete">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="fa fa-check"></i>
                </div>
                <h4 class="modal-title w-100">Document Approval</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <form method="POST" action="{{URL::TO('/approval/action')}}">
            @csrf
            <div class="modal-body">
                <p>Document with S.O Number :</p>
                <input readonly class="confirm-text" type="text" id="del-name" name="del-name">
                <p>Approve This Transaction? This process cannot be undone</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button name="action" value="approve" type="submit" class="btn btn-success">Approve</button>
                <button name="action" value="reject" type="submit" class="btn btn-danger">Reject</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script>

$(document).ready(function() {
        $('.delete').click(function() {
            $('#myModalDelete').modal();
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var index = (data[0]-1)%10;
            var object = {!! json_encode($penawaran->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            $('#del-name').val(updateId['NoSO'])
        });
    });
</script>
@endsection
