<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\barang;
use App\Models\barangbeli;
use App\Models\trpenawaran;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    public function showPagePenjualan(){
        $penjualan = Customer::where('stsrc', 'A')->orderBy('Nama')->get();
        $tebalPenjualan = barang::where('tebal','!=',0)->groupBy('tebal')->get();
        $diameterPenjualan = barang::where('diameter','!=',0)->groupBy('diameter')->get();
        return view('laporanPenjualan',compact('penjualan','tebalPenjualan','diameterPenjualan'));
    }
    public function showPagePembelian(){
        $pembelian = Supplier::where('stsrc', 'A')->orderBy('nama')->get();
        $tebalPembelian = barangbeli::where('tebal','!=',0)->groupBy('tebal')->get();
        $diameterPembelian = barangbeli::where('diameter','!=',0)->groupBy('diameter')->get();
        return view('laporanPembelian',compact('pembelian','tebalPembelian','diameterPembelian'));
    }
    public function showPageStokbarang(){
        $stokbarang = Supplier::where('stsrc', 'A')->orderBy('nama')->get();
        $bentukbarang = barang::groupBy('bentuk')->get();
        return view('laporanStokbarang',compact('stokbarang','bentukbarang'));
    }
    public function showddPenjualan(Request $request){
        $penjualan = Customer::where('stsrc', 'A')->orderBy('Nama')->get();
        $tebalPenjualan = barang::where('tebal','!=',0)->groupBy('tebal')->get();
        $diameterPenjualan = barang::where('diameter','!=',0)->groupBy('diameter')->get();

        $start = $request->input('insertawaltglOrder');
        $end = $request->input('insertakhirtglOrder');


        if($request->input('insertdiameter')){
            $diameter = $request->input('insertdiameter');
        }else{
            $diameter = '%%';
        }

        if($request->input('inserttebal')){
            $tebal = $request->input('inserttebal');
        }else{
            $tebal = '%%';
        }

        $result = barang::whereHas('trpenawaran', function(Builder $query) use($request){
            $query->whereHas('customer', function(Builder $query) use($request){
                if($request->input('insertpelanggan')){
                    $idpelanggan = $request->input('insertpelanggan');
                }else{
                    $idpelanggan = '%%';
                }
                $query->where('id', 'LIKE', $idpelanggan);
            })
            ->where('tglso', '>=', $request->input('insertawaltglOrder'))
            ->where('tglso', '<=', $request->input('insertakhirtglOrder'));
        })->where('tebal', 'LIKE', $tebal)
        ->where('diameter', 'LIKE', $diameter)->get();

        return view('laporanPenjualan',compact('penjualan','tebalPenjualan','diameterPenjualan', 'result'));
    }
    public function showddPembelian(Request $request){
        $pembelian = Supplier::where('stsrc', 'A')->orderBy('nama')->get();
        $tebalPembelian = barangbeli::where('tebal','!=',0)->groupBy('tebal')->get();
        $diameterPembelian = barangbeli::where('diameter','!=',0)->groupBy('diameter')->get();

        $start = $request->input('insertawaltglOrder');
        $end = $request->input('insertakhirtglOrder');


        if($request->input('insertdiameter')){
            $diameter = $request->input('insertdiameter');
        }else{
            $diameter = '%%';
        }

        if($request->input('inserttebal')){
            $tebal = $request->input('inserttebal');
        }else{
            $tebal = '%%';
        }

        $result = barangbeli::whereHas('fakturbeli', function(Builder $query) use($request){
            $query->whereHas('supplier', function(Builder $query) use($request){
                if($request->input('insertsupplier')){
                    $idsupplier = $request->input('insertsupplier');
                }else{
                    $idsupplier = '%%';
                }
                $query->where('id', 'LIKE', $idsupplier);
            })
            ->where('tglfaktur', '>=', $request->input('insertawaltglOrder'))
            ->where('tglfaktur', '<=', $request->input('insertakhirtglOrder'));
        })->where('tebal', 'LIKE', $tebal)
        ->where('diameter', 'LIKE', $diameter)->get();
        return view('laporanPembelian',compact('pembelian','tebalPembelian','diameterPembelian', 'result'));
    }
    public function showddStokbarang(Request $request){
        $stokbarang = Supplier::where('stsrc', 'A')->orderBy('nama')->get();
        $bentukbarang = barang::groupBy('bentuk')->get();

        $start = $request->input('insertawalOrder');
        $end = $request->input('insertakhirOrder');

        if($request->input('insertBentuk')){
            $bentuk = $request->input('insertBentuk');
        }else{
            $bentuk = '%%';
        }

        if($request->input('insertsupplier')){
            $sup = $request->input('insertsupplier');
        }else{
            $sup = '%%';
        }

        $data = [$start, $end, $sup, $bentuk];
        $result = DB::select('CALL sp_stokBarang (?,?,?,?) ',$data);

        return view('laporanStokbarang',compact('stokbarang','bentukbarang','result'));

    }

    public function printPenjualan(){

    }

    public function printPembelian(){

    }
}
