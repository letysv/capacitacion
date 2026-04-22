<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [RegistroController::class, 'index'])->name('registros.index');
Route::post('/registros', [RegistroController::class, 'store'])->name('registros.store');
Route::get('/ayuntamientos/{sede_id}', [RegistroController::class, 'getAyuntamientos'])->name('get.ayuntamientos');
Route::get('/reporte', [RegistroController::class, 'reporte'])->name('registros.reporte');
Route::get('/exportar-excel', [RegistroController::class, 'exportarExcel'])->name('exportar.excel');