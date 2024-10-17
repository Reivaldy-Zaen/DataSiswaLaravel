<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//     return view('halo');
// });


Route::resource('/', StudentController::class);
Route::resource('/student', StudentController::class);
Route::get('/User', [UserController::class, 'index'])->name('User');
Route::get('/login/add', [UserController::class, 'create'])->name('user.login');
// Route::get('/user/tambah-akun', [UserController::class, 'store'])->name('user.tambah.akun');
Route::post('/user/tambah-akun', [UserController::class, 'store'])->name('user.tambah.akun');
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');



