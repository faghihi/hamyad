<?php
# example for api request
// http://localhost:8000/api/v1/users/1?api_token=1IcdzigOJQbwMgMGFoq4pmYyXaYWCCuJOfLslVp02P0ihKKxBm4ZsqRmI2B3

Route::group([
    'prefix' => '/v1',
    'namespace' => 'Api\V1',
    'middleware' => ['throttle:30,1'],
    'as' => 'api.'],
    # User cant request a url more than 30 times in 60 seconds.
    function () {
 
    # TODO API TOKEN
    # TODO Requests

    Route::resource('login', 'ApiLoginController');
    Route::resource('register', 'ApiRegisterController');
//    Route::resource('courses', 'ApiCoursesController');
    Route::resource('reviews', 'ApiReviewsController');
    Route::resource('roles', 'ApiRolesController');
    Route::resource('social', 'ApiSocialController');
    Route::resource('tags', 'ApiTagsController');
    Route::resource('useractions', 'ApiUserActionsController');
    Route::resource('users', 'ApiUsersController');
    Route::resource('categorys', 'ApiCategorysController');
    Route::resource('packs', 'ApiPacksController');
    Route::resource('sections', 'ApiSectionsController');
    Route::resource('teachers', 'ApiTeachersController');
    Route::resource('discounts', 'ApiDiscountsController');
    Route::resource('providers', 'ApiProvidersController');
});

Route::group([
    'prefix' => '/v1',
    'namespace' => 'Api\V1',
    'middleware' => ['throttle:30,1'],
    'as' => 'api.'],
    # User cant request a url more than 30 times in 60 seconds.
    function () {
        Route::resource('courses', 'ApiCoursesController');
    });
