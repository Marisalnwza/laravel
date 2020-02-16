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

Route::get('/create','StudentsController@index');

#route for get student data
Route::post('/create', 'StudentsController@create')->middleware('api');



#route for get list student
Route::get('/lists','StudentsController@lists');


Route::group(['middleware'=>'merge.id'],function(){


    #route for get student detail
    Route::get('/detail/{id}','StudentsController@detail');


    #route for update student
    Route::put('/update/{id}', 'StudentsController@update');

    #route for delete student
    Route::delete('/delete/{id}', 'StudentsController@delete');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


# route group with prefix
Route::group(['prefix' => 'students'], function () {

    Route::get('/lists', 'WebStudent@lists')->name('lists.student');


    Route::get('/create', function () {
        return view('students/create');
    });

    Route::post('/create', 'WebStudent@create')->name('create.student');
});

Route::get('push-notify','LineNotifyController@pushNotify');