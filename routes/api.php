<?php


Route::group(['prefix'=>'auth'], function ($router) {

    Route::post('login', 'AuthController@login')->name('apilogin');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});



   


    Route::apiResource('surveys', 'Api\SurveyController');

    // Route::apiResource('categories', 'CategoryController');
    // Route::get('projects', 'ProjectController@index');
    // Route::get('projects/{project}', 'ProjectController@show');
    // Route::apiResource('towns', 'TownController');
    // Route::apiResource('questions', 'QuestionController');