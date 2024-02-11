<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
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
/* Route::middleware('auth')->group(function () {
    
    //

});*/
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::get('/', [BookController::class , 'index'])->name('show');
 Route::post('/create', [BookController::class , 'store'])->name('books.store');
 Route::delete('/delete/{id}' , [BookController::class , 'destroy'])->name('books.destroy');
 Route::get('/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
 Route::put('books/edit/{id}', [BookController::class, 'update'])->name('books.update');


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');

 
Route::post('/register', [AuthController::class, 'register'])->name('registerAction');
Route::post('/login', [AuthController::class, 'login'])->name('loginAction');

Route::post('/reserve/{id}', [BookController::class, 'reserveBook'])->name('reserve.book');

Route::get('/test',[RoleController::class, 'index']);