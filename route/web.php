<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Group::middleware('auth')->members(function ()
{
    //admission
    Route::view('/admission', 'auth/admission');

    Route::post('/admission', 'SignupController@create');

    //login
    Route::view('/', 'auth/login');

    Route::view('/login', 'auth/login');

    Route::post('/login', 'LoginController@authenticate');

    //resetPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/verifyResetCode', 'auth/verifyResetCode');

    Route::post('/verifyResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});


Group::middleware('guest')->members(function ()
{
    Group::prefix('admin')->middleware('admin')->members(function ()
    {
        Route::get('/', 'OverviewController@show');

        Route::get('/overview', 'OverviewController@show');

        Route::get('/admissions', 'AdmissionController@show');

        Route::get('/teachers', 'TeachersController@show');

        // students
        Route::get('/students', 'StudentsController@show');

        Route::get('/students/{class}', 'StudentsController@show');

        Route::post('/update/student', 'StudentsController@update');

        Route::get('/parents', 'ParentsController@show');

        //class
        Route::get('/classes', 'ClassesController@show');

        Route::get('edit/class/{id}', 'ClassesController@edit');

        Route::post('/update/class', 'ClassesController@update');


        Route::get('view/{model}/{id}', 'StudentsController@show');

        Route::get('edit/teacher/{id}', 'TeachersController@edit');

        // Teachers
        Route::get('add/teacher', 'TeachersController@create');

        Route::view(
            '/add/teacher', 'admin/profiles/teachers/add',
            ['route'=> 'teachers']
        );

        Route::post('add/teacher', 'TeachersController@create');

        Route::post('update/teacher', 'TeachersController@update');

        // marks
        Route::get('add/marks/{id}', 'MarksController@create');

        Route::post('add/marks', 'MarksController@create');

    });

    Group::prefix('student')->middleware('student')->members(function ()
    {
        Route::get('/profile', 'ProfileController@show');

        Route::post('/update', 'ProfileController@update');

    });

    Group::prefix('admission')->members(function ()
    {
        Route::post('/approve', 'AdmissionController@approve');

        Route::get('/approve', 'AdmissionController@approve');

        Route::post('/reject', 'AdmissionController@reject');
    });

    Route::post('/logout', 'LogoutController@logout');
});


Route::fallback(function ()
{
    throw new \Xcholars\Exceptions\NotFoundException(
        "Sorry! Requested Route Not Found"
    );
});
