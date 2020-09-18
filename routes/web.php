<?php

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
    return view('home-page');
});

//Route::get('/newlogin', 'LoginController@LoginView');
//Route::post('login#', 'LoginController@login')->name('login');
//Route::get('/new-forgot-password', 'LoginController@ForgotPassword');
//Route::get('/newregister.html', 'RegisterController@RegisterView');
//Route::post('/register#', 'RegisterController@Register')->name('register');
//Route::get('/products', 'ProductController@productlist');


Route::get('/admin', 'AdminController@index');
Route::get('/kayit','HomeController@createView');
Route::post('/kaydet','HomeController@create');
Route::get('/index', 'HomeController@list');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id'=>'[0-9]+')); // sil/aa yapınca not foun yazar sayı dışındakiler için çalışmasını engelliyor
Route::post('/guncelle/{id}', 'HomeController@update');
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id'=>'[0-9]+'));
Route::get('/user-import', 'ExcelUploadController@UserImportView')->name('user.upload');
Route::post('/user-import-post', 'ExcelUploadController@userImport')->name('user.import');
Route::get('/indir','ExcelDownloadController@userDownload')->name('user.download');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
