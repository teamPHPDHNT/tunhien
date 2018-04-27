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
		Route::get('danhsach','MenuController@getDanhSach')->name('admin.menu.danhsach');

		Route::get('sua/{id}','MenuController@getSua')->name('admin.menu.edit');
		Route::post('sua/{id}','MenuController@postSua')->name('admin.menu.update');
		
		Route::get('them','MenuController@getThem');
		Route::post('them','MenuController@postThem');

		Route::get('xoa/{id}','MenuController@getXoa')->name('admin.menu.delete');
	});

	Route::group(['prefix'=>'slide'],function(){
		
		Route::get('danhsach','SlideController@getDanhsach')->name('admin.slide.danhsach');
		
		Route::get('sua/{id}','SlideController@getSua')->name('admin.slide.edit');
		Route::post('sua/{id}','SlideController@postSua')->name('admin.slide.update');
		
		Route::get('them','SlideController@getThem');
		Route::post('them','SlideController@postThem');

		Route::get('xoa/{id}','SlideController@getXoa')->name('admin.slide.delete');
	});

	Route::group(['prefix'=>'baiviet'],function(){
		
		Route::get('danhsach','BaiVietController@getDanhsach')->name('admin.baiviet.danhsach');
		
		Route::get('sua/{id}','BaiVietController@getSua')->name('admin.baiviet.edit');
		Route::post('sua/{id}','BaiVietController@postSua')->name('admin.baiviet.update');
		
		Route::get('them','BaiVietController@getThem');
		Route::post('them','BaiVietController@postThem');

		Route::get('xoa/{id}','BaiVietController@getXoa')->name('admin.baiviet.delete');
	});

	Route::group(['prefix'=>'sanpham'],function(){
		
		Route::get('danhsach','SanPhamController@getDanhsach')->name('admin.sanpham.danhsach');
		
		Route::get('sua/{id}','SanPhamController@getSua')->name('admin.sanpham.edit');
		Route::post('sua/{id}','SanPhamController@postSua')->name('admin.sanpham.update');
		
		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@postThem');

		Route::get('xoa/{id}','SanPhamController@getXoa')->name('admin.sanpham.delete');
	});

	Route::group(['prefix'=>'loithe'],function(){
		
		Route::get('danhsach','LoiTheController@getDanhsach')->name('admin.loithe.danhsach');
		
		Route::get('sua/{id}','LoiTheController@getSua')->name('admin.loithe.edit');
		Route::post('sua/{id}','LoiTheController@postSua')->name('admin.loithe.update');
		
		Route::get('them','LoiTheController@getThem');
		Route::post('them','LoiTheController@postThem');

		Route::get('xoa/{id}','LoiTheController@getXoa')->name('admin.loithe.delete');
	});

	Route::group(['prefix'=>'thongke'],function(){
		
		Route::get('danhsach','ThongKeController@getDanhsach')->name('admin.thongke.danhsach');
		
		Route::get('sua/{id}','ThongKeController@getSua')->name('admin.thongke.edit');
		Route::post('sua/{id}','ThongKeController@postSua')->name('admin.thongke.update');
		
		Route::get('them','ThongKeController@getThem');
		Route::post('them','ThongKeController@postThem');

		Route::get('xoa/{id}','ThongKeController@getXoa')->name('admin.thongke.delete');
	});
});

