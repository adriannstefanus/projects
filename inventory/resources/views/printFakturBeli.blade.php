@extends('layouts.layout')

{{-- @section('title', 'Faktur Penjualan') --}}
@section('header')
@endsection
@section('content')
<div class="col-md-12 col-md-offset-0" id="noprint">
    <input type='button' onclick="window.print()" class="btn btn-success" name='CetakFakturPenjualan' id='CetakFakturPenjualan' value='Cetak Faktur Pembelian'/>
    <hr/>
</div>
<div class="main">
    <div id="printPanel" class="col-sm-12 center-block print-panel">
        <p style="color: black" class="inventory"><strong>E-INVENTORY</strong></p>
        <h4 align="center">FAKTUR PEMBELIAN</h4><br/>
        <table width="100%" style="border:0px solid #a0a0a0;">
        <tr>
            <td width="60%">
                <label class="control-label">No. Faktur :</label> {{$faktur->NoFaktur}}  <br/>
                <label class="control-label">Tanggal :</label> {{date_format(date_create($faktur->TglFaktur), 'd M Y')}} <br/>
                <label class="control-label">Jatuh Tempo :</label> {{date_format(date_create($faktur->TglJatuhTempoFaktur), 'd M Y')}} <br/>
            </td>
            <td><label class="control-label">Kepada Yth., </label><br/>
                {{$faktur->supplier->nama}}
                <br/>
                <label for="NoPO" class="control-label">No. P.O. : </label>
                {{$faktur->NoPO}}
                <br/>
            </td>
        </tr>
        </table>
        <table id="tblinvoice" class="print-table" width="100%">
            <thead>
            <tr align="center">
                <th class="text-center" width="60">No.</th>
                <th >Nama Barang</th>
                <th class="text-center" width="90" >Berat(Kg)</th>
                <th class="text-center" width="90" >Harga/Kg</th>
                <th class="text-center" width="90" >Qty(Pcs)</th>
                <th class="text-center" width="100" >Harga</th>
                <th class="text-center" width="100" >SubTotal</th>
            </tr>
            </thead>
            <tbody>
                @foreach($faktur->barangbelis as $coco)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    @if($coco->bentuk == 'RoundPlate')
                            <td>{{ $coco->producttype->tipe }}({{$coco->diameter}}x{{$coco->tebal}})</td>
                        @else
                            @if($coco->bentuk == 'RoundBar')
                                <td>{{ $coco->producttype->tipe }}({{$coco->diameter}}x{{$coco->panjang}})</td>
                            @else
                                <td>{{ $coco->producttype->tipe }}({{$coco->panjang}}x{{$coco->lebar}}x{{$coco->tebal}})</td>
                            @endif
                        @endif
                    <td>{{$coco->berat}}</td>
                    <td>{{$coco->hargaKg}}</td>
                    <td>{{$coco->qty}}</td>
                    <td>{{$coco->hargaSatuan}}</td>
                    <td>{{($coco->totprice)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table width="100%">
        <tr>
            <td valign="top">
                <label class="control-label">Keterangan : </label><br/>
                {{$faktur->keterangan}}
            </td>
            <td style="width:150px">
            <div style="font-weight:bold;text-align:right;">
                <span style="padding-right: 4px">Sub Total  </span><span>:</span> <br/>
                <span style="padding-right: 2px">PPN <input type="text" id="PPN" name="PPN" value="{{$faktur->PPN}}"style="border:none; width: 20px;background-color:#ebfaff" size="5" readonly />  % </span><span>:</span><br/>
                <span style="padding-right: 40px">Total</span><span>:</span>
            </div>
            </td>
            <td style="width:50px">
                <div style="font-weight:bold;text-align:right;">
                <input type="text" value="{{$faktur->subtotal}}" name="subtotal" id="subtotal" style="border:none;text-align:right;background-color:#ebfaff"  size="20" readonly /><br/>
                <input type="text" value="{{($faktur->PPN * $faktur->subtotal/100)}}" name="RpPPN" id="RpPPN" style="border:none;text-align:right;background-color:#ebfaff"  size="20" readonly /><br/>
                <input type="text" id="total" name="total" value="{{$faktur->total}}" style="border:none;text-align:right;background-color:#ebfaff" size="20"/>
                </div>
            </td>
        </tr>
        </table>

    </div>

</div>
<script>
    moneyFormat()
    function moneyFormat(){
        var subtotal = $('#subtotal').val()
        var total = $('#total').val()
        var ppn = $('#RpPPN').val()
        subtotal = Intl.NumberFormat(['ban', 'id']).format(subtotal)
        ppn = Intl.NumberFormat(['ban', 'id']).format(ppn)
        total = Intl.NumberFormat(['ban', 'id']).format(total)
        $('#subtotal').val('Rp. '+subtotal)
        $('#total').val('Rp. '+total)
        $('#RpPPN').val('Rp. '+ppn)
    }
</script>
@endsection
