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
    Route::get('company', 'ProviderController@showCompanies')->name('provider.scompany');
    Route::post('company', 'ProviderController@Companies')->name('provider.company');
    
    //Service
    Route::get('service', 'ProviderController@showSevices')->name('provider.sservice');
    Route::post('service', 'ProviderController@sevices')->name('provider.service');

    //appointment
    Route::get('appointment', 'ProviderController@showAppointment')->name('provider.sappointment');
    Route::post('appointment', 'ProviderController@appointment')->name('provider.appointment');

    //inbox
    Route::get('inbox', 'ProviderController@showInbox')->name('provider.sinbox');
    Route::post('inbox', 'ProviderController@inbox')->name('provider.inbox');

    //packages & Payouts
    Route::get('pacakage', 'ProviderController@showPacakage')->name('provider.spacakage');
    Route::post('pacakage', 'ProviderController@pacakage')->name('provider.pacakage');

    //notification
    Route::get('notification', 'ProviderController@showNotification')->name('provider.snotification');
    Route::post('notification', 'ProviderController@notification')->name('provider.notification');

    //account & Privacy
    Route::get('account', 'ProviderController@showAccount')->name('provider.saccount');
    Route::post('account', 'ProviderController@account')->name('provider.account');

    //Profile
    Route::get('profile', 'ProviderController@showProfile')->name('provider.sprofile');
    Route::post('profile', 'ProviderController@profile')->name('provider.profile');


});



