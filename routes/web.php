<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//pemilik lahan
Route::get('/pemilik/login','PemiliklahanController@showloginpemilik')->name('pemiliklahan.loginview');
Route::post('/pemilik/login','PemiliklahanController@attemptlogin')->name('pemiliklahan.login');
Route::get('/pemilik/register','PemiliklahanController@ShowRegisterForm')->name('pemiliklahan.registerview');
Route::post('/pemilik/register','PemiliklahanController@register')->name('pemiliklahan.register');
Route::get('/coba',function(){
    return view('pemiliklahan.lahan.lahan');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/pemilik/dashboard', function () {
    return view('pemiliklahan.lahan.dashboard');
});

Route::get('/login', function () {
    return view('pemiliklahan.login');
});

Route::get('/index', function () {
    return view('index');
});
Route::group(['prefix'=>'pemilik','middleware'=> ['auth:web_pemiliks'] ],function(){

    //Route::patch('lahan/hapus/{lahan}','KendaraanController@hapus')->name('kendaraan.hapus');
    Route::resource('lahan', 'LahanController');    
    
});

