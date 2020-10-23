<?php

Route::group(['namespace' => 'Provider'], function() {
    Route::get('/', 'HomeController@index')->name('provider.home');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('provider.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('provider.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('provider.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('provider.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('provider.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('provider.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('provider.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('provider.verification.notice');
    Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('provider.verification.verify');

    //Company
    Route::get('company', 'ProviderController@showCompanies')->name('provider.company');
    
});



