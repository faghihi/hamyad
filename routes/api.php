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

        Route::resource('login', 'ApiLoginController');
        Route::get('NotAuth','ApiLoginController@Fail');
        Route::resource('register', 'ApiRegisterController');
        Route::resource('courses', 'ApiCoursesController');
        Route::get('Courses/search', 'ApiCoursesController@search');
        Route::get('Courses/ShowReviews/{course}', 'ApiCoursesController@ShowReviews');
        Route::get('Subscribe', 'ApiSocialController@subscribe');
        Route::get('Contact', 'ApiSocialController@contact');
        Route::resource('categorys', 'ApiCategorysController');
        Route::resource('teachers', 'ApiTeachersController');
        Route::get('Index/', 'ApiIndexController@index');
        Route::resource('packs', 'ApiPacksController');
});

Route::group([
    'prefix' => '/v1',
    'namespace' => 'Api\V1',
    'middleware' => ['apimid','throttle:30,1'],
    'as' => 'api.'],
    # User cant request a url more than 30 times in 60 seconds.
    function () {
        Route::get('Sections/{section}', 'ApiSectionsController@show');
        Route::get('favorite/{section}', 'ApiSectionsController@favorite');
        Route::post('Reviews', 'ApiReviewsController@store');
        Route::delete('DelReviews/{review}', 'ApiReviewsController@destroy');
        Route::get('TeachersRate/{teacher}', 'ApiTeachersController@rate');
        Route::get('Courses/AddCourse/{course}', 'ApiCoursesController@AddCourse');
        Route::post('Packs/AddPack/{pack}', 'ApiPacksController@take');
        Route::post('UserChangePass', 'ApiUsersOperationController@ChangePass');
        Route::post('UsersUploadPhoto', 'ApiUsersOperationController@UploadPhoto');
        Route::get('UsersChangeInfo', 'ApiUsersOperationController@ChangeInfo');
        Route::get('MyPack', 'ApiUsersOperationController@RetrieveMyPack');
        Route::get('MyCourse', 'ApiUsersOperationController@RetrieveCourses');
        Route::get('MyFavorite', 'ApiUsersOperationController@RetrieveFavorite');
    });
