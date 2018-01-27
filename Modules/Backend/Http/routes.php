<?php


Route::group(['middleware' => 'guest:admin', 'prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers'], function () {
    Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admin', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'BackendController@index')->name('admin.backend');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Password Reset Routes...
    Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
