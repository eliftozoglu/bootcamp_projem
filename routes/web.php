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

Route::get('/', 'HomeController@homepage')->name('home-page');

//Route::get('/newlogin', 'LoginController@LoginView');
//Route::post('login#', 'LoginController@login')->name('login');
//Route::get('/new-forgot-password', 'LoginController@ForgotPassword');
//Route::get('/newregister.html', 'RegisterController@RegisterView');
//Route::post('/register#', 'RegisterController@Register')->name('register');
//Route::get('/products', 'ProductController@productlist');


Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/kayit','HomeController@createView');
Route::post('/kaydet','HomeController@create');
Route::get('/index', 'HomeController@list')->name('index');
Route::get('/sil/{id}', 'HomeController@delete')->where(array('id'=>'[0-9]+')); // sil/aa yapınca not foun yazar sayı dışındakiler için çalışmasını engelliyor
Route::post('/guncelle/{id}', 'HomeController@update');
Route::get('/guncelle/{id}','HomeController@updateView')->where(array('id'=>'[0-9]+'));
Route::get('/user-import', 'ExcelUploadController@UserImportView')->name('user.upload');
Route::post('/user-import-post', 'ExcelUploadController@userImport')->name('user.import');
Route::get('/indir','ExcelDownloadController@userDownload')->name('user.download');
//Route::get('/product.html', 'ProductController@ProductList')->name('product-list');

//Route::get('/shop', 'ProductController@ProductList')->name('product-list');
Route::get('/shop/templates', 'ProductController@PresentationsList')->name('presentation-front-view');
Route::get('/shop/reports', 'ProductController@ReportsList')->name('report-front-view');
Route::get('/shop/emails', 'ProductController@EmailsList')->name('email-front-view');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/pricing', 'ProductController@pricing')->name('pricing');
Route::get('/add-product','ProductController@addProductView')->name('product.add');
Route::post('/save-product', 'ProductController@productCreate')->name('product.create');

//presentation ekleme
Route::get('/add-presentation', 'ProductController@addPresentationView')->name('presentation-add');
Route::post('/save-presentation', 'ProductController@addPresentation')->name('presentation-create');
//report ekleme
Route::get('/add-report', 'ProductController@addReportView')->name('report-add');
Route::post('/save-report', 'ProductController@addReport')->name('report-create');
//email ekleme


//ürünleri listeleme
Route::get('/index-presentations', 'ProductController@indexPresentations')->name('list.presentations');
Route::get('/index-reports', 'ProductController@indexReports')->name('list.reports');
Route::get('/index-emails', 'ProductController@indexEmails')->name('list.emails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-report-template', 'UploadController@uploadTemplate');
Route::post('/save-report-template', 'UploadController@uploadFile')->name('add-template');

//single product page
Route::get('/presentation-detail-{id}', 'ProductController@SinglePagePresentation')->name('single.page.presentation');
Route::get('/report-detail-{id}', 'ProductController@SinglePageReport')->name('single.page-report');
