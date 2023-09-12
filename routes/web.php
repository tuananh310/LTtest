<?php

use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TestController::class, 'index'])->name('test.index');
Route::get('/detail', [TestController::class, 'detail'])->name('test.detail');
Route::get('/getStaff', [TestController::class, 'getStaff'])->name('test.getStaff');
Route::post('/update', [TestController::class, 'update'])->name('test.update');
Route::post('/updateTime', [TestController::class, 'updateTime'])->name('test.updateTime');
