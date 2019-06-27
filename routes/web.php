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

        return view('modules.customers.index');
    })->name('customers.index');
    Route::get('create', function (){


    });
    Route::post('store', function (){

    });
    Route::get('show/{id}', function ($id) {

        return view('modules.customers.show', compact('id'));
    })->name('customers.show');

    Route::get('edit/{id}', function ($id) {

        return view('modules.customers.edit', compact('id'));
    })->name('customers.edit');

    Route::get('delete/{id}', function ($id) {

        return view('modules.customers.delete', compact('id'));
    })->name('customers.delete');


});
