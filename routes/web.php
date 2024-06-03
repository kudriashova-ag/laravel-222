<?php

use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\MainController;
use App\Models\Genre;
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

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [MainController::class, 'sendEmail'])->name('contacts.send');

Route::resource('/admin/genres', GenresController::class);



/* Route::get('/genres/{id}', function ($id) {
    $genre = Genre::findOrFail($id);
    dd($genre);
}); */

// Route::get('/genres/{genre}', function (Genre $genre) {
//     dd($genre);
// });
