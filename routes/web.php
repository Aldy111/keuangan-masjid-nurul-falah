<?php

use App\Livewire\ShowHome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', ShowHome::class)->name('home');
// Route::get('/kegiatan', ShowKegiatanPage::class)->name('kegiatanPage');

// Route::get('download', function(){
//     return 'latihan laporan pdf';
// })->name('download.tes');
Route::get('download', [PDFController::class, 'downloadpdf'])->name('laporan_pdf');
// Route::get('/transactions/export', 'TransactionController@export')->name('transactions.export');
Route::get('/transactions/export', [TransactionController::class, 'export'])->name('laporan_excel');