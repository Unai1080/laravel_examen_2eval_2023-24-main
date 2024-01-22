<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IkasleController;
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
    return view('enunciado');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ikasleak',[IkasleController::class, 'ikasleTxiki'] );

Route::get('/matrikulatu',[IkasleController::class, 'matrikulatu'] );

Route::get('/ikasleAukeratu/{id}',[IkasleController::class, 'cicloAukeratu'] );

Route::post('/cicloanGehitu',[IkasleController::class, 'cicloanGehitu'] );

Route::get('/enpresa',[IkasleController::class,'enpresaBista']);

Route::get('/enpresaBilatu/{id}',[IkasleController::class,'enpresaBilatu']);

Route::post('/enpresaEsleitu',[IkasleController::class,'enpresaEsleitu']);


require __DIR__.'/auth.php';

