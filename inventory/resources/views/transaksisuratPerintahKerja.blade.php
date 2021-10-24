@extends('layouts.layout')

@section('title', 'Surat Perintah Kerja')

@section('table')
<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="#spkOpen" data-toggle="tab" role="tab" aria-controls="spkOpen" aria-selected="true">SPK belum selesai</a></li>
    <li class="nav-item"><a class="nav-link" href="#spkClose" data-toggle="tab" role="tab" aria-controls="spkClosed" aria-selected="false">SPK selesai</a></li>
</ul>

<div class="tab-content" id="myTabContent">
    <div id="spkOpen" class="tab-pane fade show active" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th style="width: 3%">No</th>
                    <th>
                        <div id="noSPK" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('nospk', 'NO. SPK')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="pelanggan" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('customer', 'Pelanggan')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="noso" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('trpenawaran.NoSO', 'No. SO')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="tglspk" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('tglspk', 'Tgl. SPK')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="itembarang" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('item', 'Item Barang')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="tebal" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('barang.tebal', 'Tebal')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="qty" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('barang.qty', 'Qty')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="keterangan" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('keterangan', 'Keterangan')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="pic" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('pic', 'PIC')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th style="width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spk as $c)
                    <tr>
                        <td>{{ $loop->iteration + $spk->firstItem() - 1 }}</td>
                        <td>{{ $c->noSPK }}</td>
                        <td>{{ $c->trpenawaran->customer->Nama }}</td>
                        <td>{{ $c->trpenawaran->NoSO }}</td>
                        <td>{{ date_format(date_create($c->tglSPK), 'd M Y') }}</td>
                        @if($c->barang->bentuk == 'RoundPlate')
                            <td>{{ $c->barang->producttype->tipe }}({{$c->barang->diameter}}x{{$c->barang->tebal}})</td>
                        @else
                            @if($c->barang->bentuk == 'RoundBar')
                                <td>{{ $c->barang->producttype->tipe }}({{$c->barang->diameter}}x{{$c->barang->panjang}})</td>
                            @else
                                <td>{{ $c->barang->producttype->tipe }}({{$c->barang->panjang}}x{{$c->barang->lebar}}x{{$c->barang->tebal}})</td>
                            @endif
                        @endif
                        <td>{{$c->barang->tebal}}</td>
                        <td>{{ $c->barang->qty }}</td>
                        <td>{{ $c->Keterangan }}</td>
                        <td>{{ $c->pic }}</td>
                        <td class="text-center">
                            <button class="green setPic" type="button"><i class="fa fa-user-plus" title="Set PIC"></i></button>
                            <button class="blue setSpk" type="button"><i class="fa fa-check-square"title="Set SPK Selesai"></i></button>
                            <a href="/spk/print/{{$c->id}}" onclick="cekPIC(event)"><button class="print" type="button"><i class="fa fa-print" title="Print"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
                {{ $spk->links() }}
        </div>
    </div>


{{-- TAB 2 --}}
    <div id="spkClose" class="tab-pane fade" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NO. SPK</th>
                    <th>Pelanggan</th>
                    <th>No. SO</th>
                    <th>Tanggal SPK</th>
                    <th>Item Barang</th>
                    <th>Tebal</th>
                    <th>Quantity</th>
                    <th>Keterangan</th>
                    <th>PIC</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spkDone as $c)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $c->noSPK }}</td>
                        <td>{{ $c->trpenawaran->customer->Nama }}</td>
                        <td>{{ $c->trpenawaran->NoSO }}</td>
                        <td>{{ date_format(date_create($c->tglSPK), 'd M Y') }}</td>
                        @if($c->barang->bentuk == 'RoundPlate')
                            <td>{{ $c->barang->producttype->tipe }}({{$c->barang->diameter}}x{{$c->barang->tebal}})</td>
                        @else
                            @if($c->barang->bentuk == 'RoundBar')
                                <td>{{ $c->barang->producttype->tipe }}({{$c->barang->diameter}}x{{$c->barang->panjang}})</td>
                            @else
                                <td>{{ $c->barang->producttype->tipe }}({{$c->barang->panjang}}x{{$c->barang->lebar}}x{{$c->barang->tebal}})</td>
                            @endif
                        @endif
                        <td>{{$c->barang->tebal}}</td>
                        <td>{{ $c->barang->qty }}</td>
                        <td>{{ $c->Keterangan }}</td>
                        <td>{{ $c->pic }}</td>
                        <td class="text-center">
                            <a href="/spk/print/{{$c->id}}"><button class="print" type="button"><i class="fa fa-print" title="Print"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('content')
<div class="modal fade" id="myModalSetPic">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h4 class="modal-title w-100">Set Detail for this SPK</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <form method="POST" action="{{URL::TO('/spk/setPic')}}">
            @csrf
            <div class="modal-body">
                <p>PIC Name : </p>
                <input type="text" id="deleteid" name="deleteid" style="display: none">
                <input required class="form-control" type="text" id="setpicName" name="picName">
                <p>Keterangan :</p>
                <input class="form-control" type="text" id="setketerangan" name="keterangan">
                <p>Tanggal SPK :</p>
                <input class="form-control" type="date" id="settglspk" name="tglspk">
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Set</button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="myModalSetSpk">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <h4 class="modal-title w-100">Send SPK</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
        <form method="POST" action="{{URL::TO('/spk/setSpk')}}">
            @csrf
            <div class="modal-body">
                <p>Are you sure you want to send this SPK ?</p>
                <input type="text" id="setid" name="setid" style="display: none">
                <input readonly class="confirm-text" type="text" id="del-name" name="del-name">
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Set</button>
            </div>
        </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
            $('.setPic').click(function() {
                $('#myModalSetPic').modal();
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                var index = (data[0] - 1) % 10;
                var object = {!! json_encode($spk->toArray())!!};
                var data = object['data']
                var updateId = data[index]
                console.log(updateId)
                console.log(updateId['Keterangan'])
                console.log(updateId['tglSPK'])
                $('#deleteid').val(updateId['id']);
                $('#setpicName').val(updateId['pic']);
                $('#setketerangan').val(updateId['Keterangan']);
                $('#settglspk').val(updateId['tglSPK']);
            });
        });

        $(document).ready(function() {
            $('.setSpk').click(function() {
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                var index = (data[0] - 1) % 10;
                var object = {!! json_encode($spk->toArray())!!};
                var data = object['data']
                var updateId = data[index]
                if(updateId['pic']){
                    $('#myModalSetSpk').modal();
                    $('#setid').val(updateId['id']);
                    $('#del-name').val(updateId['noSPK']);
                }else{
                    alert('You need to fill PIC first');
                    return;
                }
            });
        });

        function cekPIC(e){
            var ifPIC = $(e.target).closest('td').prev().html()
            if(!ifPIC || ifPIC == ''){
                e.preventDefault()
                alert('Please input PIC First !!!')
                return false
            }
        }

</script>
@endsection

