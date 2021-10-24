<?php

use App\Http\Controllers\approvalController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\fakturbeliController;
use App\Http\Controllers\fakturjualController;
use App\Http\Controllers\kuitansijualController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productController;
use App\Http\Controllers\pushController;
use App\Http\Controllers\spkController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\trpembelianController;
use App\Http\Controllers\trpenawaranController;
use App\Http\Controllers\trreturbeliController;
use App\Http\Controllers\trreturjualController;
use App\Http\Controllers\trsuratjalanController;
use App\Http\Controllers\userController;
use App\Models\fakturbeli;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/links', function(){

});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', [userController::class, 'logout']);

Route::post('login', [LoginController::class, 'authenticate'])->name('login');

Route::post('/push', [pushController::class, 'store'])->name('push');

Route::get('/pushWelcome', [pushController::class, 'pushWelcome']);

Route::get('/getNotif', [LoginController::class, 'getNotif']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/manageAccount', function () {
        return view('profile.show');
    });

    Route::get('/home', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/getDashboard', [LoginController::class, 'getDashboard']);

    Route::get('/approval', [approvalController::class, 'showPage']);
    Route::post('/approval/action', [approvalController::class, 'action']);
    Route::post('/approval/view/{id}', [approvalController::class, 'view']);

    Route::get('/msCustomer', [CustomerController::class, 'showPage']);
    Route::post('/msCustomer/formInsert/submit', [CustomerController::class, 'insert']);
    Route::post('/msCustomer/delete', [CustomerController::class, 'delete']);
    Route::post('/msCustomer/formEdit/submit', [CustomerController::class, 'edit']);
    Route::get('/mastercustomer/search', [CustomerController::class, 'searchRes']);

    Route::get('/fakturPenjualan', [fakturjualController::class, 'showPage']);
    Route::post('/fakturPenjualan/editForm/{id}', [fakturjualController::class, 'editForm']);
    Route::post('/fakturPenjualan/submit', [fakturjualController::class, 'submit']);
    Route::get('/fakturPenjualan/print/{id}', [fakturjualController::class, 'print']);

    Route::get('/trPenawaran', [trpenawaranController::class, 'showPage']);
    Route::get('/trPenawaran/insertForm', [trpenawaranController::class, 'insertForm']);
    Route::get('/trPenawaran/editForm/{id}', [trpenawaranController::class, 'editForm']);
    Route::post('/trPenawaran/insertForm/insertTemp', [trpenawaranController::class, 'insertTemp']);
    Route::post('/trPenawaran/insertForm/delTemp', [trpenawaranController::class, 'deleteTemp']);
    Route::post('/trPenawaran/insertForm/submit', [trpenawaranController::class, 'insertFinalData']);
    Route::post('/trPenawaran/editForm/submit', [trpenawaranController::class, 'editFinalData']);
    Route::post('/trPenawaran/deal', [trpenawaranController::class, 'deal']);
    Route::get('/trPenawaran/edit/get', [trpenawaranController::class, 'getEdit']);
    Route::post('/trPenawaran/edit/insert', [trpenawaranController::class, 'submitEdit']);
    Route::get('/trPenawaran/print/{id}', [trpenawaranController::class, 'print']);
    Route::get('/trPenawaran/getSearchData', [trpenawaranController::class, 'getSearch']);
    Route::get('/trPenawaran/submitsearch', [trpenawaranController::class, 'doSearch']);
    Route::get('/suratpenawaran/search', [trpenawaranController::class, 'search']);


    Route::get('/spk', [spkController::class, 'showPage']);
    Route::post('/spk/setPic', [spkController::class, 'setPic']);
    Route::post('/spk/setSpk', [spkController::class, 'setSpk']);
    Route::get('/spk/print/{id}', [spkController::class, 'print']);
    Route::get('/suratperintahkerja/search', [spkController::class, 'search']);

    Route::get('/suratJalan', [trsuratjalanController::class, 'showPage']);
    Route::post('/suratJalan/submit', [trsuratjalanController::class, 'submit']);
    Route::get('/suratJalan/print/{id}', [trsuratjalanController::class, 'print']);

    Route::get('/kuitansi', [kuitansijualController::class, 'showPage']);
    Route::get('/kuitansi/getfaktur', [kuitansijualController::class, 'getFaktur']);
    Route::get('/kuitansi/getTotal', [kuitansijualController::class, 'getTotal']);
    Route::post('/kuitansi/formInsert/submit', [kuitansijualController::class, 'insert']);
    Route::post('/kuitansi/formEdit/submit', [kuitansijualController::class, 'edit']);
    Route::get('/kuitansi/print/{id}', [kuitansijualController::class, 'print']);
    Route::get('/kuitansi/format', [kuitansijualController::class, 'format']);

    Route::get('/laporanPenjualan', [laporanController::class, 'showPagePenjualan']);
    Route::get('/laporanPembelian', [laporanController::class, 'showPagePembelian']);
    // Route::get('/laporanStokbarang', [laporanController::class, 'showPageStokbarang']);

    Route::get('/laporanPenjualan/submit', [laporanController::class, 'showddPenjualan']);
    Route::get('/laporanPembelian/submit', [laporanController::class, 'showddPembelian']);
    // Route::get('/laporanStokBarang/submit', [laporanController::class, 'showddStokbarang']);

    Route::get('/laporanPenjualan/print', [laporanController::class, 'printPenjualan']);
    Route::get('/laporanPembelian/print', [laporanController::class, 'printPembelian']);
    Route::get('/laporanStokBarang/print', [laporanController::class, 'printStokBarang']);

    Route::get('/laporanStokBarang', [laporanController::class, 'showPageStokbarang']);
    Route::get('/laporanStokBarang/submit', [laporanController::class, 'showddStokbarang']);
});

Route::group(['middleware' => ['auth', 'adminRole']], function () {
    Route::get('/msUser', [userController::class, 'showPage']);
    Route::post('/msUser/formInsert/submit', [userController::class, 'insert']);
    Route::post('/msUser/formEdit/submit', [userController::class, 'edit']);
    Route::post('/msUser/deactivate', [userController::class, 'deactive']);
    Route::post('/msUser/changeOwner', [userController::class, 'changeOwner']);

    Route::get('/msProduct', [productController::class, 'showPage']);
    Route::post('/msProduct/formInsert/submit', [productController::class, 'insert']);
    Route::post('/msProduct/delete', [productController::class, 'delete']);
    Route::post('/msProduct/formEdit/submit', [productController::class, 'edit']);
    Route::get('/masterproduct/search', [productController::class, 'searchRes']);

    Route::get('/msSupplier', [supplierController::class, 'showPage']);
    Route::post('/msSupplier/formInsert/submit', [supplierController::class, 'insert']);
    Route::post('/msSupplier/delete', [supplierController::class, 'delete']);
    Route::post('/msSupplier/formEdit/submit', [supplierController::class, 'edit']);
    Route::get('/mastersupplier/search', [supplierController::class, 'searchRes']);

    Route::get('/fakturPembelian', [fakturbeliController::class, 'showPage']);
    Route::get('/fakturPembelian/insertForm', [fakturbeliController::class, 'insertForm']);
    Route::post('/fakturPembelian/insertForm/insertTemp', [fakturbeliController::class, 'insertTemp']);
    Route::post('/fakturPembelian/insertForm/submit', [fakturbeliController::class, 'submit']);
    Route::get('/fakturPembelian/getItem', [fakturbeliController::class, 'getItem']);
    Route::get('/fakturPembelian/viewForm/{id}', [fakturbeliController::class, 'viewForm']);
    Route::get('/fakturPembelian/print/{id}', [fakturbeliController::class, 'print']);
    Route::post('/fakturbeli/editForm/insertTemp', [fakturbeliController::class, 'editTemp']);
    Route::get('/fakturbeli/edit/get', [fakturbeliController::class, 'getEdit']);
    Route::post('/fakturbeli/edit/insert', [fakturbeliController::class, 'submitEdit']);
    Route::post('/fakturPembelian/editForm/submit', [fakturbeliController::class, 'editFinalData']);

    Route::get('/getSession', [fakturbeliController::class, 'getSession']);

    Route::get('/returPenjualan', [trreturjualController::class, 'showPage']);
    Route::get('/returPenjualan/form/{id}', [trreturjualController::class, 'viewDetail']);
    Route::post('/returPenjualan/form/submit', [trreturjualController::class, 'submit']);

    Route::get('/returPembelian', [trreturbeliController::class, 'showPage']);
    Route::get('/returPembelian/form/{id}', [trreturbeliController::class, 'viewDetail']);
    Route::post('/returPembelian/form/submit', [trreturbeliController::class, 'submit']);
});
