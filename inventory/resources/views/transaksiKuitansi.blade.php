@extends('layouts.layout')

@section('title', 'Kuitansi Penjualan')
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
                <th>Pelanggan</th>
                <th>No. Kuitansi</th>
                <th>No. Faktur</th>
                <th>Tanggal Kuitansi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kuitansi as $c)
                <tr>
                    <td>{{ $loop->iteration + $kuitansi->firstItem() - 1 }}</td>
                    <td>{{ $c->fakturjuals[0]->trpenawaran->customer->Nama }}</td>
                    <td>{{ $c->NoKuitansi }}</td>
                    <td>
                        @foreach($c->fakturjuals as $d)
                            {{$d->NoFaktur}},
                        @endforeach
                    </td>
                    <td>{{ date_format(date_create($c->TglKuitansi),'d M Y') }}</td>
                    <td class="text-center">
                        <button class="edit" type="button"><i class="fa fa-pencil" title="Edit"></i></button>
                        <a href="/kuitansi/print/{{$c->id}}">
                            <button class="print" type="button"><i class="fa fa-print" title="Print"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
            {{ $kuitansi->links() }}
    </div>
@endsection
@section('content')

    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
        <form method="POST"action="{{URL::to('/kuitansi/formEdit/submit')}}" >
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
                                    <label>Pelanggan</label>
                                    <select class="custom-select insertpelanggan" id="editpelanggan" name="editpelanggan">
                                        <option id="tempcek" disabled selected>Pilih Customer</option>
                                        @foreach($customer as $c)
                                            <option value="{{$c->id}}">{{$c->Nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Kuitansi</label>
                                    <input type="date" class="form-control" id="tglKuitansiEdit" name="tglKuitansiEdit">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Pilih Nomor Faktur</label>
                                    <select multiple class="form-control pilihfaktur" id="editFaktur" name="editfaktur[]" required>
                                        <option disabled selected>Pilih no Faktur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input readonly class="form-control" id="totalEdit" name="totalEdit">
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
            <form action="{{ URL::to('/kuitansi/formInsert/submit') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Insert</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <input type="text" name="dataid" id="dataid" style="display: none">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pelanggan</label>
                                    <select class="custom-select insertpelanggan" id="insertpelanggan" name="insertpelanggan">
                                        <option disabled selected>Pilih Customer</option>
                                        @foreach($customer as $c)
                                            <option value="{{$c->id}}">{{$c->Nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Kuitansi</label>
                                    <input type="date" class="form-control" id="tglKuitansiInsert" name="tglKuitansiInsert" value='{{date('Y-m-d')}}'>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Pilih Nomor Faktur</label>
                                    <select required multiple class="form-control pilihfaktur" id="insertFaktur" name="insertfaktur[]">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input readonly class="form-control" id="totalInsert" name="totalInsert">
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
            var object = {!! json_encode($kuitansi->toArray())!!};
            var cust = {!! json_encode($customer->toArray())!!};

            var data = object['data']
            var updateId = data[index]

            cust.forEach(function(temp){
                if(temp['id'] == updateId['IdPelanggan']){
                    $('#tempcek').html(temp['Nama'])
                    $('#tempcek').val(temp['id'])
                }
            });
            var tgl = updateId['TglKuitansi'].toString()
            $('#tglKuitansiEdit').val(tgl.substr(0,10))
            $('#totalEdit').val(updateId['Total']);
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
            var object = {!! json_encode($kuitansi->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            $('#del-name').val(updateId['NoKuitansi'])
            $('#deleteid').val(updateId['id']);
        });
    });

    $(document).ready(function(){
        $('.insertpelanggan').change(function(){
            var idpelanggan = $(this).val()
            $.ajax({
                method:'GET',
                url: '/kuitansi/getfaktur',
                data: {
                    id: idpelanggan
                },
                dataType: 'JSON',
                success : function(data){
                    var options = '<option disabled value="">Pilih no Faktur</option>'
                    data.forEach(function(value){
                        options = options + '<option value="'+value.id+'">'+value.NoFaktur+'</option>';
                    });
                    $('.pilihfaktur').html(options);
                },
                error : function(){
                    console.log('error')
                }
            })

        });
    });

    $(document).ready(function(){
        $('.pilihfaktur').change(function(){
            var fakturId = $(this).val()
            $.ajax({
                method:'GET',
                url: '/kuitansi/getTotal',
                data: {
                    id: fakturId
                },
                dataType: 'JSON',
                success : function(data){
                    console.log(data)
                    $('#totalEdit').val(data)
                    $('#totalInsert').val(data)
                },
                error : function(){
                    console.log('error')
                }
            })
        });
    });
</script>
@endsection
