<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => ['auth'] ], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

    Route::prefix('peminjaman')->group(function (){
        route::get('/', [App\Http\Controllers\PeminjamanController::class, 'index'])->name('peminjaman.index');
        route::get('create', [App\Http\Controllers\PeminjamanController::class, 'create'])->name('peminjaman.memo.create');
        route::post('/', [App\Http\Controllers\PeminjamanController::class, 'store'])->name('peminjaman.memo.store');
        route::get('show/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'show'])->name('peminjaman.detail');
        route::post('/item/{type}', [App\Http\Controllers\PeminjamanController::class, 'itemStore'])->name('peminjaman.item.store');
        route::get('/item-delete/{type}', [App\Http\Controllers\PeminjamanController::class, 'itemDestroy'])->name('peminjaman.item.delete');
        route::post('/get-item', [App\Http\Controllers\PeminjamanController::class, 'itemIndex'])->name('peminjaman.item.index');
        route::post('/get-input-barang', [App\Http\Controllers\PeminjamanController::class, 'getInputBarang'])->name('peminjaman.get.input');
        route::get('/tik/create', [App\Http\Controllers\PeminjamanController::class, 'createTik'])->name('peminjaman.create');
        route::post('/tik', [App\Http\Controllers\PeminjamanController::class, 'storeTik'])->name('peminjaman.tikstore');
    });

    Route::prefix('pengajuan')->group(function (){
        route::get('/', [App\Http\Controllers\PeminjamanController::class, 'pengajuan'])->name('pengajuan.index');
        route::get('show/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'showPengajuan'])->name('pengajuan.detail');
        route::put('approve/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'approve'])->name('pengajuan.approve');
        route::put('reject/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'reject'])->name('pengajuan.reject');
    });

    Route::prefix('pengambilan')->group(function (){
        route::get('/', [App\Http\Controllers\PeminjamanController::class, 'pengambilan'])->name('pengambilan.index');
        route::get('show/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'showPengambilan'])->name('pengambilan.detail');
        route::put('proses/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'ambil'])->name('pengambilan.proses');
    });

    Route::prefix('pengembalian')->group(function (){
        route::get('/', [App\Http\Controllers\PeminjamanController::class, 'pengembalian'])->name('pengembalian.index');
        route::get('show/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'showPengembalian'])->name('pengembalian.detail');
        route::get('perpanjang/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'perpanjang'])->name('pengembalian.perpanjang');
        route::put('/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'updatePerpanjang'])->name('perpanjang.proses');
        route::put('/{peminjaman}', [App\Http\Controllers\PeminjamanController::class, 'kembali'])->name('kembali.proses');
    });

    Route::group(['middleware' => ['AdminMaster']], function (){
        Route::prefix('master')->group(function (){
            Route::prefix('mail')->group(function() {
                route::get('/', 'App\Http\Controllers\MasterMailController@index')->name('master.mail.index');
                route::put('/', 'App\Http\Controllers\MasterMailController@update')->name('master.mail.update');

            });

            Route::prefix('asset')->group(function (){
                Route::get('/', [App\Http\Controllers\AssetController::class, 'index'])->name('master.asset.index');
                Route::get('create', [App\Http\Controllers\AssetController::class, 'create'])->name('master.asset.create');
                Route::post('/', [App\Http\Controllers\AssetController::class, 'store'])->name('master.asset.store');
                Route::put('/', [App\Http\Controllers\AssetController::class, 'update'])->name('master.asset.update');
                Route::get('edit/{asset}', [App\Http\Controllers\AssetController::class, 'edit'])->name('master.asset.edit');
                Route::delete('/{asset}', [App\Http\Controllers\AssetController::class, 'destroy'])->name('master.asset.delete');
            });

            Route::prefix('user')->group(function (){
                Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('master.user.index');
                Route::get('create', [App\Http\Controllers\UserController::class, 'create'])->name('master.user.create');
                Route::post('/', [App\Http\Controllers\UserController::class, 'store'])->name('master.user.store');
                Route::get('/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('master.user.show');
                Route::get('/edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('master.user.edit');
                Route::put('/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('master.user.update');
                Route::delete('/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('master.user.delete');
            });
        });
    });
});