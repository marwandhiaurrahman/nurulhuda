<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/login-admin', function () {
    return view('auth.loginAdmin');
});


Route::post('/dependent-dropdown', 'DependentDropdownController@store')
    ->name('dependent-dropdown.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/profile','Admin\UserController@profile')->name('profile');
    Route::patch('/updateprofile/{id}','Admin\UserController@profileupdate')->name('profileupdate');
    // Route::post('updateprofile/{id}', );


    Route::prefix('admin')->group(function () {
        Route::get('/', 'HomeController@adminHome')->name('admin.dashboard')->middleware('is_admin');
        Route::resource('roles', 'Admin\RoleController');
        Route::resource('users', 'Admin\UserController');
        Route::resource('siswa', 'Admin\SiswaController');
        Route::resource('tahun-ajaran', 'Admin\TahunAjaranController');
        Route::resource('jadwal-penerimaan', 'Admin\JadwalPenerimaanController');
        Route::resource('arsip', 'Admin\ArsipController');
        Route::resource('pegawai', 'Admin\PegawaiController');
    });
});
