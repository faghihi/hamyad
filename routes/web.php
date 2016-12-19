<?php

// Authentication Routes...

$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');

$this->post('login', 'Auth\LoginController@login')->name('auth.login');

$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');



// Registration Routes...

$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('auth.register');

$this->post('register', 'Auth\RegisterController@register')->name('auth.register');



// Password Reset Routes...

$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');

$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');

$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auth.password.email');

$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');



// Index Route
Route::get('/','IndexController@index');

#Main URL's
Route::resource('categories', 'CategoryController');
Route::resource('packs', 'PackController');
Route::resource('courses', 'CoursesController');
Route::resource('sections','SectionsController');


Route::get('/instructor/Search','TeachersController@Search');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('roles', 'RolesController');

    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

    Route::resource('users', 'UsersController');

    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    Route::resource('user_actions', 'UserActionsController');

    Route::resource('admins', 'AdminsController');

    Route::post('admins_mass_destroy', ['uses' => 'AdminsController@massDestroy', 'as' => 'admins.mass_destroy']);

    Route::post('courses_mass_destroy', ['uses' => 'CoursesController@massDestroy', 'as' => 'courses.mass_destroy']);

    Route::resource('reviews', 'ReviewsController');

    Route::post('reviews_mass_destroy', ['uses' => 'ReviewsController@massDestroy', 'as' => 'reviews.mass_destroy']);

    Route::resource('tags', 'TagsController');

    Route::post('tags_mass_destroy', ['uses' => 'TagsController@massDestroy', 'as' => 'tags.mass_destroy']);
    Route::get('mycourses','UsersOperation@RetrieveMyCourses');
    Route::get('mypacks','UsersOperation@RetrieveMyPacks');
    Route::get('myfave','UsersOperation@RetrieveFave');
});
Auth::routes();

#test Routes
Route::get('Search','CoursesController@Search');

Route::get('coursereview/{course}','CoursesController@ShowReviews');
#Email Verification Route
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');


Auth::routes();


Route::get('/contactUs', function (){
    return view('public-pages.contact');
});
Route::get('/aboutUs', function (){
    return view('public-pages.about');
});
Route::get('/FAQ', function (){
    return view('public-pages.faq');
});

//Teachers Routes

Route::get('/instructor','TeachersController@index');
Route::get('/instructor/{teacher}','TeachersController@show');

//courses Routes

Route::get('CourseReview/{course}','CoursesController@PassReviews');

Route::get('/learn', function (){
    return view('courses.course-learning');
});
Route::get('/conf', function (){
    return view('courses.course-confirmation');
});
Route::get('/cancel', function (){
    return view('courses.course-cancel');
});
Route::get('/course-detail', function (){
    return view('courses.course-detail');
});
Route::get('/attend', function (){
    return view('courses.course-purchase');
});


Route::get('/FAQ', function (){
    return view('public-pages.faq');
});

Route::get('SectionReview/{section}','SectionsController@ShowReviews');


Route::get('/ajax-register', function (){
    return view('ajax-login-modal-register');
});
Route::get('/new-register', function (){
    return view('signin-signUp.register');
});
Route::get('/ajax-login', function (){
    return view('ajax-login-modal-login');
});
Route::get('/ajax-forgot-password', function (){
    return view('ajax-login-modal-forgot-password');
});
Route::get('/limited', function (){
    return view('public-pages.video-access-fail');
});
Route::get('/cooperate', function (){
    return view('instructor.addInstructor');
});
Route::get('/packages', function (){
    return view('courses.packages');
});
Route::get('/profile', function (){
    return view('profile.user-profile');
});

Route::get('/Date',function(){
    $date1 = new DateTime("2007-03-24");
    $date2 = new DateTime("2007-03-30");
    $interval = $date1->diff($date2);
    if($interval->days < 2)
        echo 1;
    else
        echo 0;
});
Route::get('/AlertUsers','PackController@ExtendAlertUsers');

Route::get('testmail','EmailController@test');

Route::get('testcon',function(){
   echo Config::get('app.timezone');
});

Route::get('uploadimage',function (){
    return view('uploadform');
});
Route::post('/imageupload','UsersOperation@UploadPhoto');
Route::post('/SubmitInstructor','UsersOperation@Cooperate');
Route::post('/SaveContact','SocialController@Contact');
Route::post('/Subscribe','SocialController@Subscribe');
Route::post('/CourseReview/{course}','ReviewsController@Store');
Route::get('/Subscribe','SocialController@Subscribe');
Route::get('/Courses/Search','CoursesController@Search');
