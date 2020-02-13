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
Route::get('send-mail','MailSend@mailsend');
Route::get('/calendar','PagesController@calendar');
Route::get('/calendar2','PagesController@calendar2');
Route::get('/calendar3','PagesController@calendar3');
Route::get('/calendar4','PagesController@calendar4');
Route::get('/calendar5','PagesController@calendar5');
Route::get('/calendar6','PagesController@calendar6');
Route::get('/','PagesController@index');
Route::get('/contact','PagesController@contact');
Route::get('/about','PagesController@about');
Route::get('/rooms_classroom','PagesController@rooms_classroom');
Route::get('/rooms_examhall','PagesController@rooms_examhall');
Route::get('/rooms','PagesController@rooms');
Route::get('/rooms_lecture','PagesController@rooms_lecture');
Route::get('/reg_C1','ReservationsController@reg_C1');
Route::get('/reg_C2','ReservationsController@reg_C2');
Route::get('/reg_C3','ReservationsController@reg_C3');
Route::get('/reg_C4','ReservationsController@reg_C4');
Route::get('/reg_C5','ReservationsController@reg_C5');
Route::get('/reg_C6','ReservationsController@reg_C6');
Route::get('/contact','ContactFormController@contact');

Route::post('Class1/createC1','ReservationsController@createC1')->name("Class1.createC1");
Route::post('Class2/createC2','ReservationsController@createC2')->name("Class2.createC2");
Route::post('Class3/createC3','ReservationsController@createC3')->name("Class3.createC3");
Route::post('Class4/createC4','ReservationsController@createC4')->name("Class4.createC4");
Route::post('Class5/createC5','ReservationsController@createC5')->name("Class5.createC5");
Route::post('Class6/createC6','ReservationsController@createC6')->name("Class6.createC6");
Route::post('/contact/store','ContactFormController@store')->name("contact.store");
//posting:front end form class/function it uses, Controller you get the function from@posting function --> name(the function as it is named in the front end form page)