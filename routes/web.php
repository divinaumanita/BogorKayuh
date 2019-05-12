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
Route::view('/', 'welcome');
Auth::routes();

// Route::get('/penyewaan', 'SewaController@index')->name('penyewaan');
// Route::get('/notifsewa', 'SewaController@show')->name('notifsewa');

Route::get('/notifikasisewa', 'SewaController@show')->name('notifikasisewa');
Route::get('/login/admin', 'Auth\LoginAdminController@showAdminLoginForm')->name('loginAdmin');
Route::get('/login/penyewa', 'Auth\LoginPenyewaController@showPenyewaLoginForm')->name('loginPenyewa');
Route::get('/register', 'Auth\RegisterController@showPenyewaRegisterForm')->name('register');
Route::get('/login', 'Auth\LoginController@showOptionForm')->name('login');
Route::get('/halamansewa/maunyewa', 'SewaController@showPenyewaanForm')->name('maunyewa');
Route::get('/profil', 'Auth\ProfilController@showProfil')->name('profil');
Route::get('/profil/edit', 'Auth\ProfilController@editProfil')->name('editprofil');
Route::get('/riwayatsewa', 'Auth\ProfilController@showProfil')->name('riwayatsewa');
Route::get('/notifikasisewa/batal', 'SewaController@cancel')->name('batalsewa');
Route::get('/riwayatsewa','SewaController@riwayat')->name('riwayatsewa');
Route::get('/editsepeda','SepedaController@index')->name('editsepeda');
// Route::get('/login/login1','Auth\Login1Controller@index')->name('login1');
//Route::get('/notifikasisewa','CountdownController@waktumaks')->name('notifikasisewa');

Route::post('/login/admin', 'Auth\LoginAdminController@adminLogin');
Route::post('/login/penyewa', 'Auth\LoginPenyewaController@penyewaLogin');
Route::post('/register', 'Auth\RegisterController@createPenyewa');
Route::post('/halamansewa/maunyewa', 'SewaController@createPenyewaan');
//Route::get('/profil/edit', 'Auth\ProfilController@editProfil')->();
Route::put('/profil/edit', 'Auth\ProfilController@updateProfil');
//Route::resource('halamansewa', 'SewaController');

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/konfirmasi','AdminController@index')->name('konfirmasi');
Route::get('/sepeda','SepedaController@index')->name('sepeda');
Route::post('/sepeda/store','SepedaController@store')->name('simpansepeda');
Route::get('/sepeda/hapus/{b}','SepedaController@delete')->name('hapussepeda');
Route::get('/riwayat','AdminController@riwayat')->name('riwayatadmin');
Route::get('/konfirmasi/lunas/{p}','AdminController@store')->name('lunas');

Route::view('/home', 'home')->middleware('auth');
Route::view('/home1', 'home1')->name('home1');

Route::get('/bams', 'SewaController@bams')->name('bams');