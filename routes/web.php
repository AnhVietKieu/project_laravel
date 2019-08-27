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
/*
Route::get('/', function () {
    return view('cart');
});
Route::get('cart','welcome@cart');
Route::get('login','welcome@login');
Route::post('login','welcome@postlogin');
*/
Route::get('/','welcome@index');

Route::get('index.html','welcome@index');

Route::get('contact.html','welcome@contact');

Route::get('login.html','welcome@login');
Route::post('login.html','welcome@postlogin');

Route::post('register.html','welcome@postregister');
Route::get('register.html','welcome@register');

Route::get('product-book','product@product_book');

Route::get('product-story','product@product_story');

Route::get('search','welcome@search');

Route::get('logout.html','welcome@logout');

Route::get('/product-detail/{name}','product@detail');

Route::get('/category/{name}','product@category');

Route::get('giohang.html','shoppingcart@view');



Route::group(['prefix' =>'shoppingcart'],function(){
	Route::get('insert/{id}','shoppingcart@insert');
	Route::get('update-tang/{id}','shoppingcart@update_tang');
	Route::get('update-giam/{id}','shoppingcart@update_giam');
	Route::get('delete/{id}','shoppingcart@destroy');
	Route::get('thanhtoan','shoppingcart@thanhtoan');
});


Route::get('admin.html','quantri@login');
Route::post('admin.html','quantri@postlogin');

Route::get('logout_admin.html','quantri@logout_admin');


Route::prefix("admin")->middleware('Check')->group(function(){

	Route::get('view.html','quantri@view');

	Route::prefix("sach")->middleware('Check')->group(function(){

		Route::get('delete-sach/{id}','book@destroy');

		Route::get('update-sach/{id}','book@update');
		Route::post('update-sach/{id}','book@postupdate');

		Route::get('them-sach.html','book@create');
		Route::post('them-sach.html','book@postcreate');


	});

	Route::prefix("chude")->middleware('Check')->group(function(){
		Route::get('view-chu-de.html','category@view');

		Route::get('delete-chu-de/{id}','category@destroy');

		Route::get('update-chu-de/{id}','category@update');
		Route::post('update-chu-de/{id}','category@postupdate');

		Route::get('them-chu-de.html','category@create');
		Route::post('them-chu-de.html','category@postcreate');


	});
	Route::prefix("tacgia")->middleware('Check')->group(function(){
		Route::get('view-tac-gia.html','author@view');
		Route::get('delete-tac-gia/{id}','author@destroy');

		Route::get('update-tac-gia/{id}','author@update');
		Route::post('update-tac-gia/{id}','author@postupdate');

		Route::get('them-tac-gia.html','author@create');
		Route::post('them-tac-gia.html','author@postcreate');
	});
	Route::prefix("nhaxuatban")->middleware('Check')->group(function(){
		Route::get('view-nha-xuat-ban.html','publisher@view');

		Route::get('delete-nha-xuat-ban/{id}','publisher@destroy');

		Route::get('update-nha-xuat-ban/{id}','publisher@update');
		Route::post('update-nha-xuat-ban/{id}','publisher@postupdate');

		Route::get('them-nha-xuat-ban.html','publisher@create');
		Route::post('them-nha-xuat-ban.html','publisher@postcreate');
	});

	Route::prefix("taikhoan")->middleware('Check')->group(function(){
		Route::get('view-tai-khoan.html','account@view');

		Route::get('delete-tai-khoan/{id}','account@destroy');

		Route::get('update-tai-khoan/{id}','account@update');
		Route::post('update-tai-khoan/{id}','account@postupdate');

		Route::get('them-tai-khoan.html','account@create');
		Route::post('them-tai-khoan.html','account@postcreate');

	});
	Route::prefix("donhang")->middleware('Check')->group(function(){
		Route::get('view-don-hang.html','order@view');
	});


});
