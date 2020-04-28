<?php

Route::get('/','PagesController@getHome');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');

Route::get('/messages','MessagesController@getmessage');

Route::post('/contact/submit','MessagesController@submit');
