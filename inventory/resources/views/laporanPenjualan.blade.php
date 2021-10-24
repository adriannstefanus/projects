@extends('layouts.layout')
@section('title', 'Laporan Penjualan')
@section('table')
<div class="px-5">
    <form action="/laporanPenjualan/submit" method="GET">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>Awal Periode</label>
                <input required type="date" class="form-control form-control-sm" id="inserttglOrder" name="insertawaltglOrder" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Akhir Periode</label>
                <input required type="date" class="form-control form-control-sm" id="inserttglOrder" name="insertakhirtglOrder" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Customer</label>
                <select class="form-control form-control-sm" id="insertpelanggan" name="insertpelanggan">
                    <option selected value="">Semua</option>
                  @foreach($penjualan as $c)
                  <option value="{{$c->id}}">{{$c->Nama}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        {{-- <hr class="border border-info"> --}}

        <hr class="border border-info">
        <div class="row pb-5">
            <div class="form-group form-inline">
                <label class="mr-3">Tebal</label>
                <select name="inserttebal" id="inserttebal" class="form-control form-control-sm">
                    <option selected value="">Semua</option>
                    @foreach($tebalPenjualan as $t)
                    <option value="{{$t->tebal}}">{{$t->tebal}}</option>
                    @endforeach
            </select>
            </div>
            <div class="form-group form-inline mr-5 ml-5">
                <label class="mr-3">Diameter</label>
                <select name="insertdiameter" id="insertdiameter" class="form-control form-control-sm">
                    <option selected value="">Semua</option>
                    @foreach($diameterPenjualan as $d)
                    <option value="{{$d->diameter}}">{{$d->diameter}}</option>
                    @endforeach
            </select>
            </div>
            <div class="form-group ml-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

            <table id="trans-table" class="table table-striped table-hover" border="1px solid #343e42">
                <thead>
                    <tr>
                        <th style="width: 12%">Tanggal</th>
                        <th>Customer</th>
                        <th>Item</th>
                        <th>Ukuran (d x p x l x t)</th>
                        <th>Qty(pcs)</th>
                        <th>Berat(kg)</th>
                        <th>Harga/Pcs</th>
                        <th>DPP</th>
                        <th>PPN</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @if(isset($result))
                    @if(count($result) < 1)
                        <h4>No Data Found</h4>
                    @else
                <tbody>
                    @foreach($result as $x)
                    <tr>
                        <td>{{substr($x->trpenawaran->TglSO, 0, 10)}}</td>
                        <td>{{$x->trpenawaran->customer->Nama}}</td>
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
                        <td>{{number_format($x->hargaSatuan,0,',','.')}}</td>
                        <td>{{number_format($x->totprice,0,',','.')}}</td>
                        {{-- @if($x->trpenawaran->PPN != 0) --}}
                            <td>{{number_format((1/$x->trpenawaran->PPN)*$x->totprice,0,',','.')}}</td>
                            <td>{{number_format($x->totprice+((1/$x->trpenawaran->PPN)*$x->totprice),0,',','.')}}</td>
                        {{-- @else
                            <td>0</td>
                            <td>{{($x->berat*$x->hargaKg)+0}}</td>
                        @endif --}}

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
                @endif
                @endif
            </table>
        </div>
    </form>

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
                    //qty
                    var temp = row.cells[4].innerHTML
                    $temp = temp.replace('.', '')
                    $qty = +$qty + +$temp;
                    //berat
                    temp = row.cells[5].innerHTML
                    // $temp = temp.replace('.', ',')
                    $berat = +$berat + +temp;
                    //dpp
                    const dpp = row.cells[7].innerHTML
                    $temp = dpp.replaceAll('.', '')
                    $dpp = +$dpp + +$temp;
                    //ppn
                    const ppn = row.cells[8].innerHTML
                    $temp = ppn.replaceAll('.', '')
                    $ppn = +$ppn + +$temp;
                    //total
                    const total = row.cells[9].innerHTML
                    $temp = total.replaceAll('.', '')
                    $total = +$total + +$temp;
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


