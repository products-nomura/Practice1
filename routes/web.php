<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Practice1Controller;

Route::get('/goodslist', [Practice1Controller::class, 'glist']); //商品データ一覧
Route::get('/goodsregist', [Practice1Controller::class, 'gregist']); //商品データ新規登録
Route::get('/goodsedit', [Practice1Controller::class, 'gedit']); //商品データ編集
Route::get('/stocklist', [Practice1Controller::class, 'slist']); //在庫データ一覧
Route::get('/stockregist', [Practice1Controller::class, 'sregist']); //在庫データ新規登録
Route::get('/stockedit', [Practice1Controller::class, 'sedit']); //在庫データ編集
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
