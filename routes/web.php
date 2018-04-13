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
// Route::get('/admins', function () {
//     return view('admin');
// });
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'menu'],function(){
		// admin/menu/danhsach
		Route::get('danhsach','MenuController@getDanhSach');
		// admin/menu/sua
		Route::get('sua','MenuController@getSua');
		// admin/menu/them
		Route::get('them','MenuController@getThem');
		Route::post('them','MenuController@postThem');
	});

	Route::group(['prefix'=>'slide'],function(){
		// admin/slide/danhsach
		Route::get('danhsach','SlideController@getDanhsach');
		// admin/slide/sua
		Route::get('sua','SlideController@getSua');
		// admin/slide/them
		Route::get('them','SlideController@getThem');
	});

	Route::group(['prefix'=>'baiviet'],function(){
		// admin/baiviet/danhsach
		Route::get('danhsach','BaiVietController@getDanhsach');
		// admin/baiviet/sua
		Route::get('sua','BaiVietController@getSua');
		// admin/baiviet/them
		Route::get('them','BaiVietController@getThem');
	});

	Route::group(['prefix'=>'sanpham'],function(){
		// admin/sanpham/danhsach
		Route::get('danhsach','SanPhamController@getDanhsach');
		// admin/sanpham/sua
		Route::get('sua','SanPhamController@getSua');
		// admin/sanpham/them
		Route::get('them','SanPhamController@getThem');
	});

	Route::group(['prefix'=>'loithe'],function(){
		// admin/loithe/danhsach
		Route::get('danhsach','LoiTheController@getDanhsach');
		// admin/loithe/sua
		Route::get('sua','LoiTheController@getSua');
		// admin/loithe/them
		Route::get('them','LoiTheController@getThem');
	});

	Route::group(['prefix'=>'thongke'],function(){
		// admin/thongke/danhsach
		Route::get('danhsach','ThongKeController@getDanhsach');
		// admin/thongke/sua
		Route::get('sua','ThongKeController@getSua');
		// admin/thongke/them
		Route::get('them','ThongKeController@getThem');
	});
});

