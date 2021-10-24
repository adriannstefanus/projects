@extends('layouts.layout')

{{-- @section('title', 'Faktur Penjualan') --}}
@section('header')
@endsection
@section('content')
<div class="col-md-12 col-md-offset-0" id="noprint">
    <input type='button' onclick="window.print()" class="btn btn-success" name='CetakFakturPenjualan' id='CetakFakturPenjualan' value='Cetak Faktur Penjualan'/>
    <hr/>
</div>
<div class="main">
    <div id="printPanel" class="col-sm-12 center-block print-panel">
        <p style="color: black" class="inventory"><strong>E-INVENTORY</strong></p>
        <h4 align="center">Laporan Pembelian</h4><br/>
        <table width="100%" style="border:0px solid #a0a0a0;">
        <tr>
            <td width="60%">
                <label class="control-label">Periode : </label>  <br/>
                <label class="control-label">Customer</label> <br/>
            </td>
        </tr>
        </table>
        <table id="tblinvoice" class="print-table" width="100%">
            <thead>
            <tr align="center">
                <th style="width: 12%">Tanggal</th>
                        <th>Supplier</th>
                        <th>Item</th>
                        <th>Ukuran (d x p x l x t)</th>
                        <th>Qty(pcs)</th>
                        <th>Berat(kg)</th>
                        <th>Harga/kg</th>
                        <th>DPP</th>
                        <th>PPN</th>
                        <th>Total</th>
            </tr>
            </thead>
            <tbody>
                @foreach($result as $x)
                    <tr>
                        <td>{{substr($x->fakturbeli->TglFaktur, 0, 10)}}</td>
                        <td>{{$x->fakturbeli->supplier->nama}}</td>
                        <td>{{$x->producttype->tipe}}</td>
                        @if($x->bentuk == 'RoundPlate')
                            <td>{{$x->diameter}}x{{$x->diameter}}x{{$x->tebal}}</td>
                        @else
                            @if($x->bentuk == 'RoundBar')
                                <td>{{$x->diameter}}x{{$x->diameter}}x{{$x->panjang}}</td>
                            @else
                                <td>{{$x->panjang}}x{{$x->lebar}}x{{$x->tebal}}</td>
                            @endif
                        @endif
                        <td>{{$x->qty}}</td>
                        <td>{{$x->berat}}</td>
                        <td>{{$x->hargaKg}}</td>
                        <td>{{$x->berat*$x->hargaKg}}</td>
                        @if($x->fakturbeli->PPN != 0)
                            <td>{{(1/$x->fakturbeli->PPN)*($x->berat*$x->hargaKg)}}</td>
                            <td>{{($x->berat*$x->hargaKg)+((1/$x->fakturbeli->PPN)*($x->berat*$x->hargaKg))}}</td>
                        @else
                            <td>0</td>
                            <td>{{($x->berat*$x->hargaKg)+0}}</td>
                        @endif
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="totalQty">totalqty</td>
                        <td id="totalBerat">total kg</td>
                        <td></td>
                        <td id="totalDpp">total dpp</td>
                        <td id="totalPpn">total ppn</td>
                        <td id="grandTotal">grand total</td>
                    </tr>
            </tbody>
    </div>

</div>

<script>
    hitungtotal()
    function hitungtotal(){
        var tab = document.getElementById('trans-table');
        if(tab.rows[1]){
            $qty = 0;
            $berat = 0;
            $dpp = 0;
            $ppn = 0;
            $total = 0;
            for(var i = 1, row; i < tab.rows.length-1; i++){
                row = tab.rows[i]
                $qty = +$qty + +row.cells[4].innerHTML;
                $berat = +$berat + +row.cells[5].innerHTML;
                $dpp = +$dpp + +row.cells[7].innerHTML;
                $ppn = +$ppn + +row.cells[8].innerHTML;
                $total = +$total + +row.cells[9].innerHTML;
            }
            $dpp = Math.round($dpp)
            $dpp = new Intl.NumberFormat(['ban', 'id']).format($dpp)
            $berat = $berat.toFixed(3)
            $berat = new Intl.NumberFormat(['ban', 'id']).format($berat)
            $ppn = Math.round($ppn)
            $ppn = new Intl.NumberFormat(['ban', 'id']).format($ppn)
            $total = Math.round($total)
            $total = new Intl.NumberFormat(['ban', 'id']).format($total)
            $('#totalQty').html($qty+' Pcs');
            $('#totalBerat').html($berat+' Kg');
            $('#totalDpp').html('Rp. '+$dpp);
            $('#totalPpn').html('Rp. '+$ppn);
            $('#grandTotal').html('Rp. '+$total);
        }
    }
</script>
@endsection
