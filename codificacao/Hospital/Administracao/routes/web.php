<?php

use App\Http\Controllers\AtendenteController;
use App\Http\Controllers\EnfermeiroController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ProfileController;
use App\Models\Enfermeiro;
use App\Models\Medico;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');






Route::middleware('auth')->group(function () {
    Route::resource('medicos', MedicoController::class);
    Route::resource('enfermeiros', EnfermeiroController::class);
    Route::resource('atendentes', AtendenteController::class);
});

require __DIR__.'/auth.php';
