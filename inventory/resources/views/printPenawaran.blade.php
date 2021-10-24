@extends('layouts.layout')

{{-- @section('title', 'Surat Penawaran') --}}
@section('header')
@endsection
@section('content')
<div class="col-md-12 col-md-offset-0" id="noprint">
    <input type='button' onclick="window.print()" class="btn btn-success" name='CetakSuratPenawaran' id='CetakSuratPenawaran' value='Cetak Surat Penawaran'/>
    <hr/>
</div>

<div class="main">
    <div id="printPanel" class="col-sm-12 center-block print-panel">
        <p style="color: black" class="inventory"><strong>E-INVENTORY</strong></p>
        <h4 align="center">SURAT PENAWARAN</h4><br/>
        <table width="100%" style="border:0px solid #a0a0a0;">
        <tr>
            <td width="60%">
                <label class="control-label">No. Sales Order :</label> {{$penawaran->NoSO}}  <br/>
                <label class="control-label">Tanggal :</label> {{date_format(date_create($penawaran->TglSO), 'd M Y')}} <br/>
                <label class="control-label">Dibuat oleh :</label> {{$penawaran->user->name}} <br/>
            </td>
            <td><label class="control-label">Kepada Yth., </label><br/>
                {{$penawaran->customer->Nama}}
                <br/>
                <label for="NoPO" class="control-label">No. Order : </label>
                {{$penawaran->NoSO}}
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
                @foreach($penawaran->barangs as $coco)
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
                    @if($coco->berat < 1)
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>{{number_format($coco->hargaKg,0,',','.')}}</td>
                    <td>{{number_format($coco->hargaKg,0,',','.')}}</td>
                    @else
                    <td>{{$coco->berat}}</td>
                    <td>{{number_format($coco->hargaKg,0,',','.')}}</td>
                    <td>{{$coco->qty}}</td>
                    <td>{{number_format($coco->hargaSatuan,0,',','.')}}</td>
                    <td>{{(number_format($coco->totprice,0,',','.'))}}</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
        <table width="100%">
        <tr>
            <td valign="top">
                <label class="control-label">Keterangan : </label><br/>
                {{$penawaran->keterangan}}
            </td>
            <td style="width:150px">
            <div style="font-weight:bold;text-align:right;">
                <span style="padding-right: 4px">Sub Total  </span><span>:</span> <br/>
                <span style="padding-right: 2px">PPN <input type="text" id="PPN" name="PPN" value="{{$penawaran->PPN}}"style="border:none; width: 20px;background-color:#ebfaff" size="5" readonly />  % </span><span>:</span><br/>
                <span style="padding-right: 40px">Total</span><span>:</span>
            </div>
            </td>
            <td style="width:50px">
                <div style="font-weight:bold;text-align:right;">
                <input type="text" value="{{$penawaran->subtotal}}" name="subtotal" id="subtotal" style="border:none;text-align:right;background-color:#ebfaff"  size="20" readonly /><br/>
                <input type="text" value="{{$penawaran->PPN}}" name="RpPPN" id="RpPPN" style="border:none;text-align:right;background-color:#ebfaff"  size="20" readonly /><br/>
                <input type="text" id="total" name="total" value="{{$penawaran->total}}" style="border:none;text-align:right;background-color:#ebfaff" size="20"/>
                </div>
            </td>
        </tr>
        </table>

    </div>

</div>
<script>
    hitungTotal()
    function hitungTotal(){
            var tab = document.getElementById('tblinvoice');
            if(tab.rows){
                $subtotal = 0;
                for(var i = 1, row; row = tab.rows[i]; i++){
                    const temp = row.cells[6].innerHTML
                    $temp = temp.replaceAll('.', '')
                    $subtotal = +$subtotal + +$temp;
                }
                $subtotal = Math.round($subtotal)
                $ppn = $('#RpPPN').val()
                $ppn = ($ppn/100)*$subtotal
                $ppn = Math.round($ppn)
                var tot = +$subtotal + +($ppn);
                $total = tot;
                $total = Math.round($total)

                $ppn = Intl.NumberFormat(['ban', 'id']).format($ppn)
                $subtotal = Intl.NumberFormat(['ban', 'id']).format($subtotal)
                $total = Intl.NumberFormat(['ban', 'id']).format($total)
                $('#subtotal').val('Rp. '+$subtotal)
                $('#total').val('Rp. '+$total)
                $('#RpPPN').val('Rp. '+$ppn)
            }

        }
</script>
@endsection
