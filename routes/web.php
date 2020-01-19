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

// Front routes:

Route::get('index','LoginController@index')->name('index');
Route::get('about_us','LoginController@about_us')->name('about_us');

Route::prefix('archive')->group(function () {
    Route::get('/list','ArchiveController@list')->name('archive.list');
    Route::get('/yearlist/{title}','ArchiveController@year_list')->name('archive.yearlist');
    Route::get('/daytimes/{tityear}','ArchiveController@daytime_list')->name('archive.daytimes');
    Route::get('/show/{obj}','ArchiveController@show')->name('archive.show');
});

Route::get('poll','ArchiveController@poll')->name('poll');
Route::post('poll','ArchiveController@doPoll');
Route::get('see_rite','LoginController@see_rite')->name('see_rite');


// AdminLogin routes:
Route::prefix('Admin')->group(function () {
    ///////////////////////////////////////////////////////////////////////////////////////
    Route::get('/login','LoginController@login')->name('admin.login');
    Route::post('/dologin','LoginController@dologin')->name('admin.post.login');

    Route::get('/show','LoginController@show')->name('admin.show');
    ///////////////////////////////////////////////////////////////////////////////////////
    // Admin Archive management routes:
    Route::get('/archive_manage','LoginController@archive_manage')->name('archive.manage');

    Route::get('/upload','LoginController@upload')->name('archive.upload');
    Route::post('/upload','LoginController@doupload')->name('archive.doupload');

    Route::get('/download/{id}','LoginController@getLink')->name('archive.download');

    Route::get('/edit/{id}','LoginController@edit')->name('archive.edit');
    Route::post('/doedit/{id}','LoginController@doedit')->name('archive.doedit');

    Route::get('/delete/{id}','LoginController@delete')->name('archive.delete');
    ///////////////////////////////////////////////////////////////////////////////////////
    // Admin polls management routes:
    Route::get('/add_poll','LoginController@add_poll')->name('add_poll');
    Route::any('/do_add_poll/{id}','LoginController@do_add_poll')->name('do_add_poll');
    Route::any('/ignore_poll/{id}','LoginController@ignore_poll')->name('ignore_poll');
    Route::any('/end_poll/{id}','LoginController@end_poll')->name('end_poll');
    ///////////////////////////////////////////////////////////////////////////////////////
    // Admin rites routes:
    Route::get('/add_rite','LoginController@add_rite')->name('add_rite');
    Route::post('/add_rite','LoginController@do_add_rite')->name('do_add_rite');


});
