<?php

Route::get('login','Admin\LoginController@adminlogin')->name('admin.login.get');
Route::post('login','Admin\LoginController@login')->name('admin.login');
Route::get('admin-forgot-password','Admin\ForgotPasswordController@adminLinkRequestForm')->name('admin.forgot.password');
Route::post('admin-password-mail','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password-reset/{token}','Admin\ResetPasswordController@resetPassword')->name('admin.password.reset');
Route::post('admin-password-update','Admin\ResetPasswordController@reset')->name('admin.password.update');



Route::group(['middleware'=>'auth:admin'],function (){
    Route::get('dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::get('admin-logout','AdminController@logout')->name('admin.logout');
    Route::get('admin-register','AdminController@register')->name('admin.register');
    Route::post('admin-register','AdminController@adminRegister')->name('admin.register.post');

});