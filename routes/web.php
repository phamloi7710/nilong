<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('admin/login.html', 'Admin\LoginController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\LoginController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout','Admin\LoginController@getLogout')->name('logout');
Route::group(['prefix'=>'admin', 'middleware'=>'checkRoleAdmin'], function(){
	Route::get('uploads', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('uploads/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
	Route::get('image-management.html', 'Admin\IndexController@getFileManagement')->name('getFileManagement');
	Route::group(['prefix'=>'category'], function(){
		// Route::get('list', 'Admin\ProductController@getListCate')->name('getListCateAdmin');
		Route::get('list', function () {
    return view('admin.pages.product.cate.list');
});
		Route::match(['get', 'post'], '/grid_data', "Admin\ProductController@getListCate");
	});
});
