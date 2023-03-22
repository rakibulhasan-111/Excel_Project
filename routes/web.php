<?php

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
    return view('welcome');
});

Route::get('excel', function(){
    return view('excel');
});

Route::get('export-user', [\App\Http\Controllers\UserController::class, 'exportUser'])->name('export-user');

Route::post('import-user', [\App\Http\Controllers\UserController::class, 'importUser'])->name('import-user');