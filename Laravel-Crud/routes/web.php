<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CountryController;
use App\Models\student;
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

Route::get('/', [StudentController::class, 'index']);

Route::get('create', [StudentController::class, 'create'])->name('create');
Route::post('store', [StudentController::class, 'store'])->name('store');

Route::get('edit/{student_id}', [StudentController::class, 'update'])->name('edit');

Route::post('edit-store', [StudentController::class, 'editStore'])->name('editStore');

Route::delete('delete', [StudentController::class, 'destroy'])->name('delete');
Route::delete('country', [CountryController::class, 'index'])->name('country');

