<?php

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
//     return view('main0172');
// });
Route::get('/','App\Http\Controllers\PraktikumController@guru')->name('guru');
Route::get('/kamar','App\Http\Controllers\PraktikumController@kamar')->name('kamar');
Route::get('/siswa','App\Http\Controllers\PraktikumController@siswa')->name('siswa');
Route::get('/user','App\Http\Controllers\PraktikumController@user')->name('user');
Route::get('/user/edit/{id}','App\Http\Controllers\PraktikumController@user_edit')->name('edit');
Route::post('/user/edit/update','App\Http\Controllers\PraktikumController@user_update')->name('update');
Route::post('/kamar/filter','App\Http\Controllers\PraktikumController@kamar_filter')->name('filter');
Route::post('/guru/filter','App\Http\Controllers\PraktikumController@guru_filter')->name('guru_filter');
Route::get('/siswa/tambah', function () {
    return view('tambah_siswa0172');
});
Route::post('/siswa/insert','App\Http\Controllers\PraktikumController@tambah_siswa')->name('insert_siswa');