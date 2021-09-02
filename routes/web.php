<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\storemailController;
use App\Models\storemail;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
})->name('dashboard');


Route::post('storemail',[storemailController::class,'store'])->name('storemail');



Route::middleware(['auth:sanctum'])->get('/admin', function () {

    $data = storemail::orderBy('id','desc')->get();
    return view('admin.index',compact('data'));
})->name('admin');
