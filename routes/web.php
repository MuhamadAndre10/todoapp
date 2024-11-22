<?php

use App\Http\Controllers\EditController;
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
    return view('home');
});

// Route::get('/edit/{id}', function () {
//     return view('edit', [EditController::class, 'index']);
// })->name('edit');

Route::get('/edit/{id}', [EditController::class, 'index'])->name('edit');
Route::put('/edit/{id}', [EditController::class, 'update'])->name('edit.update');
