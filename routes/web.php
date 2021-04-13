<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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
Route::get('/',[MemberController::class,'list']);
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('update/{id}',[MemberController::class,'showdata']);
Route::post('update',[MemberController::class,'update']);
Route::delete('add',[MemberController::class,'deleteAll']);
Route::view('add','add');
Route::post('add' ,[MemberController::class,'addData']);




