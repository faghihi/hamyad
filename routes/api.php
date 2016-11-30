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
    Route::resource('sections', 'ApiSectionsController');
    Route::resource('teachers', 'ApiTeachersController');
    Route::resource('discounts', 'ApiDiscountsController');
    Route::resource('providers', 'ApiProvidersController');
    Route::get('favorite/{section}', 'ApiSectionsController@favorite');
});

Route::group([
    'prefix' => '/v1',
    'namespace' => 'Api\V1',
    'middleware' => ['throttle:30,1'],
    'as' => 'api.'],
    # User cant request a url more than 30 times in 60 seconds.
    function () {
        Route::resource('courses', 'ApiCoursesController');
        Route::get('Courses/search', 'ApiCoursesController@search');
        Route::get('Courses/ShowReviews/{course}', 'ApiCoursesController@ShowReviews');
        Route::get('Courses/AddCourse/{course}', 'ApiCoursesController@AddCourse');
        Route::get('Index/', 'ApiIndexController@index');
        Route::get('Packs/AddPack/{pack}', 'ApiPacksController@take');
        Route::resource('packs', 'ApiPacksController');

        Route::get('Reviews', 'ApiReviewsController@store');
        Route::get('DelReviews/{review}', 'ApiReviewsController@destroy');


        Route::get('Sections/{section}', 'ApiSectionsController@show');
        Route::get('Subscribe', 'ApiSocialController@subscribe');
        Route::get('Contact', 'ApiSocialController@contact');

        Route::get('Teachers', 'ApiTeachersController@index');
        Route::get('Teachers/{teacher}', 'ApiTeachersController@show');
        Route::get('TeachersRate/{teacher}', 'ApiTeachersController@rate');

        Route::get('UsersOperation', 'ApiUsersOperationController@ChangePass');
        Route::post('UsersUploadPhoto', 'ApiUsersOperationController@UploadPhoto');
        Route::get('UsersChangeInfo', 'ApiUsersOperationController@ChangeInfo');
    });
