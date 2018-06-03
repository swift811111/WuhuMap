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
//index
Route::get('/', function () {
    return view('map');
});
//activity
Route::get('/activity', function () {
    return view('activity');
});

// Route::post('/activity',[  //更新群組
//         'as' => 'activity.entry',
//         // 'uses' => 'UsersController@group_update'
//     ]);