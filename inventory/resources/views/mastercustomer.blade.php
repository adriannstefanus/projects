@extends('layouts.layout')
@section('title', 'Master Customer')
@section('header')
{{-- Ini buat dropdownnya didepan --}}
    <div class="search col-sm-12" style="position: inherit">
        {{-- Buat kiriin insert --}}
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
                {{-- <th>Name</th> --}}
                <th>
                    <div id="Nama" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('Nama', 'Name')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>Alamat</th> --}}
                <th>
                    <div id="Alamat" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('Alamat', 'Alamat')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>Telp</th> --}}
                <th>
                    <div id="Telp" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('Telp', 'Telp')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                {{-- <th>Email</th> --}}
                <th>
                    <div id="Email" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('Email', 'Email')
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
            @foreach ($customer as $c)
                <tr>
                    <td>{{ $loop->iteration + $customer->firstItem() - 1 }}</td>
                    <td>{{ $c->Nama }}</td>
                    <td>{{ $c->Alamat }}</td>
                    <td>{{ $c->Telp }}</td>
                    <td>{{ $c->Email }}</td>
                    {{-- Ini buat nengahin icon --}}
                    <td class="text-center">
                        {{--  --}}
                        <button class="edit" type="button"><i class="fa fa-pencil" title="Edit"></i></button>
                        <button class="delete" type="button"><i class="fa fa-trash" title="Delete"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$customer->appends(\Request::except('page'))->render() }}
    </div>
@endsection
@section('content')
    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
        <form method="POST"action="{{URL::to('/msCustomer/formEdit/submit')}}" >
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

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="last">Name</label>
                                    <input type="text" class="form-control" id="editNama" name="Nama">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" placeholder="email" id="editEmail"
                                        name="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="phone" id="editTelp"
                                        name="Telp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="company">Address</label>
                                    <textarea class="form-control" id="editAlamat" name="Alamat" rows="4"></textarea>
                                    {{-- <input type="text-area"  placeholder=""  id="Alamat" name="Alamat"> --}}
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
            <form action="{{ URL::to('/msCustomer/formInsert/submit') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Insert</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="last">Name</label>
                                    <input required type="text" class="form-control" placeholder="Name" value="" name="Nama">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input required type="email" class="form-control" placeholder="email"
                                        name="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input required type="tel" class="form-control" placeholder="phone" value=""
                                        name="Telp">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Address</label>
                                    <textarea class="form-control" name="Alamat" rows="4" placeholder="Address"></textarea>
                                    {{-- <input type="email" class="form-control" placeholder="email" value="" id="Email"name="Email"> --}}
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
            <form method="POST" action="{{URL::TO('/msCustomer/delete')}}">
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
            var object = {!! json_encode($customer->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            console.log(updateId)
            $('#editId').val(updateId['Idmember']);
            $('#editNama').val(updateId['Nama']);
            $('#editAlamat').val(updateId['Alamat']);
            $('#editTelp').val(updateId['Telp']);
            $('#editEmail').val(updateId['Email']);
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
            var object = {!! json_encode($customer->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            $('#del-name').val(updateId['Nama'])
            $('#deleteid').val(updateId['id']);
        });
    });

</script>
@endsection
