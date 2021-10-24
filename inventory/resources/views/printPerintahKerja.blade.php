@extends('layouts.layout')

{{-- @section('title', 'Surat Perintah Kerja') --}}
@section('header')
@endsection
@section('content')
<div class="col-md-12 col-md-offset-0" id="noprint">
    <input type='button' onclick="window.print()" class="btn btn-success" name='CetakSuratPenawaran' id='CetakSuratPenawaran' value='Cetak Surat Perintah Kerja'/>
    <hr/>
</div>
<div class="main">
    <div id="printPanel" class="col-sm-12 center-block print-panel">
        <p style="color: black" class="inventory"><strong>E-INVENTORY</strong></p>
        <h4 align="center">SURAT PERINTAH KERJA</h4><br/>
        <h5 align="center">Kepada : {{$kerja[0]->pic}}</h4><br/>

        <table id="tblSPK" class="print-table" width="100%">
            <thead>
            <tr align="center">

                <th class="text-center" width="60">No. SPK</th>
                <th class="text-center" width="90">Tgl. SPK</th>
                <th class="text-center" width="90" >No. SO</th>
                <th class="text-center" width="90" >Nama Barang</th>
                <th class="text-center" width="90" >Jumlah(Pcs)</th>
                <th class="text-center" width="90">Keterangan</th>
            </tr>
            </thead>
            <tbody>
                @foreach($kerja as $c)
                <tr>
                    <td>{{$c->noSPK}}</td>
                    <td>{{$c->tglSPK}}</td>
                    <td>{{$c->trpenawaran->NoSO}}</td>

                    @if($c->barang->bentuk == 'RoundPlate')
                            <td>{{ $c->barang->producttype->tipe }}({{$c->barang->diameter}}x{{$c->barang->tebal}})</td>
                        @else
                            @if($c->barang->bentuk == 'RoundBar')
                                <td>{{ $c->barang->producttype->tipe }}({{$c->barang->diameter}}x{{$c->barang->panjang}})</td>
                            @else
                                <td>{{ $c->barang->producttype->tipe }}({{$c->barang->panjang}}x{{$c->barang->lebar}}x{{$c->barang->tebal}})</td>
                            @endif
                        @endif
                        <td>{{$c->barang->qty}}</td>

                        <td>{{$c->Keterangan}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>



    </div>

</div>
@endsection
