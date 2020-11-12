<?php

use App\Http\Controllers\VideoPlayController;
use App\Http\Controllers\invoice_controller;
use App\Http\Controllers\oil_controller;
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

Route::get('/', [VideoPlayController::class, 'index']);
Route::get('/logout', [VideoPlayController::class, 'logout']);

Route::get('/invoice/10901', [invoice_controller::class, 'invoice_show_01'])->name('10901');                // -> name('')  替路徑命名，避免網址堆疊。
Route::get('/invoice/10903', [invoice_controller::class, 'invoice_show_03'])->name('10903');
Route::get('/invoice/10905', [invoice_controller::class, 'invoice_show_05'])->name('10905');
Route::get('/invoice/10907', [invoice_controller::class, 'invoice_show_07'])->name('10907');

Route::get('/oil', [oil_controller::class, 'oil_show'])->name('oil_doit');

Route::get('/upload', [VideoPlayController::class, 'uploadindex']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('pages.index');
});
