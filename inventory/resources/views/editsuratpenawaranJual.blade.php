@extends('layouts.layout')
@section('content')
    <div class="px-5">
        <form action="/trPenawaran/editForm/submit" onsubmit="cekBeforeSubmit(event)" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <label>Nomor SO</label>
                    <input readonly type="text" class="form-control" id="fieldnoso" name="fieldnoso"
                        value="{{ $penawaran->NoSO }}" onkeydown="return false">
                </div>
                <div class="form-group col">
                    <label>Tanggal Order</label>
                    <input readonly type="text" class="form-control" id="inserttglOrder" name="inserttglOrder"
                        value="{{ date_format(date_create($penawaran->TglSO), 'd M Y') }}" onkeydown="return false">
                </div>
                <div class="form-group col">
                    <label>Jatuh Tempo Order</label>
                    <input readonly type="text" class="form-control" id="insertjatuhtempoSO" name="insertjatuhtempoSO"
                        value="{{ date_format(date_create($penawaran->TglJatuhTempoSO), 'd M Y') }}" onkeydown="return false">
                </div>
            </div>
            <hr class="border border-info">
            <div class="row">
                <div class="form-group col input-group-sm">
                    <label>Nama Pelanggan</label>
                    <input readonly type="text" class="form-control" id="insertpelanggan" name="insertpelanggan"
                        value="{{ $penawaran->customer->Nama }}">
                </div>
                <div class="form-group col input-group-sm">
                    <label>Alamat</label>
                    <input readonly type="text" class="form-control" id="insertAlamat" name="insertAlamat"
                        value="{{ $penawaran->customer->Alamat }}" onkeydown="return false">
                </div>
                <div class="form-group col input-group-sm">
                    <label>Nomor Telp.</label>
                    <input readonly type="text" class="form-control" id="inserttelp" name="inserttelp"
                        value="{{ $penawaran->customer->Telp }}" onkeydown="return false">
                </div>
                <div class="form-group col input-group-sm">
                    <label>Email</label>
                    <input readonly type="text" class="form-control" id="insertemail" name="insertemail"
                        value="{{ $penawaran->customer->Email }}" onkeydown="return false">
                </div>
            </div>
            <hr class="border border-info">
            <div class="row">
                <div class="form-group form-inline col-lg-3">
                    <label class="mr-3">Item Barang</label>
                    <select name="insertitemBarang" id="insertitemBarang" class="form-control form-control-sm">
                        <option value="" disabled selected>Pilih Item Barang</option>
                        @foreach($producttype as $p)
                            <option value="{{$p->id}}">{{$p->tipe}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group form-inline col-lg-3">
                    <label class="mr-3">Bentuk</label>
                    <select name="insertbentuk" id="insertbentuk" class="form-control form-control-sm">
                        <option value="" disabled selected>Pilih Bentuk</option>
                        <option value="BlockingPlate">Blocking Plate</option>
                    <option value="HexagonBar">Hexagon Bar</option>
                    <option value="HollowBar">Hollow Bar</option>
                    <option value="Mall">Mall</option>
                    <option value="Plate">Plate</option>
                    <option value="RoundBar">Round Bar</option>
                    <option value="RoundBarPolos">Round Bar Polos</option>
                    <option value="RoundPlate">Round Plate</option>
                    <option value="SquareBar">Square Bar</option>
                    </select>
                </div>
                <div class="form-group form-inline col-lg-3">
                    <label class="mr-3">Digit Coma</label>
                    <select name="digit" id="digit" class="form-control form-control-sm">
                        <option value="" disabled selected>Pilih Digit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group form-inline input-group-sm col-sm-2">
                    <label>Berat Jenis : </label>
                    <input type="text" class="form-control col-sm-4 ml-2" id="insertberatJenis" name="insertberatJenis">
                </div>
                <div class="form-group form-inline input-group-sm col-sm-2">
                    <label>Diameter :</label>
                    <input type="text" class="form-control col-sm-4 ml-2" id="insertdiameter" name="insertdiameter">
                </div>
                <div class="form-group form-inline input-group-sm col-sm-2">
                    <label>Panjang :</label>
                    <input type="text" class="form-control col-sm-4 ml-2" id="insertpanjang" name="insertpanjang">
                </div>
                <div class="form-group form-inline input-group-sm col-sm-2">
                    <label>Lebar :</label>
                    <input type="text" class="form-control col-sm-4 ml-2" id="insertlebar" name="insertlebar">
                </div>
                <div class="form-group form-inline input-group-sm col-sm-2">
                    <label class="mr-2">Tebal :</label>
                    <input type="text" class="form-control col-sm-4 ml-2" id="inserttebal" name="inserttebal">
                </div>
                <div class="form-group form-inline input-group-sm col-sm-2">
                    <label>Jumlah :</label>
                    <input type="text" class="form-control col-sm-4 ml-2" id="insertqty" name="insertqty">
                </div>
            </div>
            <div class="row mb-3 pl-3">
                <div class="form-group form-inline input-group-sm">
                    <label class="mr-3">Harga Per KG</label>
                    <input type="text" class="form-control col-4" id="inserthargaKg" name="inserthargaKg">
                </div>
                <div class="form-group form-inline input-group-sm">
                    <label class="mr-3">Diskon</label>
                    <input type="text" class="form-control col-3" id="insertdiskon" name="insertdiskon">
                </div>
                <div class="form-group form-inline input-group-sm">
                    <label class="mr-3">Ongkos Potong</label>
                    <input type="text" class="form-control col-4" id="insertongkosPotong" name="insertongkosPotong">
                </div>
                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="hanyaPotong">
                    <label class="form-check-label">Hanya Potong</label>
                </div>
                <div class="col ml-5">
                    <button onclick="getData()" type="button" class="btn btn-info">Add Item</button>
                </div>
            </div>


            <table id="trans-table" class="table table-striped table-hover" border="1px solid #343e42">
                <thead>
                    <tr>
                        <th style="width: 25%">Item Barang</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Harga/pcs</th>
                        <th>Diskon</th>
                        <th>Jumlah</th>
                        <th style="width: 6%">Action</th>
                        <th>
                            <button type="button" onclick="delData()" class="btn btn-danger btn-sm">Del</button>
                            <input type="checkbox" id="msCek" value="msCek">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penawaran->barangs as $barang)
                    <tr id="{{$loop->index}}">
                        @if($barang->bentuk == 'RoundPlate')
                            <td>{{ $barang->producttype->tipe }}({{$barang->diameter}}x{{$barang->tebal}})</td>
                        @else
                            @if($barang->bentuk == 'RoundBar')
                                <td>{{ $barang->producttype->tipe }}({{$barang->diameter}}x{{$barang->panjang}})</td>
                            @else
                                <td>{{ $barang->producttype->tipe }}({{$barang->panjang}}x{{$barang->lebar}}x{{$barang->tebal}})</td>
                            @endif
                        @endif
                        <td>{{$barang->berat}}</td>
                        <td>{{number_format($barang->hargaKg,0,',','.')}}</td>
                        <td>{{$barang->qty}}</td>
                        <td>{{number_format($barang->hargaSatuan,0,',','.')}}</td>
                        <td>{{$barang->diskon}}</td>
                        <td>{{number_format($barang->totprice,0,',','.')}}</td>
                        <td style='text-align:center' class='recordRow'><button class='editRecord edit' type='button'><i class='fa fa-pencil'></i></button></td>
                        <td style='text-align:center'><input type='checkbox'></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row pl-3">
                <div class="form-group form-inline">
                    <label>Before PPN</label>
                    <div class="input-group ml-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp. </span>
                        </div>
                            <input type="text" readonly class="form-control col-7" id="subTotal" name="subTotal">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label>PPN</label>
                    <div class="input-group">
                        <input type="text" readonly class="form-control ml-3 col-3" id="ppn" name="ppn">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon1">%</span>
                          </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label>Keterangan</label>
                    <div class="input-group ml-3">
                        <textarea class="form-control" id="keterangan" name="keterangan">{{$penawaran->keterangan}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row pl-3">
                <div class="form-group form-inline">
                    <label>Grand Total</label>
                    <div class="input-group ml-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp. </span>
                        </div>
                        <input type="text" readonly class="form-control col-7" id="total" name="total">
                    </div>
                </div>
                <div style="width: 31%">

                </div>
                <div class="form-group">
                    <a><button type="submit" class="btn btn-primary">Edit Penawaran</button></a>
                </div>
                {{-- <button type="button" onclick="getSession()" class="testSession">Get Session</button> --}}
            </div>
        </form>
    </div>

    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
        <form method="" action="" >
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Edit</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <input type="text" name="dataid" id="dataid" style="display: none">

                        <div class="row ml-1">
                            <div class="form-group form-inline">
                                <label class="mr-1">Item Barang :</label>
                                <input required readonly class="form-control" type="text" id="namaItem" name="namaItem">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col input-group-sm">
                                <label class="mr-1" id="lab1">var1</label>
                                <input onfocus="oldValue(this)" onchange="cekZero(this)" required type="text" class="form-control" id="var1" name="var1">
                            </div>
                            <div class="form-group col input-group-sm">
                                <label class="mr-1" id="lab2">var2</label>
                                <input onfocus="oldValue(this)" onchange="cekZero(this)" required type="text" class="form-control" id="var2" name="var2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col input-group-sm">
                                <label class="mr-1" id="lab3">var3</label>
                                <input onfocus="oldValue(this)" onchange="cekZero(this)" required type="text" class="form-control" id="var3" name="var3">
                            </div>
                            <div class="form-group col input-group-sm">

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label>Digit dibelakang koma</label><br>
                                <select class="form-control" id="editDigit">
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="mr-1">Quantity :</label>
                                <input required class="form-control" onfocus="oldValue(this)" onchange="cekZero(this)" type="text" id="qtyItem" name="qtyItem">
                            </div>
                            <div class="form-group col">
                                <label class="mr-1">Diskon :</label>
                                <input required class="form-control" type="text" id="diskonItem" name="diskonItem">
                            </div>
                        </div>

                        <div class="editbtnform">
                            <button type="button" class="btn btn-primary" onclick="submitEdit()">Submit</button>
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
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')}
        });
        $counter = $('#trans-table tbody tr').length
        // generateBarang()
        $('#ppn').val(10);
        hitungTotal()
        function getFormat(x) {
            final = new Date(x);
            var dd = final.getDate();
            var mm = final.getMonth() + 1;
            var yyyy = final.getFullYear();

            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;
            return (yyyy + '-' + mm + '-' + dd);
        }
        function curday(sp) {
            today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1;
            var yyyy = today.getFullYear();

            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;
            return (yyyy + sp + mm + sp + dd);
        };
        function addDays(date, days) {
            const copy = new Date(Number(date))
            copy.setDate(date.getDate() + days)
            return copy
        };

        //generate item

        //input new item
        function getData(){
            var isValid = 1
            $ItemBarang = document.getElementById('insertitemBarang').value;
            $bentuk = document.getElementById('insertbentuk').value;
            $beratJenis = document.getElementById('insertberatJenis').value;
            $diameter = document.getElementById('insertdiameter').value;
            $panjang = document.getElementById('insertpanjang').value;
            $lebar = document.getElementById('insertlebar').value;
            $tebal = document.getElementById('inserttebal').value;
            $qty = document.getElementById('insertqty').value;
            $harga = document.getElementById('inserthargaKg').value;
            $ongkosPotong = document.getElementById('insertongkosPotong').value;
            $diskon = document.getElementById('insertdiskon').value;
            $digit = document.getElementById('digit').value;

            //validation
            if(!$ItemBarang || $ItemBarang == 0){
                $('#insertitemBarang').css('border-color', 'red')
                isValid = 0
            }
            if(!$bentuk){
                $('#insertbentuk').css('border-color', 'red')
                if(!$panjang || $panjang == 0){
                    $('#insertpanjang').css('border-color', 'red')
                    isValid = 0
                }
                if(!$lebar || $lebar == 0){
                    $('#insertlebar').css('border-color', 'red')
                    isValid = 0
                }
                if(!$tebal || $tebal == 0){
                    $('#inserttebal').css('border-color', 'red')
                    isValid = 0
                }
                if(!$diameter || $diameter == 0){
                    $('#insertdiameter').css('border-color', 'red')
                    isValid = 0
                }
                isValid = 0
            }

                if($bentuk == 'RoundPlate'){
                    if(!$diameter || $diameter == 0){
                        $('#insertdiameter').css('border-color', 'red')
                        isValid = 0
                    }
                    if(!$tebal || $tebal == 0){
                        $('#inserttebal').css('border-color', 'red')
                        isValid = 0
                    }
                }else if($bentuk == 'RoundBar'){
                    if(!$diameter || $diameter == 0){
                        $('#insertdiameter').css('border-color', 'red')
                        isValid = 0
                    }
                    if(!$panjang || $panjang == 0){
                        $('#insertpanjang').css('border-color', 'red')
                        isValid = 0
                    }
                }else{
                    if(!$panjang || $panjang == 0){
                        $('#insertpanjang').css('border-color', 'red')
                        isValid = 0
                    }
                    if(!$lebar || $lebar == 0){
                        $('#insertlebar').css('border-color', 'red')
                        isValid = 0
                    }
                    if(!$tebal || $tebal == 0){
                        $('#inserttebal').css('border-color', 'red')
                        isValid = 0
                    }
                }

            if(!$beratJenis || $beratJenis == 0){
                $('#insertberatJenis').css('border-color', 'red')
                isValid = 0
            }
            if(!$qty || $qty == 0){
                $('#insertqty').css('border-color', 'red')
                isValid = 0
            }
            if(!$harga || $harga == 0){
                $('#inserthargaKg').css('border-color', 'red')
                isValid = 0
            }
            if(!$diskon){
                $('#insertdiskon').css('border-color', 'red')
                isValid = 0
            }
            if(!$ongkosPotong){
                $('#insertongkosPotong').css('border-color', 'red')
                isValid = 0
            }
            if(!$digit){
                $digit = 3
            }
            if(isValid == 0){
                return false
            }
            $berat = '';
            $tipebarang = $ItemBarang;
            //hitung berat & dimensi
            if($bentuk == 'RoundPlate'){
                $berat = ($qty*$beratJenis*$diameter*$diameter*$tebal)/1000000;
                $panjang = 0;
                $lebar = 0;
            }else if($bentuk == 'RoundBar'){
                $berat = ($qty*$beratJenis*$diameter*$diameter*$panjang)/1000000;
                $tebal = 0;
                $lebar = 0;
            }else{
                $berat = ($qty*$beratJenis*$panjang*$lebar*$tebal)/1000000;
                $diameter = 0;
            }
            $berat = $berat.toFixed($digit)
            //satuan
            var temp = ($berat/$qty)*$harga;
            $hargapcs = temp.toFixed(0);
            //total per item
            var temp2 = +(($qty*$hargapcs) - (($diskon/100)*($qty*$hargapcs))) + +$ongkosPotong;
            $jumlah = temp2.toFixed(0)

            //check if hanyaPotong
            var cutOnly = document.getElementById('hanyaPotong').checked
            if(cutOnly){
                cutOnly = 1
            }else{cutOnly = 0}
            if(cutOnly == 1){
                $berat = 0
                $harga = 0
                $hargapcs = $ongkosPotong
                $jumlah = ($qty*$hargapcs)-(($diskon/100)*($qty*$hargapcs))
            }
            //send & append
            $.ajax({
                method: 'POST',
                url: '{{URL::TO('/trPenawaran/insertForm/insertTemp')}}',
                data: {
                    idProductType : $ItemBarang,
                    bentuk : $bentuk,
                    beratJenis : $beratJenis,
                    diameter : $diameter,
                    panjang : $panjang,
                    lebar : $lebar,
                    tebal : $tebal,
                    qty : $qty,
                    hargaKg : $harga,
                    ongkosPotong : $ongkosPotong,
                    diskon : $diskon,
                    berat : $berat,
                    hargaSatuan : $hargapcs,
                    totprice : $jumlah,
                    tipeBarang : $tipebarang,
                    hanyaPotong : cutOnly,
                    digit : $digit,
                },
                dataType : 'JSON',
                success: function(data){
                    console.log(data)
                    var product = {!!json_encode($producttype->toArray())!!};
                        $ItemBarang='';
                        product.forEach(function(arrayProduct){
                            if(arrayProduct['id'] == data.idProductType){
                                if (data.bentuk == 'RoundPlate') {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + data.diameter + "x" + data.tebal + ")";
                                } else if (data.bentuk == 'RoundBar') {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + data.diameter + "x" + data.panjang  + ")";
                                } else {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + data.panjang + "x" + data.lebar + "x" + data.tebal  + ")";
                                }
                            }
                        });
                    data.hargaKg = Math.round(data.hargaKg)
                    data.hargaKg = Intl.NumberFormat(['ban', 'id']).format(data.hargaKg)
                    data.hargaSatuan = Math.round(data.hargaSatuan)
                    data.hargaSatuan = Intl.NumberFormat(['ban', 'id']).format(data.hargaSatuan)
                    data.totprice = Math.round(data.totprice)
                    data.totprice = Intl.NumberFormat(['ban', 'id']).format(data.totprice)
                    $tablelength = $('#trans-table tbody tr').length
                    var tab = document.getElementById('trans-table');
                    $rowtemp = tab.rows[$tablelength]
                    $lastrowid = $rowtemp.id
                    console.log('lastrowid = '+(+$lastrowid + +1))
                    console.log('counter = '+$counter)
                    if($counter == (+$lastrowid + +1) || $tablelength == 0){

                    }else{
                        console.log('triggered')
                        $counter = +$lastrowid + +1
                    }
                    console.log($counter)
                    var tr_str = "<tr id="+$counter+">"+
                        "<td>"+$ItemBarang+"</td>"+
                        "<td>"+data.berat+"</td>"+
                        "<td>"+data.hargaKg+"</td>"+
                        "<td>"+data.qty+"</td>"+
                        "<td>"+data.hargaSatuan+"</td>"+
                        "<td>"+data.diskon+"</td>"+
                        "<td>"+data.totprice+"</td>"+
                        "<td style='text-align:center' class='recordRow'>"+"<button class='editRecord edit' type='button'><i class='fa fa-pencil'></i></button>"+"</td>"+
                        "<td style='text-align:center'><input type='checkbox'></td>"+
                        "</tr>";
                    $('#trans-table tbody').append(tr_str);
                    $counter = $counter+1;
                    hitungTotal();
                },
                error: function(){
                    console.log('failed')
                }
            })
        }
        //delete item from table
        function delData(){
            var tab = document.getElementById('trans-table');
            var array =[]
            for(var i = 1, row; row = tab.rows[i]; i++){
                if(row.cells[8].children[0].checked){
                    var id = row.id
                    var index = '#'+id
                    array[array.length] = id
                    $(index).remove();
                    i = i-1;
                }
            }
            console.log(array)
            $.ajax({
                method: 'POST',
                url: '{{URL::TO('/trPenawaran/insertForm/delTemp')}}',
                data: {
                    id: array,
                },
                dataType: 'JSON',
                success: function(data){
                    console.log(data)
                    hitungTotal();
                },
                error: function(){
                    console.log('Response Error')
                }
            })
        }
        //total price
        function hitungTotal() {
            var tab = document.getElementById('trans-table');
            if (tab.rows[1]) {
                $subtotal = 0;
                for (var i = 1, row; row = tab.rows[i]; i++) {
                    const temp = row.cells[6].innerHTML
                    $temp = temp.replaceAll('.', '')
                    $subtotal = +$subtotal + +$temp;
                }
                $subtotal = Math.round($subtotal)
                $ppn = $('#ppn').val();
                var tot = +$subtotal + +(($ppn/100)*$subtotal);
                $total = tot;
                $total = Math.round($total)
                $subtotal = Intl.NumberFormat(['ban', 'id']).format($subtotal)
                $('#subTotal').val($subtotal);
                $total = Intl.NumberFormat(['ban', 'id']).format($total)
                $('#total').val($total);
            }

        }

        $(document).ready(function(){
            $('#trans-table').on('click', '.editRecord',function(){
                $('#myModalEdit').modal('show');
                var rowId = $(this).closest('tr').attr('id')
                console.log(rowId)
                $.ajax({
                method: 'GET',
                url: '{{URL::TO('/trPenawaran/edit/get')}}',
                data: {
                    id: rowId,
                },
                dataType : 'JSON',
                success: function(data){
                    console.log(data)
                    var product = {!!json_encode($producttype->toArray())!!};
                        $ItemBarang='';
                        product.forEach(function(arrayProduct){
                            if(arrayProduct['id'] == data.idProductType){
                                $ItemBarang = arrayProduct['tipe']
                            }
                        });
                    $('#namaItem').val($ItemBarang)
                    $('#qtyItem').val(data.qty)
                    $('#diskonItem').val(data.diskon)
                    $('#beratItem').val(data.berat)
                    $('#dataid').val(rowId)
                    if(data.bentuk == 'RoundPlate'){
                        $('#lab1').html('Diameter')
                        $('#lab2').html('Tebal')
                        $('#lab3').hide()

                        $('#var1').val(data.diameter)
                        $('#var2').val(data.tebal)
                        $('#var3').hide()
                    }else if(data.bentuk == 'RoundBar'){
                        $('#lab1').html('Diameter')
                        $('#lab2').html('Panjang')
                        $('#lab3').hide()

                        $('#var1').val(data.diameter)
                        $('#var2').val(data.panjang)
                        $('#var3').hide()
                    }else{
                        $('#lab3').show()
                        $('#lab1').html('Panjang')
                        $('#lab2').html('Lebar')
                        $('#lab3').html('Tebal')

                        $('#var3').show()
                        $('#var1').val(data.panjang)
                        $('#var2').val(data.lebar)
                        $('#var3').val(data.tebal)
                    }
                },
                error: function(){
                    console.log('failed')
                }
            });


            });
        });

        function submitEdit(){
            var id = $('#dataid').val()
            var namaItem = $('#namaItem').val()
            var var1 = $('#var1').val()
            var var2 = $('#var2').val()
            var var3 = $('#var3').val()
            var digit = $('#editDigit').val()
            var qty = $('#qtyItem').val()
            var diskon = $('#diskonItem').val()
            $.ajax({
                method: 'POST',
                url: '{{URL::TO('/trPenawaran/edit/insert')}}',
                data: {
                    id: id,
                    namaItem: namaItem,
                    var1: var1,
                    var2: var2,
                    var3: var3,
                    qty: qty,
                    diskon: diskon,
                    digit: digit
                },
                dataType : 'JSON',
                success: function(data){
                    console.log(data)
                    var product = {!!json_encode($producttype->toArray())!!};
                        $ItemBarang='';
                        product.forEach(function(arrayProduct){
                            if(arrayProduct['id'] == data.idProductType){
                                if (data.bentuk == 'RoundPlate') {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + data.diameter + "x" + data.tebal + ")";
                                } else if (data.bentuk == 'RoundBar') {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + data.diameter + "x" + data.panjang  + ")";
                                } else {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + data.panjang + "x" + data.lebar + "x" + data.tebal  + ")";
                                }
                            }
                        });
                        data.hargaKg = Math.round(data.hargaKg)
                        data.hargaKg = Intl.NumberFormat(['ban', 'id']).format(data.hargaKg)
                        data.hargaSatuan = Math.round(data.hargaSatuan)
                        data.hargaSatuan = Intl.NumberFormat(['ban', 'id']).format(data.hargaSatuan)
                        data.totprice = Math.round(data.totprice)
                        data.totprice = Intl.NumberFormat(['ban', 'id']).format(data.totprice)
                        // var tab = document.getElementById('trans-table');
                        // $row = tab.rows[(+id + +1)]
                        $row = document.getElementById(id)
                        // console.log((+id + +1)+''+$row)
                        console.log('Change row dengan row id ke- '+id)
                        //change value in table
                        $($row.cells[0]).html($ItemBarang)
                        $($row.cells[1]).html(data.berat)
                        $($row.cells[2]).html(data.hargaKg)
                        $($row.cells[3]).html(data.qty)
                        $($row.cells[4]).html(data.hargaSatuan)
                        $($row.cells[5]).html(data.diskon)
                        $($row.cells[6]).html(data.totprice)
                    hitungTotal();
                    $('#myModalEdit').modal('toggle');
                },
                error: function(){
                    console.log('failed')
                }
            });
        }

        function refresh(){
            $('#insertitemBarang').css('border-color', '')
            $('#insertbentuk').css('border-color', '')
            $('#insertberatJenis').css('border-color', '')
            $('#insertdiameter').css('border-color', '')
            $('#insertpanjang').css('border-color', '')
            $('#insertlebar').css('border-color', '')
            $('#inserttebal').css('border-color', '')
            $('#insertqty').css('border-color', '')
            $('#inserthargaKg').css('border-color', '')
            $('#insertongkosPotong').css('border-color', '')
            $('#insertdiskon').css('border-color', '')
        }

        var tempOldValue;
        function cekZero(event){
            var newValue = event.value
            if(newValue == '' || newValue == 0){
                $(event).val(tempOldValue)
                $(event).css('border-color', 'red')
            }else{
                $(event).css('border-color', '')
            }
        }

        function oldValue(event){
            tempOldValue = event.value
        }

        function cekBeforeSubmit(e){
            var tableRows = $('#trans-table tr').length
            if(tableRows < 2){
                e.preventDefault()
                alert('Please input the Item First !!!')
                return false
            }

        }

        function getSession(){
            $.ajax({
                method: 'GET',
                url: '/getSession',
                dataType: 'JSON',
                success: function(data){
                    console.log(data)
                }
            })
        }

    </script>
@endsection
