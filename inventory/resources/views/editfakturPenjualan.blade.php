@extends('layouts.layout')
@section('content')
<div class="px-5">
    <form action="/fakturPenjualan/submit" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>Nomor Faktur</label>
                <input readonly type="text" class="form-control" id="fieldnofaktur" name="fieldnofaktur" value="{{$fakturjual->NoFaktur}}" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Tanggal Faktur</label>
                <input onchange="cekDate(event)" type="date" class="form-control" id="inserttglFaktur" name="inserttglFaktur" value="{{substr($fakturjual->TglFaktur, 0, 10)}}" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Jatuh Tempo </label>
                <input onchange="cekDate(event)" type="date" class="form-control" id="insertjatuhtempoSO" name="insertjatuhtempoSO" value="{{substr($fakturjual->TglJatuhTempoFaktur, 0, 10)}}" onkeydown="return false">
            </div>

        </div>
        <hr class="border border-info">
        <div class="row">
            <div class="form-group col input-group-sm">
                <label>Nama Pelanggan</label>
                <input readonly type="text" class="form-control" id="insertpelanggan" name="insertpelanggan" value="{{$fakturjual->trpenawaran->customer->Nama}}">
            </div>
        </div>
        <hr class="border border-info">

            <table id="trans-table" class="table table-striped table-hover" border="1px solid #343e42">
                <thead>
                    <tr>
                        <th style="width: 25%">Item Barang</th>
                        <th>Berat</th>
                        <th>Harga/Kg</th>
                        <th>Qty</th>
                        <th>Harga/pcs</th>
                        <th>Diskon</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fakturjual->trpenawaran->barangs as $p)
                    <tr>
                        @if($p->bentuk == 'RoundPlate')
                            <td>{{ $p->producttype->tipe }}({{$p->diameter}}x{{$p->tebal}})</td>
                        @else
                            @if($p->bentuk == 'RoundBar')
                                <td>{{ $p->producttype->tipe }}({{$p->diameter}}x{{$p->panjang}})</td>
                            @else
                                <td>{{ $p->producttype->tipe }}({{$p->panjang}}x{{$p->lebar}}x{{$p->tebal}})</td>
                            @endif
                        @endif
                        <td>{{$p->berat}}</td>
                        <td>{{number_format($p->hargaKg,0,',','.')}}</td>
                        <td>{{$p->qty}}</td>
                        <td>{{number_format($p->hargaSatuan,0,',','.')}}</td>
                        <td>{{$p->diskon}}</td>
                        <td>{{number_format($p->totprice,0,',','.')}}</td>
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
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </div>
        </div>
    </form>

<script>
    $('#ppn').val(10);
    hitungTotal()

    function getFormat(x){
            final = new Date(x);
            var dd = final.getDate();
            var mm = final.getMonth() + 1;
            var yyyy = final.getFullYear();

            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;
            return (yyyy + '-' + mm + '-' + dd);
    }
    function hitungTotal(){
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

    function cekDate(event){
        var val = event.target.value
        var awal = $('#inserttglFaktur').val()
        var akhir = $('#insertjatuhtempoSO').val()
        if(awal > akhir){
            $('#inserttglFaktur').val(val)
            $('#insertjatuhtempoSO').val(val)
        }
    }

</script>

@endsection


