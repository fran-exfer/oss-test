<?php

use App\Http\Controllers\ImagesController;
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

Route::get('/', [ImagesController::class, 'index'])->name('index');
Route::get('/create', [ImagesController::class, 'create'])->name('create');
Route::get('/{image}/edit', [ImagesController::class, 'edit'])->name('edit');
Route::get('/{image}/delete', [ImagesController::class, 'delete'])->name('deleteconfirm');

Route::post('/', [ImagesController::class, 'store'])->name('store');

Route::put('/{image}', [ImagesController::class, 'update'])->name('update');

Route::delete('/{image}', [ImagesController::class, 'destroy'])->name('destroy');