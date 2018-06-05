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
//activity relative-----------------------------
//前往活動資訊
Route::get('/activity', function () {
    return view('activity');
});

//stays relative-------------------------------
Route::get('/stays', function () {
    return view('stays');
});

// maps relative-------------------------------
Route::post('/maps',[  //根據類別顯示地圖
        'as' => 'maps.post',
        'uses' => 'MapsController@get_by_mapstype'
    ]);