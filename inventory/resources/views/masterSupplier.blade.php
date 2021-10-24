@extends('layouts.layout')

@section('title', 'Master Supplier')
@section('header')
    <div class="search col-sm-12" style="position: inherit">
        <button type="button" class="btn btn-success" id="btnInsert" style="float: left">
        <i class="material-icons">&#xE147;</i><span>Insert</span>
        </button>
    </div>
@endsection
@section('table')
    <table class="table table-striped table-hover" border="1px solid #343e42">
        <thead>
            <tr>
                <th>No</th>
                {{-- <th>Nama Supplier</th> --}}
                <th>
                    <div id="nama" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('nama', 'Nama Supplier')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>Alamat</th> --}}
                <th>
                    <div id="alamat" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('alamat', 'Alamat')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>Telp</th> --}}
                <th>
                    <div id="telp" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('telp', 'Telp')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>Email</th> --}}
                <th>
                    <div id="email" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('email', 'Email')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>NPWP</th> --}}
                <th>
                    <div id="npwp" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('npwp', 'NPWP')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $c)
                <tr>
                    <td>{{ $loop->iteration + $supplier->firstItem() - 1 }}</td>
                    <td>{{ $c->nama }}</td>
                    <td>{{ $c->alamat }}</td>
                    <td>{{ $c->telp }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->npwp }}</td>
                    <td class="text-center">
                        <button class="edit" type="button"><i class="fa fa-pencil" title="Edit"></i></button>
                        <button class="delete" type="button"><i class="fa fa-trash" title="Delete"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
            {{ $supplier->links() }}
    </div>
@endsection
@section('content')

    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
        <form method="POST"action="{{URL::to('/msSupplier/formEdit/submit')}}" >
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Edit</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <input type="text" name="dataid" id="dataid" style="display: none">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Supplier</label>
                                    <input required type="text" class="form-control" placeholder="" id="supplierName"
                                        name="supplierName">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alamat Supplier</label>
                                    <input required type="text" class="form-control" id="address" name="address">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No Telp Supplier</label>
                                    <input required type="text" class="form-control" placeholder=""  id="phoneNumber"
                                        name="phoneNumber">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Supplier</label>
                                    <input required type="email" class="form-control" placeholder="Email" id="editEmail"
                                        name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NPWP Supplier</label>
                                    <input required type="text" class="form-control" placeholder="No.NPWP" id="npwpNumber"
                                        name="npwpNumber">
                                </div>
                            </div>
                        </div>
                        <div class="editbtnform">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="myModalInsert">
        <div class="modal-dialog">
            <!-- Modal content-->
            <form action="{{ URL::to('/msSupplier/formInsert/submit') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Insert</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Supplier</label>
                                    <input required type="text" class="form-control" placeholder="Supplier Name" value=""
                                        name="supplierName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alamat Supplier</label>
                                    <input required type="text" class="form-control" placeholder="Supplier Address" value="" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No.Telp Supplier</label>
                                    <input required type="text" class="form-control" placeholder="Phone Number" value=""
                                        name="phoneNumber">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Supplier</label>
                                    <input required type="email" class="form-control" placeholder="Email" value=""
                                        name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NPWP Supplier</label>
                                    <input required type="text" class="form-control" placeholder="No.NPWP" value=""
                                        name="npwpNumber">
                                </div>
                            </div>
                        </div>
                        <div class="editbtnform">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="myModalDelete">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                    <h4 class="modal-title w-100">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            <form method="POST" action="{{URL::TO('/msSupplier/delete')}}">
                @csrf
                <div class="modal-body">
                    <p>Do you really want to delete these records?</p>
                    <input type="text" id="deleteid" name="deleteid" style="display: none">
                    <input style="text-align: center;font-weight: bold" readonly class="form-control-plaintext" type="text" id="del-name">
                    <p>This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $("#btnInsert").click(function() {
            $('#myModalInsert').modal();

        });
    });
    $(document).ready(function() {
        $('.edit').on('click', function() {
            $('#myModalEdit').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var index = (data[0]-1)%10;
            var object = {!! json_encode($supplier->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            console.log(updateId)
            console.log(index)

            $('#supplierName').val(updateId['nama']);
            $('#address').val(updateId['alamat']);
            $('#phoneNumber').val(updateId['telp']);
            $('#editEmail').val(updateId['email']);
            $('#npwpNumber').val(updateId['npwp']);
            $('#dataid').val(updateId['id']);
        });
    });

    $(document).ready(function() {
        $('.delete').click(function() {
            $('#myModalDelete').modal();
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var index = (data[0]-1)%10;
            var object = {!! json_encode($supplier->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            $('#del-name').val(updateId['nama'])
            $('#deleteid').val(updateId['id']);
        });
    });

</script>
@endsection
