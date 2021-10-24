@extends('layouts.layout')
@section('content')
@section('title', 'Detail Faktur Pembelian')
<div class="px-5">
    <form action="/fakturPembelian/editForm/submit" method="POST">
        @csrf
        <input type="text" name="idFaktur" value="{{$fakturbeli->id}}" style="display: none">
        <div class="row">
            <div class="form-group col">
                <label>No. Faktur</label>
                <input readonly value="{{$fakturbeli->NoFaktur}}" type="text" class="form-control" id="insertnoFaktur" name="insertnoFaktur">
            </div>
            <div class="form-group col">
                <label>Tanggal Faktur</label>
                <input readonly value="{{date_format(date_create($fakturbeli->TglFaktur), 'd M Y')}}" type="text" class="form-control" id="inserttglFaktur" name="inserttglFaktur" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Jatuh Tempo Faktur</label>
                <input readonly value="{{date_format(date_create($fakturbeli->TglJatuhTempoFaktur), 'd M Y')}}" type="text" class="form-control" id="insertjatuhtempoFaktur" name="insertjatuhtempoFaktur" onkeydown="return false">
            </div>
            <div class="form-group col"></div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label>No. PO</label>
                <input readonly value="{{$fakturbeli->NoPO}}" type="text" class="form-control" id="insertnoPO" name="insertnoPO">
            </div>
            <div class="form-group col">
                <label>Tanggal PO</label>
                <input readonly value="{{date_format(date_create($fakturbeli->TglPO), 'd M Y')}}" type="text" class="form-control" id="inserttglPO" name="inserttglPO" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Jatuh Tempo PO</label>
                <input readonly value="{{date_format(date_create($fakturbeli->TglJatuhTempoPO), 'd M Y')}}" type="text" class="form-control" id="insertjatuhtempoPO" name="insertjatuhtempoPO" onkeydown="return false">
            </div>
            <div class="form-group col"></div>
        </div>


        <hr class="border border-info">
        <div class="row">
            <div class="form-group col">
                <label>Nama Supplier</label>
                <input readonly value="{{$fakturbeli->supplier->nama}}" type="text" class="form-control" id="insertsupplier" name="insertsupplier" onkeydown="return false">
            </div>
            <div class="form-group col"></div>
            <div class="form-group col"></div>
            <div class="form-group col"></div>
        </div>

        <div>

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
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fakturbeli->barangbelis as $barang)
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
                        <td style="text-align: center"><button class='editRecord edit' type='button'><i class='fa fa-pencil'></i></button></td>
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
                        <textarea class="form-control" id="keterangan" name="keterangan">{{$fakturbeli->keterangan}}</textarea>
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
                <div>
                    <button type="submit" class="btn btn-success">Update Faktur</button>
                </div>
            </div>
            {{-- <button type="button" onclick="getSession()" class="testSession">Get Session</button> --}}
        </div>
    </form>
</div>
<div class="modal fade" id="myModalEdit">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <form>
                @csrf
                <div class="modal-body">
                    <p>Berat : </p>
                    <input id="beratvalue" class="form-control" type="text">
                    <input type="text" id="barangid" name="barangid" style="display: none">
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="submitEdit()">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script>
        $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')}
        });
        // generateBarang()
        $('#ppn').val(10);
        hitungTotal()

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

        $counter = 0;
        function generateBarang() {
            var object = {!!json_encode($fakturbeli->barangbelis->toArray())!!};
            var product = {!!json_encode($producttype->toArray())!!};
            object.forEach(function(arrayItem) {
                $ItemBarang = '';
                product.forEach(function(arrayProduct){
                    if(arrayProduct['id'] == arrayItem['idProductType']){
                        $ItemBarang = arrayProduct['tipe']
                        $tipebarang = arrayProduct['tipe']
                    }
                });

                $bentuk = arrayItem['bentuk']
                $beratJenis = arrayItem['beratJenis']
                $diameter = arrayItem['diameter']
                $panjang = arrayItem['panjang']
                $lebar = arrayItem['lebar']
                $tebal = arrayItem['tebal']
                $qty = arrayItem['qty']
                $harga = arrayItem['hargaKg']
                $ongkosPotong = arrayItem['ongkosPotong']
                $diskon = arrayItem['diskon']
                $berat = arrayItem['berat']

                //hitung dimensi
                if ($bentuk == 'RoundPlate') {
                    $ItemBarang = $ItemBarang + "(" + $diameter + "x" + $tebal + ")";
                } else if ($bentuk == 'RoundBar') {
                    $ItemBarang = $ItemBarang + "(" + $diameter + "x" + $panjang + ")";
                } else {
                    $ItemBarang = $ItemBarang + "(" + $panjang + "x" + $lebar + "x" + $tebal + ")";
                }

                //hargasatuan
                $hargapcs = arrayItem['hargaSatuan'];
                //total per item
                var temp2 = +(($qty * $hargapcs) - (($diskon / 100) * ($qty * $hargapcs))) + +$ongkosPotong;
                $jumlah = temp2;

                //check if hanyaPotong

                $.ajax({
                    method: 'POST',
                    url: '{{URL::TO('/fakturbeli/editForm/insertTemp')}}',
                    data: {
                        itemBarang : $ItemBarang,
                        bentuk : $bentuk,
                        beratJenis : $beratJenis,
                        diameter : $diameter,
                        panjang : $panjang,
                        lebar : $lebar,
                        tebal : $tebal,
                        qty : $qty,
                        harga : $harga,
                        ongkosPotong : $ongkosPotong,
                        diskon : $diskon,
                        berat : $berat,
                        hargapcs : $hargapcs,
                        jumlah : $jumlah,
                        tipeBarang : $tipebarang,
                    },
                    dataType : 'JSON',
                    success: function(data){
                        console.log(data)
                        $counter = $counter + 1
                        var tr_str = "<tr id="+$counter+">"+
                        "<td>"+data.itemBarang+"</td>"+
                        "<td>"+data.berat+"</td>"+
                        "<td>"+data.harga+"</td>"+
                        "<td>"+data.qty+"</td>"+
                        "<td>"+data.hargapcs+"</td>"+
                        "<td>"+data.diskon+"</td>"+
                        "<td>"+data.jumlah+"</td>"+
                        "<td class='recordRow'>"+"<button class='editRecord edit' type='button'><i class='fa fa-pencil'></i></button>"+"</td>"+
                        "</tr>";
                        $('#trans-table tbody').append(tr_str);
                        hitungTotal();
                    },
                error: function(){
                    console.log('failed')
                }
            })
            });
        }
        //edit record
        $(document).ready(function(){
            $('#trans-table').on('click', '.editRecord',function(){
                $('#myModalEdit').modal('show');
                var rowId = $(this).closest('tr').attr('id')
                $.ajax({
                method: 'GET',
                url: '{{URL::TO('/fakturbeli/edit/get')}}',
                data: {
                    id: rowId,
                },
                dataType : 'JSON',
                success: function(data){
                    console.log(data)
                    // var data = data[sessionId]
                    $('#beratvalue').val(data.berat)
                    $('#barangid').val(rowId)
                },
                error: function(){
                    console.log('failed')
                }
            });


            });
        });

        function submitEdit(){
            var id = $('#barangid').val()
            var beratvalue = $('#beratvalue').val()
            $.ajax({
                method: 'POST',
                url: '{{URL::TO('/fakturbeli/edit/insert')}}',
                data: {
                    id: id,
                    beratbaru: beratvalue,
                },
                dataType : 'JSON',
                success: function(data){
                    console.log(data)

                    $("#trans-table tbody").empty();
                    data.forEach(function(res, index){
                        var product = {!!json_encode($producttype->toArray())!!};
                        $ItemBarang='';
                        product.forEach(function(arrayProduct){
                            if(arrayProduct['id'] == res.idProductType){
                                if (res.bentuk == 'RoundPlate') {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + res.diameter + "x" + res.tebal + ")";
                                } else if (res.bentuk == 'RoundBar') {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + res.diameter + "x" + res.panjang  + ")";
                                } else {
                                    $ItemBarang = arrayProduct['tipe'] + "(" + res.panjang + "x" + res.lebar + "x" + res.tebal  + ")";
                                }
                            }
                        });
                        res.hargaKg = Math.round(res.hargaKg)
                        res.hargaKg = Intl.NumberFormat(['ban', 'id']).format(res.hargaKg)
                        res.hargaSatuan = Math.round(res.hargaSatuan)
                        res.hargaSatuan = Intl.NumberFormat(['ban', 'id']).format(res.hargaSatuan)
                        res.totprice = Math.round(res.totprice)
                        res.totprice = Intl.NumberFormat(['ban', 'id']).format(res.totprice)
                        var tr_str = "<tr id="+(index)+">"+
                        "<td>"+$ItemBarang+"</td>"+
                        "<td>"+res.berat+"</td>"+
                        "<td>"+res.hargaKg+"</td>"+
                        "<td>"+res.qty+"</td>"+
                        "<td>"+res.hargaSatuan+"</td>"+
                        "<td>"+res.diskon+"</td>"+
                        "<td>"+res.totprice+"</td>"+
                        "<td class='recordRow' style='text-align:center'>"+"<button class='editRecord edit' type='button'><i class='fa fa-pencil'></i></button>"+"</td>"+
                        "</tr>";
                    $('#trans-table tbody').append(tr_str);
                    })
                    $('#myModalEdit').modal('toggle');
                    hitungTotal();
                },
                error: function(){
                    console.log('failed')
                }
            });
        }

        //count total
        function hitungTotal(){
            var tableRows = $('#trans-table tr').length
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

    </script>
@endsection


