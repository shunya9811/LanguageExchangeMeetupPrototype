<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;

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

/*Route::get('/', function () {
    return view('index');
});
*/
Route::get('/', [ClassController::class, 'showHome']);

Route::get('/users', [ClassController::class, 'showUsers']);

Route::get('/meetup', [ClassController::class, 'showMeetup']);