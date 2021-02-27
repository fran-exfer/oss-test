<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/**
 * These are the routes from my application. I've tried to follow a modified
 * 7 RESTful routes pattern. Because the app is only about images, I've taken
 * the root of the website as the root route for the resource 'images'. I've
 * also added an additional one for showing a delete confirmation dialog
 * without JS.
 */

// Image list, image details and UI forms
Route::get('/', [ImagesController::class, 'index'])->name('index');
Route::get('/create', [ImagesController::class, 'create'])->name('create');
Route::get('/{image}', [ImagesController::class, 'show'])->name('show');
Route::get('/{image}/edit', [ImagesController::class, 'edit'])->name('edit');
Route::get('/{image}/delete', [ImagesController::class, 'delete'])->name('deleteconfirm');

// Store a new image in the database
Route::post('/', [ImagesController::class, 'store'])->name('store');

// Update an image in the database
Route::put('/{image}', [ImagesController::class, 'update'])->name('update');

// Delete an image in the database
Route::delete('/{image}', [ImagesController::class, 'destroy'])->name('destroy');