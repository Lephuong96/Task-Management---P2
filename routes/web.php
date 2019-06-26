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

Route::prefix('customers')->group(function (){
    Route::get('index', function (){
        //Hiển thị danh sách khách hàng
        return view('modules.customers.index');
    })->name('customers.index');
    Route::get('create', function (){


    });
    Route::post('store', function (){
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });
    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    });

    Route::get('edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
        return view('modules.customers.edit');
    })->name('customers.edit');

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::get('delete', function () {
        // Xóa thông tin dữ liệu khách hàng
        return view('modules.customers.delete');
    })->name('customers.delete');

    Route::get('show1', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('modules.customers.show1');
    })->name('show1');
    Route::get('show2', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('modules.customers.show2');
    })->name('show2');
    Route::get('show3', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('modules.customers.show3');
    })->name('show3');
    Route::get('show4', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('modules.customers.show4');
    })->name('show4');
    Route::get('show5', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('modules.customers.show5');
    })->name('show5');


});
