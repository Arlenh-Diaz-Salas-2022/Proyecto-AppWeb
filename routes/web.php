<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::resource('usuarios', 'App\Http\Controllers\UsurioController');
    Route::resource('psicologos', 'App\Http\Controllers\PsicologoController');
    Route::resource('citas', 'App\Http\Controllers\CitaController');
    Route::resource('historial', 'App\Http\Controllers\VistaController');
});
Route::get('contactanos', [ContactanosController::class,'__invoke'])->name('contactanos.index');
Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');
/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){

}); */

