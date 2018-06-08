<?php
//domain/products
//hiên thi danh sach san pham
Route::get('products','ProductController@index');
//goi den fom them san pham
Route::get('products/create','ProductController@create');
//goi den hàm them mới sản sp
Route::post('products','ProductController@store');
//goi den fom sưa sp
Route::get('products/{id}/edit','ProductController@edit');
//goi hàm sưa sp
Route::put('products/{id}','ProductController@update');
//Hien thi chi tiết san pham
Route::get('products/{id}','ProductController@show');
//hàm xóa sp
Route::delete('products/{id}','ProductController@destroy');
/*dung cai này de  thay cho ca cac cai trên theo
Route::resource('products','ProductController');*/
Route::get('',function(){
	return view('layouts.master');
});
Route::get('index',function(){
	return view('layouts.index');
});
Route::get('about',function(){
	return view('layouts.about');
});
