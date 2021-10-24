@extends('layouts.layout')

@section('title', 'Surat Penawaran')
@section('header')
    <div class="search col-sm-12" style="position: inherit" id="noprint">
        <a href="{{URL::TO('/trPenawaran/insertForm')}}">
            <button type="button" class="insert btn btn-success" id="btnInsert" style="float: left">
                <i class="material-icons">&#xE147;</i><span>Insert</span>
            </button>
        </a>
    </div>
@endsection
@section('table')
<div role="tablist" id="noprint">
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item"><a class="nav-link active" href="#penawaranpending" data-toggle="tab" role="tab" aria-controls="penawaranpending" aria-selected="true">Surat Penawaran</a></li>
        <li class="nav-item"><a class="nav-link" href="#penawarandone" data-toggle="tab" role="tab" aria-controls="penawarandone" aria-selected="false">History Penawaran</a></li>
        <li class="nav-item"><a class="nav-link" href="#penawaranall" data-toggle="tab" role="tab" aria-controls="penawaranall" aria-selected="false">All Penawaran</a></li>
    </ul>
</div>


<div class="tab-content" id="myTabContent">
    <div id="penawaranpending" class="tab-pane fade show active" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>
                        <div id="Nama" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('customer.Nama', 'Pelanggan')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="NoSO" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('NoSO', 'No. SO')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="TglSO" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('TglSO', 'Tgl. SO')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="TglJatuhTempoSO" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('TglJatuhTempoSO', 'Tgl Jatuh Tempo SO')
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
                @foreach ($penawaran as $c)
                    <tr>
                        <td>{{ $loop->iteration + $penawaran->firstItem() - 1 }}</td>
                        <td>{{ $c->customer->Nama }}</td>
                        <td>{{ $c->NoSO }}</td>
                        <td>{{ date_format(date_create($c->TglSO), 'd M Y') }}</td>
                        <td>{{ date_format(date_create($c->TglJatuhTempoSO), 'd M Y') }}</td>
                        <td class="text-center">
                        <a href="/trPenawaran/editForm/{{$c->id}}">
                                <button class="edit" type="button"><i class="fa fa-pencil" title="Edit"></i></button>
                            </a>
                            <button class="delete" type="button"><i class="fa fa-handshake-o" title="Set Deal"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$penawaran->appends(\Request::except('page'))->render() }}
        </div>
    </div>

    <div id="penawarandone" class="tab-pane fade" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>
                        <div id="NamaDone" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('customer.Nama', 'Pelanggan')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="NoSODone" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('NoSO', 'No. SO')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="TglSODone" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('TglSO', 'Tgl. SO')
                            </div>
                            <div>
                                @include('layouts.search')
                            </div>
                        </div>
                    </th>
                    <th>
                        <div id="TglJatuhTempoSODone" class="d-flex justify-content-center">
                            <div>
                                @sortablelink('TglJatuhTempoSO', 'Tgl Jatuh Tempo SO')
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
                @foreach ($penawaran_selesai as $c)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $c->customer->Nama }}</td>
                        <td>{{ $c->NoSO }}</td>
                        <td>{{ date_format(date_create($c->TglSO), 'd M Y') }}</td>
                        <td>{{ date_format(date_create($c->TglJatuhtempoSO), 'd M Y') }}</td>
                        <td class="text-center">
                            <a href="/trPenawaran/print/{{$c->id}}">
                                <button class="print" type="button"><i class="fa fa-print" title="Print"></i></button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$penawaran_selesai->appends(\Request::except('page'))->render() }}
        </div>
    </div>

    <div id="penawaranall" class="tab-pane fade" role="tabpanel">
        <div class="search-form m-2" id="noprint">
            <form action="/trPenawaran/submitsearch" method="GET">
                <table>
                    <tr>
                    <td><label>No Order</label></td>
                    <td class="pr-5">
                        <select class="form-control form-control-sm" name="search_noorder" id="search-noorder">

                        </select>
                    </td>
                    <td>
                        {{-- <label>Decimal</label> --}}
                    </td>
                    <td class="pr-5">
                        {{-- <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="optradio"><label class="form-check-label">1</label>
                            <input type="radio" class="form-check-input" name="optradio"><label class="form-check-label">2</label>
                            <input type="radio" class="form-check-input" name="optradio"><label class="form-check-label">3</label>
                        </div> --}}
                    </td>
                    <td><label>Tanggal Order</label></td>
                    <td><input type="date" class="form-control form-control-sm" name="search_tglorder" id="search-tglorder"></td>
                </tr>
                <tr>
                    <td><label>Customer</label></td>
                    <td class="pr-5">
                        <select class="form-control form-control-sm" name="search_cust" id="search-cust">

                        </select>
                    </td>
                    <td><label>No PO</label></td>
                    <td class="pr-5"><input type="text" class="form-control form-control-sm" name="search_nopo" id="search-nopo"></td>
                    <td><label>Salesman</label></td>
                    <td>
                        <select class="form-control form-control-sm" name="search_salesman" id="search-salesman">

                        </select>
                    </td>
                </tr>
                </table>
                <table>
                <tr>
                    <td><label>Discount</label></td>
                    <td class="pr-5"><input value="0" onchange="hitungTotal()" type="text" class="form-control form-control-sm" name="search_discount" id="search-discount"></td>
                    <td><label>PPN</label></td>
                    <td class="pr-5"><input value="0" onchange="hitungTotal()" type="text" class="form-control form-control-sm" name="search_ppn" id="search-ppn"></td>
                    <td style="width: 65%"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">SEARCH</button>
                    </td>
                </tr>
                </table>
            </form>
        </div>
        @isset($penawaran_all)
        <table id="trans-table" class=" print-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Keterangan</th>
                    <th>Bentuk</th>
                    <th>Tebal</th>
                    <th>Lebar</th>
                    <th>Panjang</th>
                    <th>Diameter</th>
                    <th>Berat Jenis</th>
                    <th>Hrg/Kg</th>
                    <th>Qty</th>
                    <th>Berat</th>
                    <th>Service</th>
                    <th>Harga Pcs</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penawaran_all as $c)
                    <tr>
                        <td style="text-align: center">{{$loop->iteration}}</td>
                        <td style="text-align: center">{{$c->id}}</td>
                        <td style="text-align: center">{{$c->producttype->tipe}}</td>
                        <td style="text-align: center">{{$c->trpenawaran->keterangan}}</td>
                        <td style="text-align: center">{{$c->bentuk}}</td>
                        <td style="text-align: center">{{$c->tebal}}</td>
                        <td style="text-align: center">{{$c->lebar}}</td>
                        <td style="text-align: center">{{$c->panjang}}</td>
                        <td style="text-align: center">{{$c->diameter}}</td>
                        <td style="text-align: center">{{$c->beratJenis}}</td>
                        <td style="text-align: center">{{$c->hargaKg}}</td>
                        <td style="text-align: center">{{$c->qty}}</td>
                        <td style="text-align: center">{{$c->berat}}</td>
                        <td style="text-align: center">{{number_format($c->ongkosPotong,0,',','.')}}</td>
                        <td style="text-align: center">{{number_format($c->hargaSatuan,0,',','.')}}</td>
                        <td style="text-align: center" class="totalprice">{{number_format($c->totprice,0,',','.')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            <table>
                <tr>
                    <td>
                        <button onclick="window.print()" class="btn btn-success" id="noprint">PRINT</button>
                    </td>
                    <td style="width: 40%"></td>
                    <td><label>SubTotal I</label></td>
                    <td>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp. </span>
                            </div>
                            <input readonly type="text" class="form-control form-control-sm" id="subtotal1">
                        </div>
                    </td>
                    <td><label>Total PPN</label></td>
                    <td>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp. </span>
                            </div>
                            <input readonly type="text" class="form-control form-control-sm" id="ppn">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td style="width: 40%"></td>
                    <td><label>Diskon</label></td>
                    <td>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp. </span>
                            </div>
                            <input readonly type="text" class="form-control form-control-sm" id="diskon">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 40%"></td>
                    <td><label>SubTotal II</label></td>
                    <td>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp. </span>
                            </div>
                            <input readonly type="text" class="form-control form-control-sm" id="subtotal2">
                        </div>
                    </td>
                    <td><label>Grand Total</label></td>
                    <td>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Rp. </span>
                            </div>
                            <input readonly type="text" class="form-control form-control-sm" id="total">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        @endisset
    </div>

</div>

@endsection
@section('content')
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
                <form method="POST" action="{{ URL::TO('/trPenawaran/deal') }}">
                    @csrf
                    <div class="modal-body">
                        <p>Do you really want to deal these records?</p>
                        <input class="confirm-text" readonly type="text" id="del-name" name="del-name">
                        <p>This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Deal</button>
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
                var index = (data[0] - 1) % 10;
                var object = {!! json_encode($penawaran->toArray())!!};
                var data = object['data']
                var updateId = data[index]
                $('#del-name').val(updateId['NoSO'])
            });
        });
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if(activeTab){
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }
        });
        //set search bar
        setSearch()
        function setSearch(){
            $.ajax({
                method: 'GET',
                url: '/trPenawaran/getSearchData',
                success: function(data) {
                    var noorder = data.noorder
                    var customer = data.customer
                    var salesman = data.salesman
                    //noorder option
                    var options = '<option selected value="">Semua</option>'
                    noorder.forEach(function(value){
                        options = options + '<option value="'+value.id+'">'+value.NoSO+'</option>';
                    });
                    $('#search-noorder').html(options);
                    //customer option
                    var options = '<option selected value="">Semua</option>'
                    customer.forEach(function(value){
                        options = options + '<option value="'+value.id+'">'+value.Nama+'</option>';
                    });
                    $('#search-cust').html(options);
                    //salesman option
                    var options = '<option selected value="">Semua</option>'
                    salesman.forEach(function(value){
                        options = options + '<option value="'+value.id+'">'+value.name+'</option>';
                    });
                    $('#search-salesman').html(options);
                    hitungTotal()
                },
            })
        }
        function hitungTotal(){
            var tableRows = $('#trans-table tr').length
            var tab = document.getElementById('trans-table');
            if(tab){
                if(tab.rows[1]){
                //subtotal1
                $subtotal = 0;
                for(var i = 1, row; row = tab.rows[i]; i++){
                    const temp = row.cells[15].innerHTML
                    $temp = temp.replaceAll('.', '')
                    $subtotal = +$subtotal + +$temp;
                }
                $subtotal = Math.round($subtotal)
                //diskon
                $diskon = $('#search-discount').val()
                $diskonprice = 0;
                if(!$diskon || $diskon == 0){
                    $diskonprice = 0
                }else{
                    $diskonprice = ($diskon/100)*$subtotal
                }
                $diskonprice = Math.round($diskonprice)
                //subtotal2
                $subtotal2 = $subtotal-$diskonprice
                $subtotal2 = Math.round($subtotal2)
                //ppn
                $ppn = $('#search-ppn').val()
                $ppnprice = 0;
                if(!$ppn || $ppn == 0){
                    $ppnprice = 0
                }else{
                    $ppnprice = ($ppn/100)*$subtotal2
                }
                $ppnprice = Math.round($ppnprice)
                //grandtotal
                $grandtotal = $subtotal2+$ppnprice

                $subtotal = Intl.NumberFormat(['ban', 'id']).format($subtotal)
                $('#subtotal1').val($subtotal);
                $diskonprice = Intl.NumberFormat(['ban', 'id']).format($diskonprice)
                $('#diskon').val($diskonprice);
                $subtotal2 = Intl.NumberFormat(['ban', 'id']).format($subtotal2)
                $('#subtotal2').val($subtotal2);
                $ppnprice = Intl.NumberFormat(['ban', 'id']).format($ppnprice)
                $('#ppn').val($ppnprice);
                $grandtotal = Intl.NumberFormat(['ban', 'id']).format($grandtotal)
                $('#total').val($grandtotal);
            }
            }

        }
    </script>
@endsection
