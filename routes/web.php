<?php
// use Symfony\Component\Routing\Route;
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
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'AdminController@getIndex')->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {


        Route::get('/approval', 'AdminController@approval')->name('approval');

        Route::middleware(['admin'])->group(function () {
            Route::get('/users', 'UserController@index')->name('admin.users.index');
            Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
        });

        Route::middleware(['approved'])->group(function () {
            Route::get('', 'AdminController@getIndex')->name('admin');      
            Route::get('/change-password', 'AdminController@getchangePassword')->name('getChangePassword'); 
            Route::post('/changePassword','AdminController@changePassword')->name('changePassword');
            
            Route::resource('category', 'CategoryController');
            Route::resource('product', 'ProductController');
            Route::resource('cart', 'CartController');
            Route::resource('slide', 'SlideController');

            Route::get('orders', 'OrderController@index')->name('order.index');
            Route::get('order/{id}', 'OrderController@getDetail')->name('order.detail');
        });
    });
});

Route::get('', 'PageController@getIndex')->name('trang-chu');
Route::get('cua-hang/{id}', 'PageController@getShop')->name('cua-hang');
Route::get('san-pham/{id}', 'PageController@getProduct')->name('san-pham');
Route::get('gio-hang', 'PageController@getCart')->name('gio-hang');

Route::get('thanh-toan', 'PageController@getCheckout')->name('thanh-toan');
Route::post('thanh-toan', 'CartController@postComplete')->name('complete');

Route::get('gioi-thieu', 'PageController@getAbout')->name('gioi-thieu');

Route::get('lien-he', 'PageController@getContact')->name('lien-he');
Route::post('lien-he', 'PageController@postContact')->name('contact.post');

Route::get('complete', 'PageController@getComplete')->name('complete');


Route::group(['prefix' => 'cart'], function () {
    Route::get('add/{id}', 'CartController@getAddCart')->name('addcart');
    Route::get('remove/{id}', 'CartController@getRemoveCart')->name('removecart');
    Route::get('update', 'CartController@getUpdateCart')->name('updatecart');
});
