<?php

namespace  App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });





//**Praktikum 2 Pertemuan3 */

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/experience', [ExperienceController::class, 'index']);

Route::get('kendaraan', [KendaraanController::class, 'index']);

Route::get('hobi', [HobiController::class, 'index']);
Route::get('keluarga', [KeluargaController::class, 'index']);
Route::get('mata-kuliah', [MatkulController::class, 'index']);