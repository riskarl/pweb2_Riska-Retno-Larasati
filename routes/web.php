<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controller\ProkerController;
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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('sneat.html.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'tampil'])->name('dashboard');
Route::get('/tambah-proker', [DashboardController::class, 'tambahproker'])->name('tambahproker');
Route::post('/insert-proker', [DashboardController::class, 'insertproker'])->name('insertproker');
// Route::delete('/dashboard/{id}',[DashboardController::class, 'destroy']);

// Route::get('dashboard', [DashboardController::class, 'tampil'])->middleware(['auth','verified']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('proker', [DashboardController::class,'tampil'])->middleware(['auth','verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('/proker', [ProkerController::class,'index'])->middleware(['auth','verified']);
route::get('/proker/store', [ProkerController::class,'store'])->middleware(['auth','verified']);
route::delete('/dashboard/{id_proker}', [DashboardController::class,'delete'])->middleware(['auth','verified']);

require __DIR__.'/auth.php';
