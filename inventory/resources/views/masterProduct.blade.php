@extends('layouts.layout')

@section('title', 'Master Product')
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
                <th>
                    <div id="kategori" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('kategori', 'Kategori')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                <th>
                    <div id='jenis' class="d-flex justify-content-center">
                        <div>
                            @sortablelink('jenis', 'Jenis')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                <th>
                    <div id="supplier" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('supplier.nama', 'Supplier')
                        </div>
                        <div>
                            @include('layouts.search')
                        </div>
                    </div>
                </th>
                <th>
                    <div id="tipe" class="d-flex justify-content-center">
                        <div>
                            @sortablelink('tipe', 'Tipe')
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
            @foreach ($product as $c)
                <tr>
                    <td>{{ $loop->iteration + $product->firstItem() - 1 }}</td>
                    <td>{{ $c->kategori }}</td>
                    <td>{{ $c->jenis }}</td>
                    <td>{{$c->supplier->nama}}</td>
                    <td>{{ $c->tipe }}</td>
                    <td class="text-center">
                        <button class="edit" type="button"><i class="fa fa-pencil" title="Edit"></i></button>
                        <button class="delete" type="button"><i class="fa fa-trash" title="Delete"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$product->appends(\Request::except('page'))->render() }}
    </div>
@endsection
@section('content')

    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <form method="POST" action="{{ URL::to('/msProduct/formEdit/submit') }}">
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

                                    {{-- INI YG SUPPLIER DARI DB
                                    --}}
                                    <label for="supplier">Supplier</label>
                                    <select required class="custom-select" id="supplier" name="supplier">
                                        <option id="tempSupplier" selected></option>
                                        @foreach ($supplier as $d)
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <select required class="custom-select" id="kategori" name="kategori">
                                        <option id="tempKategori" value="" selected>Choose Category</option>
                                        <option value="AlloySteel">Alloy Steel</option>
                                        <option value="CarbonSteel">Carbon Steel</option>
                                        <option value="MildSteel">MildSteel</option>
                                        <option value="NonferrousMetals">Non-ferrous Metals</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis</label>
                                    <select required class="custom-select" id="jenis" name="jenis">
                                        <option id="tempJenis" value="" selected>Choose Type</option>
                                        <option value="Besi">Besi</option>
                                        <option value="Baja">Baja</option>
                                        <option value="Kuningan (Brass)">Kuningan (Brass)</option>
                                        <option value="Perunggu (Bronze)">Perunggu (Bronze)</option>
                                        <option value="Aluminium">Aluminium</option>
                                        <option value="Aluminium Perunggu (Bronze)">Aluminium Perunggu (Bronze)</option>
                                        <option value="Carbon Steel">Carbon Steel</option>
                                        <option value="Ancuran / Cor">Ancuran / Cor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tipe</label>
                                    <input type="tel" class="form-control" placeholder="Tipe" value="" id="editTipe"
                                        name="tipe">
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
            <form action="{{ URL::to('/msProduct/formInsert/submit') }}" method="POST">
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
                                    {{-- INI YG SUPPLIER DARI DB
                                    --}}
                                    <label for="supplier">Supplier</label>
                                    <select required class="custom-select" name="supplierId">
                                        <option disabled value="" selected>Choose Supplier</option>
                                        @foreach ($supplier as $d)
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Kategori</label>
                                    <select required class="custom-select" name="kategori">
                                        <option disabled value=""selected>Choose Category</option>
                                        <option value="AlloySteel">Alloy Steel</option>
                                        <option value="CarbonSteel">Carbon Steel</option>
                                        <option value="MildSteel">MildSteel</option>
                                        <option value="NonferrousMetals">Non-ferrous Metals</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Jenis</label>
                                    <select required class="custom-select" name="jenis">
                                        <option disabled value="" selected>Choose Type</option>
                                        <option value="Besi">Besi</option>
                                        <option value="Baja">Baja</option>
                                        <option value="Kuningan (Brass)">Kuningan (Brass)</option>
                                        <option value="Perunggu (Bronze)">Perunggu (Bronze)</option>
                                        <option value="Aluminium">Aluminium</option>
                                        <option value="Aluminium Perunggu (Bronze)">Aluminium Perunggu (Bronze)</option>
                                        <option value="Carbon Steel">Carbon Steel</option>
                                        <option value="Ancuran / Cor">Ancuran / Cor</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Tipe</label>
                                    <input required class="form-control" placeholder="Tipe" value=""
                                        name="tipe">
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
                <form method="POST" action="{{ URL::TO('/msProduct/delete') }}">
                    @csrf
                    <div class="modal-body">
                        <p>Do you really want to delete these records?</p>
                        <input type="text" id="deleteid" name="deleteid" style="display: none">
                        <input class="confirm-text" type="text" id="del-name">
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
                var index = (data[0] - 1) % 10;
                var object = {!! json_encode($product->toArray())!!};
                var data = object['data']
                var updateId = data[index]
                var child = updateId['supplier']
                console.log(updateId)
                $('#tempSupplier').html(child['nama']);
                $('#tempSupplier').val(child['id']);
                $('#editTipe').val(updateId['tipe']);
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
                var index = (data[0] - 1) % 10;
                var object = {!! json_encode($product->toArray())!!};
                var data = object['data']
                var updateId = data[index]
                $('#del-name').val(updateId['tipe'])
                $('#deleteid').val(updateId['id']);
            });
        });

    </script>
@endsection
