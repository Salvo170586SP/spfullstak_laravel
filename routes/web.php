<?php

use App\Http\Controllers\BiograpyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
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

/* Route::get('/', function () {
    return view('guest.guest_home');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/* ADMIN */
Route::middleware('auth')->prefix('dashboard')->name('admin.')->group(function () {
    #GET|HEAD  dashboard/biograpies ......admin.biograpies.index › BiograpyController@index
    Route::resource('/biograpies', BiograpyController::class);
    
});




/* GUEST */
Route::get('/', [HomeController::class, 'index'])->name('guest.home');

Route::get('/projects',function(){
    return view('guest.pages.projects.index');
})->name('guest.pages.projects.index');


Route::get('/cvitae', function(){
    return view('guest.pages.cvitae.index');
})->name('guest.pages.cvitae.index');

Route::get('/bio', function(){
    return view('guest.pages.bio.index');
})->name('guest.pages.bio.index');
 