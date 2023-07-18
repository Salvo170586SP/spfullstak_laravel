<?php

use App\Http\Controllers\BiograpyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Biograpy;
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

require __DIR__ . '/auth.php';


/* ADMIN */
Route::middleware('auth')->prefix('dashboard')->name('admin.')->group(function () {
    Route::resource('/biograpies', BiograpyController::class);
    Route::resource('/projects', ProjectController::class);
    Route::post('/projects/updatePosition/{project}',  [ProjectController::class, 'updatePosition'])->name('projects.updatePosition');
});


/* GUEST */
Route::get('/', [HomeController::class, 'index'])->name('guest.home');

Route::get('/projects', function () {
    $projects = Project::orderBy('position', 'ASC')->get();
    return view('guest.pages.projects.index', compact('projects'));
})->name('guest.pages.projects.index');


Route::get('/cvitae', function () {
    return view('guest.pages.cvitae.index');
})->name('guest.pages.cvitae.index');

Route::get('/bio', function () {
    $biograpies = Biograpy::all();
    return view('guest.pages.bio.index', compact('biograpies'));
})->name('guest.pages.bio.index');

Route::get('/naturando', function () {
    return view('guest.pages.naturando.index');
})->name('guest.pages.naturando.index');

Route::get('/dev', function () {
    return view('guest.pages.dev.index');
})->name('guest.pages.dev.index');
