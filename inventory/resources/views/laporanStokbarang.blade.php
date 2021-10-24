@extends('layouts.layout')
@section('title', 'Laporan Stok Barang')
@section('content')
<div class="px-5">
    <form action="/laporanStokBarang/submit" method="GET">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>Awal Periode</label>
                <input type="date" class="form-control form-control-sm" id="insertawalOrder" name="insertawalOrder" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Akhir Periode</label>
                <input type="date" class="form-control form-control-sm" id="insertakhirOrder" name="insertakhirOrder" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Supplier</label>
                    <select class="form-control form-control-sm" id="insertsupplier" name="insertsupplier">
                    <option value="">Semua</option>
                    @foreach($stokbarang as $s)
                    <option value="{{$s->nama}}">{{$s->nama}}</option>
                    @endforeach
                 </select>
            </div>
            <div class="form-group col">
                <label class="mr-3">Bentuk</label>
                <select name="insertBentuk" id="insertBentuk" class="form-control form-control-sm">
                    <option value="">Semua</option>
                    @foreach($bentukbarang as $sb)
                    <option value="{{$sb->bentuk}}">{{$sb->bentuk}}</option>
                    @endforeach
            </select>
            </div>
            <div class="form-group col my-auto m-0">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        {{-- <hr class="border border-info"> --}}

        <hr class="border border-info mb-5">
            <table id="trans-table" class="table table-striped table-hover" border="1px solid #343e42">
                <thead>
                    <tr>
                        <th style="width: 12%">Supplier</th>
                        <th>Item</th>
                        <th>Bentuk</th>
                        <th>Ukuran (d x p x l x t )</th>
                        <th>Qty(pcs)</th>
                        <th>Berat(kg)</th>
                    </tr>
                </thead>
                @if(isset($result))
                    @if(count($result) < 1)
                        <h4>No Data Found</h4>
                    @else

                <tbody>
                    @foreach($result as $x)
                    <tr>
                        <td>{{$x->nama}}</td>
                        <td>{{$x->tipe}}</td>
                        <td>{{$x->bentuk}}</td>
                        @if($x->bentuk == 'RoundPlate')
                            <td>{{$x->diameter}}x{{$x->diameter}}x{{$x->tebal}}</td>
                        @else
                            @if($x->bentuk == 'RoundBar')
                                <td>{{$x->diameter}}x{{$x->diameter}}x{{$x->panjang}}</td>
                            @else
                                <td>{{$x->panjang}}x{{$x->lebar}}x{{$x->tebal}}</td>
                            @endif
                        @endif
                        <td>{{($x->qty - $x->qtyRetur)}}</td>
                        <td>{{$x->berat}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td id="totalQty">totalqty</td>
                        <td id="totalBerat">total kg</td>

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
                for(var i = 1, row; i < tab.rows.length-1; i++){
                    row = tab.rows[i]
                    $qty = +$qty + +row.cells[4].innerHTML;
                    $berat = +$berat + +row.cells[5].innerHTML;
                }
                $berat = $berat.toFixed(3)
                $berat = new Intl.NumberFormat(['ban', 'id']).format($berat)

                $('#totalQty').html($qty+' Pcs');
                $('#totalBerat').html($berat+' Kg');

            }
        }
    </script>

@endsection
