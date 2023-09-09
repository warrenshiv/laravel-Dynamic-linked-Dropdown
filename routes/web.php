<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\SubcountyController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DropdownController::class, 'index']);

// Route::get('county-dropdown', [CountyController::class, 'index']);

Route::get('getSubcounties/{county_id}', [DropdownController::class,'getSubcounties']);


// Route::get('get-wards/{subcounty}', 'WardController@getWards');
Route::get('get-wards/{subcountyId}', [DropdownController::class,'getWards']);