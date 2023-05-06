<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DropdownController;

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

Route::get('dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-constituencies', [DropdownController::class, 'fetchConstituency']);
Route::post('api/fetch-wards', [DropdownController::class, 'fetchWard']);
