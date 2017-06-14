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

        Route::post('login', 'ApiLoginController@login');
        Route::get('NotAuth','ApiLoginController@Fail');
        Route::post('register', 'ApiRegisterController@Register');
        Route::resource('courses', 'ApiCoursesController');
        Route::resource('teachers', 'ApiTeachersController');
        Route::get('Courses/search', 'ApiCoursesController@search');
        Route::get('Courses/ShowReviews/{course}', 'ApiCoursesController@ShowReviews');
        Route::get('Subscribe', 'ApiSocialController@subscribe');
        Route::get('Contact', 'ApiSocialController@contact');
        Route::resource('categorys', 'ApiCategorysController');
        Route::get('SearchTeacher', 'ApiTeachersController@search');
        Route::get('Index/', 'ApiIndexController@index');
        Route::resource('packs', 'ApiPacksController');
        Route::post('/configs','ApiConfigController@getconfigs');

});

Route::group([
    'prefix' => '/v1',
    'namespace' => 'Api\V1',
    'middleware' => ['apimid','throttle:30,1'],
    'as' => 'api.'],
    # User cant request a url more than 30 times in 60 seconds.
    function () {
        Route::get('Sections/{section}', 'ApiSectionsController@show');
        Route::post('favorite/{course}', 'ApiCoursesController@AddFave');
        Route::post('Reviews', 'ApiReviewsController@store');
        Route::delete('DelReviews/{review}', 'ApiReviewsController@destroy');
        Route::get('TeachersRate/{teacher}', 'ApiTeachersController@rate');
        Route::post('Courses/AddCourse/{course}', 'ApiCoursesController@AddCourse');
        Route::post('Packs/AddPack/{pack}', 'ApiPacksController@take');
        Route::post('UserChangePass', 'ApiUsersOperationController@ChangePass');
        Route::post('UserUploadPhoto', 'ApiUsersOperationController@UploadPhoto');
        Route::post('UsersChangeInfo', 'ApiUsersOperationController@ChangeInfo');
        Route::get('MyPack', 'ApiUsersOperationController@RetrieveMyPack');
        Route::get('MyCourses', 'ApiUsersOperationController@RetrieveCourses');
        Route::get('MyFavorite', 'ApiUsersOperationController@RetrieveBookmarks');
        Route::get('profile','ApiUsersOperationController@Profile');
        Route::post('AdjustCredit','ApiUsersOperationController@AdjustCredit');
    });
