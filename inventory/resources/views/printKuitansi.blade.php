@extends('layouts.layout')

{{-- @section('title', 'Surat Penawaran') --}}
@section('header')
@endsection
@section('content')

<div class="main col-md-12 col-md-offset-0" id="noprint">
		<input type='button' onclick="window.print()" class="btn btn-success" name='CetakFakturPenjualan' id='CetakFakturPenjualan' value='Cetak Kuitansi' />
		<hr/>
	</div>

	<div id="printPanel" class="main">
		<div class="col-sm-12 center-block print-panel">
            <p style="color: black" class="inventory"><strong>E-INVENTORY</strong></p>
			<h3 align="center">KUITANSI</h3>
			<p align="center" style="color: black">No. {{$kuitansi->NoKuitansi}} </p>
			<hr/>
			<div class="row">
				<div class="col-md-12">
					<table width="100%">

					<tr>
						<td width="170px">
							<label class="control-label">Sudah Terima dari : </label> <br/>
						</td>
						@foreach($kuitansi->fakturjuals as $c)
						<td style="padding-bottom:8px">
							{{$c->trpenawaran->customer->Nama}}
						</td>
						@break
						@endforeach
					</tr>


                    <tr>
						<td width="170px">
							<label class="control-label">Banyaknya Uang : </label>
						</td>
						<td style="display: flex">
							<p id="kuitansiTotal" style="padding-top:8px;color: black">{{$kuitansi->Total}}</p>
                            <br/>
						</td>
					</tr>

                    <tr>
						<td width="170px">
							<label class="control-label">Untuk Pembayaran : </label>
						</td>
						<td>
							<p  style="padding-top:8px;color:black">Faktur No. @foreach($kuitansi->fakturjuals as $c) {{$c->NoFaktur}}, @endforeach</p>
						</td>

					</tr>

                    </table>
					<br/>
					<div style="font-weight:bold;text-align:right;">
							<p id="kuitansiTanggal" style="color: black">{{substr($kuitansi->TglKuitansi, 0, 10)}}</p>
					</div>
					<b id="totalAmount" style="padding-left: 40px">Rp. {{$kuitansi->Total}} </b>
				</div>
			</div>
		</div>
	</div>

    <script>
        modifValue()
        formatHari()

        function modifValue(){
            var value = $('#kuitansiTotal').html()
            var temp = value
            temp = new Intl.NumberFormat(['ban', 'id']).format(temp)
            $('#totalAmount').html('Rp. '+temp)
            $.ajax({
                method: 'GET',
                url: '{{URL::TO('/kuitansi/format')}}',
                data: {
                    nilai: value,
                },
                dataType : 'JSON',
                success: function(data){
                    $('#kuitansiTotal').html(data+' Rupiah')
                },
                error: function(){
                    console.log('failed')
                }
            })
        }

    function formatHari(){
        var arrayHari = ["Januari", "Februari", "Maret", "April", "Mei", "juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
        var temp = $('#kuitansiTanggal').html()
        var tanggal = new Date(temp)
        var bulan = tanggal.getMonth()
        var namaBulan = arrayHari[bulan]
        $('#kuitansiTanggal').html('Tangerang, '+tanggal.getDate()+ ' '+namaBulan+ ' '+tanggal.getFullYear())
    }
</script>
@endsection
