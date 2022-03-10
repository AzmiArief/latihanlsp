<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function(){ return view ('auth/login'); })->name('login');


Route::get('/login', function () { return view('auth/login'); })->name('login2');

Route::get('/register', function () { return view('auth/register'); })->name('register');

Route::post('/register', function () { return view('auth/register'); })->name('register');

Route::post('/login', [AuthController::class, "login"])->name('loginProses');

Route::get('/dashboard', function () { return view('isidashboard'); })->name('dashboard');

//tarif
Route::get('/tarif', [TarifController::class, 'index'])->name('tarif');

Route::get('/addtarif', function(){ return view ('addtarif'); })->name('addtarif');

Route::post('/savetarif', [TarifController::class, "store"])->name('savetarif');

Route::get('/edittarif/{id}', [TarifController::class, "edit"])->name('edittarif');

Route::get('/deletetarif/{id}', [TarifController::class, "delete"])->name('deletetarif');

Route::post('/updatetarif/{id}', [TarifController::class, "update"])->name('updatetarif');

//Nilai
Route::get('/nilai', [NilaiController::class, "index"])->name('nilai');
Route::get('/addjumlah', function(){ return view ('addjumlahnilai'); })->name('addjumlah');
Route::post('/addnilai', [NilaiController::class, "show" ])->name('addnilai');