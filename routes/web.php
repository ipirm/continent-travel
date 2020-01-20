<?php

Route::group(['middleware'=>'locale'],function() {
    Route::get('/con', 'PageController@home');
    Route::get('/contact', 'PageController@contact');
    Route::get('/','TitleController@index');
    Route::post('/','TitleController@mail');
    Route::get('/tours/','TitleController@tours');
    Route::get('/tour/{slug}','TitleController@item');
    Route::get('/about/','TitleController@about');
    Route::get('/contact/','TitleController@contact');
    Route::get('/service/{slug}','TitleController@service');
    Route::get('/services/{slug}','TitleController@ticket');
    Route::post('/contact','TitleController@mail_contact');
    Route::post('/tours','TitleController@search');
    Route::get('/search','TitleController@search');
    Route::get('/changelanguage/{lang}', 'TitleController@changeLang');
});

