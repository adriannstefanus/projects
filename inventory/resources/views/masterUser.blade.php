@extends('layouts.layout')

@section('title', 'Master User')
@section('header')
    <div class="search col-sm-12" style="position: inherit">
        <button type="button" class="btn btn-success" id="btnInsert" style="float: left">
        <i class="material-icons">&#xE147;</i><span>Insert</span>
        </button>
    </div>
    @if(Auth::user()->role == 'owner')
    <div class="search col-sm-12" style="position: inherit">
        <button type="button" class="btn btn-danger" id="btnOwner" style="float: right">
        <i class="fa fa-user-circle"></i><span>Change Owner</span>
        </button>
    </div>
    @endif
@endsection
@section('table')
    <table class="table table-striped table-hover" border="1px solid #343e42">
        <thead>
            <tr>
                <th>No</th>
                {{-- <th>Fullname</th> --}}
                <th>
                    <div id="name" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('name', 'Fullname')
                        </div>
                    </div>
                </th>
                {{-- <th>Role</th> --}}
                <th>
                    <div id="role" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('role', 'Role')
                        </div>
                    </div>
                </th>
                {{-- <th>Email</th> --}}
                <th>
                    <div id="email" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('email', 'Email')
                        </div>
                    </div>
                </th>
                {{-- <th>Status</th> --}}
                <th>
                    <div id="status" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('status', 'Status')
                        </div>
                    </div>
                </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $c)
                <tr>
                    <td>{{ $loop->iteration + $user->firstItem() - 1 }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->role }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->status }}</td>
                    <td class="text-center">
                        @if(Auth::user()->role == 'owner')
                        <button class="edit"><i class="fa fa-pencil" title="Edit"></i></button>
                        @endif
                        @if($c->status == 'active')
                            <button class="delete" type="button"><i class="fa fa-ban" title="Deactive"></i></button>
                        @else
                            <button class="delete" type="button" style="color: green"><i class="fa fa-check" title="Active"></i></button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
            {{ $user->links() }}
    </div>
@endsection
@section('content')

    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
        <form method="POST"action="{{URL::to('/msUser/formEdit/submit')}}" >
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
                                    <label for="first">User Role</label>
                                    <select name="userRole" id="editRole" class="custom-select">
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last"> Full Name</label>
                                    <input type="text" class="form-control" placeholder="" value="" id="editFullname" name="fullName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company">User Name</label>
                                    <input type="text" class="form-control" placeholder="" value="" id="editUsername"
                                        name="userName">
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="phone" value="" id="Telp"
                                        name="Telp">
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" placeholder="" value="" id="editEmail"
                                        name="email">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Password</label>
                                    <input type="email" class="form-control" placeholder="" value="" id="editPassword"
                                        name="password">
                                </div>
                            </div>
                        </div> --}}
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
            <form action="{{ URL::to('/msUser/formInsert/submit') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Add User</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first">User Role</label>
                                    <select name="role" id="role" class="custom-select">
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last"> Full Name</label>
                                    <input required type="text" class="form-control" placeholder="Full Name" name="fullname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company">User Name</label>
                                    <input required type="text" class="form-control" placeholder="User Name" name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input required type="email" class="form-control" placeholder="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Password</label>
                                    <input required type="password" class="form-control" placeholder="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="email">Confirm Password</label>
                                    <input required type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
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
            <form method="POST" action="{{URL::TO('/msUser/deactivate')}}">
                @csrf
                <div class="modal-body">
                    <p>Do you really want to deactivate/activate this user?</p>
                    <input type="text" id="deleteid" name="deleteid" style="display: none">
                    <input style="text-align: center;font-weight: bold" readonly class="form-control-plaintext" type="text" id="del-name">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Disable/Enable</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModalOwner">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <h4 class="modal-title w-100">Change Owner Role</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            <form method="POST" action="{{URL::TO('/msUser/changeOwner')}}">
                @csrf
                <div class="modal-body">
                    <p>Do you really want to give Owner Role to this User?</p>
                    <p>You will demoted to Admin Role</p>
                    <select required class="form-control" id="newUser" name="newUser">
                        <option value="" selected>Pilih User</option>
                        @foreach($user as $x)
                        <option value="{{$x->id}}">{{$x->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Change Ownership</button>
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
            var object = {!! json_encode($user->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            console.log(updateId)
            console.log(index)

            $('#editRole').val(updateId['role']);
            $('#editFullname').val(updateId['name']);
            $('#editUsername').val(updateId['username']);
            $('#editEmail').val(updateId['email']);

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
            var object = {!! json_encode($user->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            $('#del-name').val(updateId['name'])
            $('#deleteid').val(updateId['id']);
        });
    });
    $(document).ready(function() {
        $('#btnOwner').click(function() {
            $('#myModalOwner').modal();
        });
    });

</script>
@endsection
