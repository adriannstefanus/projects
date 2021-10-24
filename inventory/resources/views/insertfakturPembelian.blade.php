@extends('layouts.layout')
@section('content')
<div class="px-5">
    <form action="/fakturPembelian/insertForm/submit" onsubmit="cekBeforeSubmit(event)" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>No. Faktur</label>
                <input required type="text" class="form-control" id="insertnoFaktur" name="insertnoFaktur">
            </div>
            <div class="form-group col">
                <label>Tanggal Faktur</label>
                <input required type="date" class="form-control" onchange="addTempo()" id="inserttglFaktur" name="inserttglFaktur" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Tempo Faktur</label>
                <select required class="custom-select" onchange="addTempo()" id="tempoFaktur" name="tempoFaktur">
                    <option value="" disabled selected>Pilih Tempo</option>
                    <option value="0">0 Hari</option>
                    <option value="30">30 Hari</option>
                    <option value="45">45 Hari</option>
                    <option value="60">60 Hari</option>
                    <option value="90">90 Hari</option>
                </select>
            </div>
            <div class="form-group col">
                <label>Jatuh Tempo Faktur</label>
                <input readonly type="date" class="form-control" id="insertjatuhtempoFaktur" name="insertjatuhtempoFaktur" onkeydown="return false">
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label>No. PO</label>
                <input required type="text" class="form-control" id="insertnoPO" name="insertnoPO">
            </div>
            <div class="form-group col">
                <label>Tanggal PO</label>
                <input required type="date" class="form-control" onchange="addTempo2()" id="inserttglPO" name="inserttglPO" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Tempo PO</label>
                <select required class="custom-select" onchange="addTempo2()" id="tempoPO" name="tempoPO">
                    <option value="" disabled selected>Pilih Tempo</option>
                    <option value="0">0 Hari</option>
                    <option value="30">30 Hari</option>
                    <option value="45">45 Hari</option>
                    <option value="60">60 Hari</option>
                    <option value="90">90 Hari</option>
                </select>
            </div>
            <div class="form-group col">
                <label>Jatuh Tempo PO</label>
                <input readonly type="date" class="form-control" id="insertjatuhtempoPO" name="insertjatuhtempoPO" onkeydown="return false">
            </div>
        </div>


        <hr class="border border-info">
        <div class="row">
            <div class="form-group col">
                <label>Pilih Supplier</label>
                <select required class="form-control form-control-sm" id="insertsupplier" name="insertsupplier" onchange="getSupplier()">
                    <option value="" disabled selected>Pilih Supplier</option>
                    @foreach($supplier as $c)
                    <option value="{{$c->id}}">{{$c->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col input-group-sm">
                <label>Alamat</label>
                <input readonly type="text" class="form-control" id="insertAlamat" name="insertAlamat" onkeydown="return false">
            </div>
            <div class="form-group col input-group-sm">
                <label>Nomor Telp.</label>
                <input readonly type="text" class="form-control" id="inserttelp" name="inserttelp" onkeydown="return false">
            </div>
            <div class="form-group col input-group-sm">
                <label>Email</label>
                <input readonly type="text" class="form-control" id="insertemail" name="insertemail" onkeydown="return false">
            </div>
        </div>

        <hr class="border border-info">
        <div class="row">
            <div class="form-group form-inline col-lg-3">
                <label class="mr-3">Item Barang</label>
                <select name="insertitemBarang" id="insertitemBarang" class="form-control form-control-sm">

                </select>
            </div>
            <div class="form-group form-inline col-lg-3">
                <label class="mr-3">Bentuk</label>
                <select name="insertbentuk" id="insertbentuk" class="form-control form-control-sm">
                    <option value="" disabled selected>Pilih Bentuk</option>
                    <option value="BlockingPlate">Blocking Plate</option>
                    <option value="SquareBar">Square Bar</option>
                    <option value="Plate">Plate</option>
                    <option value="RoundPlate">Round Plate</option>
                    <option value="HexagonBar">Hexagon Bar</option>
                    <option value="HollowBar">Hollow Bar</option>
                    <option value="RoundBar">Round Bar</option>
                    <option value="RoundBarPolos">Round Bar Polos</option>
                    <option value="Mall">Mall</option>
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
                 {{-- <div class="form-group form-inline input-group-sm">
                    <label class="mr-3">Ongkos Potong</label>
                   <input type="text" class="form-control col-4" id="insertongkosPotong" name="insertongkosPotong">
                </div>
                <div class="form-check col">
                    <input class="form-check-input" type="checkbox" value="" id="hanyaPotong">
                    <label class="form-check-label">Hanya Potong</label>
                </div> --}}
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
                        <th>
                            <button type="button" onclick="delData()" class="btn btn-danger btn-sm">Del</button>
                            <input type="checkbox" id="msCek" value="msCek">
                        </th>
                    </tr>
                </thead>
                <tbody>
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
                        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
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
                <div class="form-group">
                    <a><button type="submit" class="btn btn-primary">Submit Faktur</button></a>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </form>


    <script>
        $('#inserttglFaktur').val(curday('-'));
        $('#inserttglPO').val(curday('-'));
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')}
        });
        $('#ppn').val(10);
        function addTempo(){
            var initDate = document.getElementById('inserttglFaktur').value;
            var tempo = document.getElementById('tempoFaktur').value;
            var finDate = addDays(new Date(initDate), new Number(tempo));
            finDate = getFormat(finDate);
            $('#insertjatuhtempoFaktur').val(finDate);
        }

        function addTempo2(){
            var initDate = document.getElementById('inserttglPO').value;
            var tempo = document.getElementById('tempoPO').value;
            var finDate = addDays(new Date(initDate), new Number(tempo));
            finDate = getFormat(finDate);
            $('#insertjatuhtempoPO').val(finDate);
        }

        function getFormat(x){
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

        $counter = 0;
        //Get Supplier Detail
        function getSupplier(){
            $idSupplier = document.getElementById('insertsupplier').value;
            $name = '';
            $address= '';
            $telp = '';
            $email = '';
            var object = {!! json_encode($supplier->toArray())!!};
            //supplier detail
            object.forEach(function (data){
                if(data['id'] == $idSupplier){
                    $('#insertAlamat').val(data['alamat']);
                    $('#inserttelp').val(data['telp']);
                    $('#insertemail').val(data['email']);
                }
            });

            //get supplier item
            $.ajax({
                method: 'GET',
                url: '/fakturPembelian/getItem',
                data: {
                    id: $idSupplier,
                },
                dataType: 'JSON',
                success: function(data){
                    var options = '<option selected disabled value="">Pilih Item Barang</option>'
                    data.forEach(function(value){
                        options = options + '<option value="'+value.tipe+'">'+value.tipe+'</option>';
                    });
                    $('#insertitemBarang').html(options);
                },
                error: function(){
                    console.log('Error')
                }
            });

        }

        //insert to table
        function getData(){
            var isValid = 1
            $noFaktur = document.getElementById('insertnoFaktur').value;
            $tglFaktur = document.getElementById('inserttglFaktur').value;
            $jatuhTempoFaktur = document.getElementById('insertjatuhtempoFaktur').value;
            $noPO = document.getElementById('insertnoPO').value;
            $tglPO = document.getElementById('inserttglPO').value;
            $jatuhTempoPO = document.getElementById('insertjatuhtempoPO').value;
            $Supplier = document.getElementById('insertsupplier').value;
            $ItemBarang = document.getElementById('insertitemBarang').value;
            $bentuk = document.getElementById('insertbentuk').value;
            $beratJenis = document.getElementById('insertberatJenis').value;
            $diameter = document.getElementById('insertdiameter').value;
            $panjang = document.getElementById('insertpanjang').value;
            $lebar = document.getElementById('insertlebar').value;
            $tebal = document.getElementById('inserttebal').value;
            $qty = document.getElementById('insertqty').value;
            $harga = document.getElementById('inserthargaKg').value;
            // $ongkosPotong = document.getElementById('insertongkosPotong').value;
            $diskon = document.getElementById('insertdiskon').value;
            $digit = document.getElementById('digit').value;


            refresh()
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
            // if(!$ongkosPotong){
            //     $('#insertongkosPotong').css('border-color', 'red')
            //     isValid = 0
            // }
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
                $ItemBarang = $ItemBarang+"("+$diameter+"x"+$tebal+")";
            }else if($bentuk == 'RoundBar'){
                $berat = ($qty*$beratJenis*$diameter*$diameter*$panjang)/1000000;
                $tebal = 0;
                $lebar = 0;
                $ItemBarang = $ItemBarang+"("+$diameter+"x"+$panjang+")";
            }else{
                $berat = ($qty*$beratJenis*$panjang*$lebar*$tebal)/1000000;
                $diameter = 0;
                $ItemBarang = $ItemBarang+"("+$panjang+"x"+$lebar+"x"+$tebal+")";
            }

            $berat = $berat.toFixed($digit)
            //harga satuan
            var temp = ($berat/$qty)*$harga;
            $hargapcs = temp.toFixed(0);

            //total per barang
            var temp2 = +(($qty*$hargapcs) - (($diskon/100)*($qty*$hargapcs)));
            $jumlah = temp2.toFixed(0);

            //send & append
            $.ajax({
                method: 'POST',
                url: '{{URL::TO('/fakturPembelian/insertForm/insertTemp')}}',
                data: {
                    noFaktur: $noFaktur,
                    tgFaktur : $tglFaktur,
                    tglJatuhTempoFaktur : $jatuhTempoFaktur,
                    noPO: $noPO,
                    tgPO : $tglPO,
                    tglJatuhTempoPO : $jatuhTempoPO,
                    supplier : $Supplier,
                    itemBarang : $ItemBarang,
                    bentuk : $bentuk,
                    beratJenis : $beratJenis,
                    diameter : $diameter,
                    panjang : $panjang,
                    lebar : $lebar,
                    tebal : $tebal,
                    qty : $qty,
                    harga : $harga,
                    // ongkosPotong : $ongkosPotong,
                    diskon : $diskon,
                    berat : $berat,
                    hargapcs : $hargapcs,
                    jumlah : $jumlah,
                    tipeBarang : $tipebarang,
                    digit : $digit,
                    // hanyaPotong : cutOnly,
                },
                dataType : 'JSON',
                success: function(data){
                    data.harga = Math.round(data.harga)
                    data.harga = Intl.NumberFormat(['ban', 'id']).format(data.harga)
                    data.hargapcs = Math.round(data.hargapcs)
                    data.hargapcs = Intl.NumberFormat(['ban', 'id']).format(data.hargapcs)
                    data.jumlah = Math.round(data.jumlah)
                    data.jumlah = Intl.NumberFormat(['ban', 'id']).format(data.jumlah)
                    $counter = $counter + 1
                    var tr_str = "<tr id="+$counter+">"+
                    "<td>"+data.itemBarang+"</td>"+
                    "<td>"+data.berat+"</td>"+
                    "<td>"+data.harga+"</td>"+
                    "<td>"+data.qty+"</td>"+
                    "<td>"+data.hargapcs+"</td>"+
                    "<td>"+data.diskon+"</td>"+
                    "<td>"+data.jumlah+"</td>"+
                    "<td style='text-align:center'><input type='checkbox'></td>"+
                    "</tr>";
                    $('#trans-table tbody').append(tr_str);
                    hitungTotal();
                },
                error: function(){
                    console.log('failed')
                }
            })
        }

        //refresh validation
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
            // $('#insertongkosPotong').css('border-color', '')
            $('#insertdiskon').css('border-color', '')
        }

        //delete from table
        function delData(){
            var tab = document.getElementById('trans-table');
            for(var i = 1, row; row = tab.rows[i]; i++){
                if(row.cells[7].children[0].checked){
                    var id = row.id
                    var index = '#'+id
                    //remove rows
                    $(index).remove();
                    i = i-1;
                    //send
                    $.ajax({
                        method: 'POST',
                        url: '{{URL::TO('/trPenawaran/insertForm/delTemp')}}',
                        data: {
                            id: id,
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
            }
        }

        //count total
        function hitungTotal(){
            var tableRows = $('#trans-table tr').length
            console.log(tableRows)
            var tab = document.getElementById('trans-table');
            if(tab.rows[1]){
                $subtotal = 0;
                for(var i = 1, row; row = tab.rows[i]; i++){
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

        //check before submitting SO
        function cekBeforeSubmit(e){
            var tableRows = $('#trans-table tr').length
            if(tableRows < 2){
                e.preventDefault()
                alert('Please input the Item First !!!')
                return false
            }

        }

    </script>
@endsection


