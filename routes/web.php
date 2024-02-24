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
    return redirect('/login');
});

//guru
Route::get('guru', 'gurucontroller@index')->name('guru.index');
Route::get('guru/create', 'gurucontroller@create')->name('guru.create');
Route::post('guru', 'gurucontroller@store')->name('guru.store');
Route::get('guru/{id}/edit', 'gurucontroller@edit')->name('guru.edit');
Route::put('guru/{id}', 'gurucontroller@update')->name('guru.update');
Route::delete('guru/{id}', 'gurucontroller@destroy')->name('guru.destroy');

//jurusan
Route::get('jurusan', 'jurusancontroller@index')->name('jurusan.index');
Route::get('jurusan/create', 'jurusancontroller@create')->name('jurusan.create');
Route::post('jurusan', 'jurusancontroller@store')->name('jurusan.store');
Route::get('jurusan/{id}/edit', 'jurusancontroller@edit')->name('jurusan.edit');
Route::put('jurusan/{id}', 'jurusancontroller@update')->name('jurusan.update');
Route::delete('jurusan/{id}', 'jurusancontroller@destroy')->name('jurusan.destroy');

//mapel
Route::get('mapel', 'mapelcontroller@index')->name('mapel.index');
Route::get('mapel/create', 'mapelcontroller@create')->name('mapel.create');
Route::post('mapel', 'mapelcontroller@store')->name('mapel.store');
Route::get('mapel/{id}/edit', 'mapelcontroller@edit')->name('mapel.edit');
Route::put('mapel/{id}', 'mapelcontroller@update')->name('mapel.update');
Route::delete('mapel/{id}', 'mapelcontroller@destroy')->name('mapel.destroy');

//kelas
Route::get('kelas', 'kelascontroller@index')->name('kelas.index');
Route::get('kelas/create', 'kelascontroller@create')->name('kelas.create');
Route::post('kelas', 'kelascontroller@store')->name('kelas.store');
Route::get('kelas/{id}/edit', 'kelascontroller@edit')->name('kelas.edit');
Route::put('kelas/{id}', 'kelascontroller@update')->name('kelas.update');
Route::delete('kelas/{id}', 'kelascontroller@destroy')->name('kelas.destroy');

//siswa
Route::get('siswa', 'siswacontroller@index')->name('siswa.index');
Route::get('siswa/create', 'siswacontroller@create')->name('siswa.create');
Route::post('siswa', 'siswacontroller@store')->name('siswa.store');
Route::get('siswa/{id}/edit', 'siswacontroller@edit')->name('siswa.edit');
Route::put('siswa/{id}', 'siswacontroller@update')->name('siswa.update');
Route::delete('siswa/{id}', 'siswacontroller@destroy')->name('siswa.destroy');


//dashboard
Route::get('/dashboard', 'dashboardcontroller@index')->name('dashboard.index');
Route::get('/home', 'dashboardcontroller@index')->name('home');

//login
Route::get('/register','AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register','AuthController@postRegister')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login','AuthController@postLogin')->middleware('guest');;
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
//Auth::routes();

//Route Profile
Route::get('/profile','ProfileController@index')->middleware('auth')->name('profile.index');
Route::get('/profile/edit/{id}','ProfileController@edit')->middleware('auth')->name('profile.edit');
Route::put('/profile/{id}','ProfileController@update')->middleware('auth')->name('profile.update');
Route::get('/profile2','ProfileController@indexKelas')->middleware('auth')->name('profile.index2');