<?php


Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::post('login', 'AuthController@login')->name('apilogin');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});



    Route::get('projects', 'ProjectController@index');
    Route::get('projects/{project}', 'ProjectController@show');


    Route::apiResource('questions', 'QuestionController');


    Route::apiResource('questions', 'QuestionController');


    Route::apiResource('surveys', 'SurveyController');

    Route::apiResource('categories', 'CategoryController');

