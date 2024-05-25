<?php

use App\Http\Controllers\PeranController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\supirController;
use App\Models\Peran;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('dashboard');
});
// Route::get('dashboard', function () {
//     return view('dashboard');
// });


Route::resource('peran', PeranController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('supir', supirController::class);
Route::resource('dashboard', DashboardController::class);


//untuk melakukan download pdf
Route::get('pengguna/view/pdf', [PenggunaController::class, 'view_pdf']);
Route::get('peran/view/pdf', [PeranController::class, 'view_pdf']);
Route::get('supir/view/pdf', [supirController::class, 'view_pdf']);