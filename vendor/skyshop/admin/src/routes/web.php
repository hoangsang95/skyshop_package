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

Route::group(['prefix' => 'admin'], function () {
    // Chuyên mục
    Route::group(['prefix' => 'cate'], function ()   {
       Route::get('list', 'Jteam\Admin\CateController@danhsach');
       
       Route::get('edit', 'Jteam\Admin\CateController@sua');
       
       Route::get('add', 'Jteam\Admin\CateController@them');
       Route::post('add', 'Jteam\Admin\CateController@postthem');
    });
    // Sản phẩm
	 Route::group(['prefix' => 'product'], function ()   {
       Route::get('list', 'Jteam\Admin\Admin_Product_Controller@admin_product_list');
       
       Route::get('edit{$id}', 'Jteam\Admin\Admin_Product_Controller@admin_product_edit');
	   
       Route::get('delete{$id}', 'Jteam\Admin\Admin_Product_Controller@admin_product_delete');
       
       Route::get('add', 'Jteam\Admin\Admin_Product_Controller@admin_product_add');
	   
       Route::post('add', 'Jteam\Admin\Admin_Product_Controller@admin_product_add_post');
    });
    
    // Slide
    Route::group(['prefix' => 'slide'], function ()   {
       Route::get('list', 'Jteam\Admin\SlideController@danhsach');
       
       Route::get('edit{id}', 'Jteam\Admin\SlideController@sua');
       Route::post('edit/{id}', 'Jteam\Admin\SlideController@postsua');
         Route::get('delete/{id}', 'Jteam\Admin\SlideController@xoa');
       Route::get('add', 'Jteam\Admin\SlideController@them');
       Route::post('add', 'Jteam\Admin\SlideController@postthem');
    });
    
   
    
 });