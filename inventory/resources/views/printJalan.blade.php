@extends('layouts.layout')

{{-- @section('title', 'Surat Jalan') --}}
@section('header')
@endsection
@section('content')
<div class="col-md-12 col-md-offset-0" id="noprint">
    <input type='button' onclick="window.print()" class="btn btn-success" name='CetakSuratPenawaran' id='CetakSuratPenawaran' value='Cetak Surat Jalan'/>
    <hr/>
</div>
<div class="main">
    <div id="printPanel" class="col-sm-12 center-block print-panel">
        <p style="color: black" class="inventory"><strong>E-INVENTORY</strong></p>
        <h4 align="center">SURAT JALAN</h4><br/>
        <table width="100%" style="border:0px solid #a0a0a0;">
        <tr>
            <td width="60%">
                <label class="control-label">No. Surat Jalan :</label> {{$jalan->NoSuratJalan}}  <br/>
                <label class="control-label">Tanggal Surat Jalan : </label> {{date_format(date_create($jalan->TglSuratJalan), 'd M Y')}} <br/>
            </td>
            <td><label class="control-label">Kepada Yth., </label><br/>
                {{$jalan->trpenawaran->customer->Nama}}
                <br/>
                <label for="NoPO" class="control-label">No PO : </label>
                {{$jalan->NoPO}}
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
            </tr>
            </thead>
            <tbody>
                @foreach($jalan->trpenawaran->barangs as $coco)
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
                    <td>{{number_format($coco->hargaKg,0,',','.')}}</td>
                    <td>{{$coco->qty}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>


        <div class="row">
				<div class="col-md-12">
					<table width="100%">
					<tr>
						<td valign="top">
							 <label class="control-label">Keterangan : </label><br/>
                             {{$jalan->trpenawaran->keterangan}}
						</td>
					</tr>
					</table>
					<br>
				</div>
			</div>
			<footer style="justify-content: space-around;display: flex;">
				<div><b>Diterima Oleh</b>
				</div>
				<div><b>Sopir</b></div>
				<div><b>Diperiksa Oleh</b></div>
				<div>
					<b>Dibuat Oleh</b>
					<br><br><br><br>
					<p style="text-align: center;">{{$jalan->user->name}}</p>

                </div>
            </footer>

    </div>

</div>
@endsection
