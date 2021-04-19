<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lang/{slug}', 'FrontendController@setLanguage');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


//Route::get('/this','PhotoController@photo')->name('photo');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/update', 'SettingController@update')->name('setting.update');

    /*
        |--------------------------------------------------------------------------
        | Backend Menu CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'home.', 'prefix' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('home');
        Route::get('create', 'HomeController@create')->name('create');
        Route::post('', 'HomeController@store')->name('store');
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'MenuController@index')->name('index');
        Route::get('/indexnp', 'MenuController@indexnp')->name('indexnp');
        Route::post('', 'MenuController@store')->name('store');
        Route::put('', 'MenuController@update')->name('update');
        Route::delete('{menu}', 'MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'MenuController@storeSubMenu')->name('store');
            Route::delete('{menu}/subMenu/{subMenu}', 'MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'MenuController@storeChildSubMenu')->name('store');
                Route::delete('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/subMenu/childsubMenuModal', 'MenuController@childsubMenuModal')->name('component.modal');
            });
        });
    });

    /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
        Route::get('', 'PageController@index')->name('index');
        Route::get('create', 'PageController@create')->name('create');
        Route::post('', 'PageController@store')->name('store');
        Route::get('{page}', 'PageController@show')->name('show');
        Route::get('{page}/edit', 'PageController@edit')->name('edit');
        Route::put('{page}', 'PageController@update')->name('update');
        Route::delete('{page}', 'PageController@destroy')->name('destroy');
    });

    /*
     |--------------------------------------------------------------------------
     | Image Controller
     |--------------------------------------------------------------------------
      */
    Route::group(['as' => 'photo.', 'prefix' => 'photo'], function () {
        Route::get('', 'PhotoController@index')->name('index');
        Route::get('create', 'PhotoController@create')->name('create');
        Route::post('', 'PhotoController@store')->name('store');
        Route::put('{photo}', 'PhotoController@update')->name('update');
        Route::get('{photo}/edit', 'PhotoController@edit')->name('edit');
        Route::delete('{photo}', 'PhotoController@delete')->name('destroy');
    });

    /*
     |--------------------------------------------------------------------------
     | Homepage Slider CRUD Routes
     |--------------------------------------------------------------------------
     */
    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
        Route::get('', 'SliderController@index')->name('index');
        Route::get('create', 'SliderController@create')->name('create');
        Route::post('', 'SliderController@store')->name('store');
        Route::put('{slider}', 'SliderController@update')->name('update');
        Route::get('{slider}/edit', 'SliderController@edit')->name('edit');
        Route::delete('{slider}', 'SliderController@destroy')->name('destroy');

    });

    /*
    |--------------------------------------------------------------------------
    | Event CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'event.', 'prefix' => 'event'], function () {
        Route::get('', 'EventController@index')->name('index');
        Route::get('create', 'EventController@create')->name('create');
        Route::post('', 'EventController@store')->name('store');
        Route::get('{event}/edit', 'EventController@edit')->name('edit');
        Route::put('{event}', 'EventController@update')->name('update');
        Route::delete('{event}', 'EventController@destroy')->name('destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | Category CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'category.', 'prefix' => 'category'], function () {
        Route::get('', 'CategoryController@index')->name('index');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::post('', 'CategoryController@store')->name('store');
        Route::get('{category}/edit', 'CategoryController@edit')->name('edit');
        Route::put('{category}', 'CategoryController@update')->name('update');
        Route::delete('{category}', 'CategoryController@destroy')->name('destroy');
    });
    /*
    |--------------------------------------------------------------------------
    | Category CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'gallery.', 'prefix' => 'gallery'], function () {
        Route::get('', 'GalleryController@index')->name('index');
        Route::get('create', 'GalleryController@create')->name('create');
        Route::post('', 'GalleryController@store')->name('store');
        Route::get('{gallery}/edit', 'GalleryController@edit')->name('edit');
        Route::put('{gallery}', 'GalleryController@update')->name('update');
        Route::delete('{gallery}', 'GalleryController@destroy')->name('destroy');
    });
    /*
    |--------------------------------------------------------------------------
    | Course CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'course.', 'prefix' => 'course'], function () {
        Route::get('', 'CourseController@index')->name('index');
        Route::get('create', 'CourseController@create')->name('create');
        Route::post('', 'CourseController@store')->name('store');
        Route::get('{course}/edit', 'CourseController@edit')->name('edit');
        Route::put('{course}', 'CourseController@update')->name('update');
        Route::delete('{course}', 'CourseController@destroy')->name('destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | Teacher CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'teacher.', 'prefix' => 'teacher'], function () {
        Route::get('', 'TeacherController@index')->name('index');
        Route::get('create', 'TeacherController@create')->name('create');
        Route::post('', 'TeacherController@store')->name('store');
        Route::get('{teacher}/edit', 'TeacherController@edit')->name('edit');
        Route::put('{teacher}', 'TeacherController@update')->name('update');
        Route::delete('{teacher}', 'TeacherController@destroy')->name('destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | Course CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'student.', 'prefix' => 'student'], function () {
        Route::get('', 'StudentController@index')->name('index');
        Route::get('create', 'StudentController@create')->name('create');
        Route::post('', 'StudentController@store')->name('store');
        Route::get('{student}/edit', 'StudentController@edit')->name('edit');
        Route::put('{student}', 'StudentController@update')->name('update');
        Route::delete('{student}', 'StudentController@destroy')->name('destroy');
    });

    /*
        |--------------------------------------------------------------------------
        | Service CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'service.', 'prefix' => 'service'], function () {
        Route::get('', 'ServiceController@index')->name('index');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::post('', 'ServiceController@store')->name('store');
        Route::get('{services}/edit', 'ServiceController@edit')->name('edit');
        Route::put('{services}', 'ServiceController@update')->name('update');
        Route::delete('{service}', 'ServiceController@destroy')->name('destroy');
    });

    Route::group(['as' => 'document.', 'prefix' => 'document'], function () {
        Route::get('', 'DocumentController@index')->name('index');
        Route::get('create', 'DocumentController@create')->name('create');
        Route::post('store', 'DocumentController@store')->name('store');
        Route::put('{document}', 'DocumentController@update')->name('update');
        Route::get('{document}/edit', 'DocumentController@edit')->name('edit');
        Route::delete('{document}', 'DocumentController@destroy')->name('destroy');
        Route::put('{document}/publish', 'DocumentController@publishUpdate')->name('publish');
    });

    Route::group(['as' => 'admission.', 'prefix' => 'admission'], function () {
        Route::get('', "AdmissionController@index")->name('index');
        Route::delete('{admission}', 'AdmissionController@destroy')->name('destroy');
        Route::get('admission/{admission}', 'AdmissionController@viewDetails')->name('show');
    });

    

    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');

});


//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Frontend Controller
|--------------------------------------------------------------------------
*/


Route::get('', 'FrontendController@homepage')->name('homepage');

Route::get('/downloads', 'FrontendController@downloads')->name('downloads');
Route::get('/gallery', 'FrontendController@gallery')->name('gallery');
Route::get('/vacancy', 'FrontendController@vacancy')->name('vacancy');
Route::post('/vacancy', 'FrontendController@applyVacancy')->name('vacancyapply');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact', 'FrontendController@contactMail')->name('contact.mail');
Route::get('news-events', 'FrontendController@eventList')->name('event.list');
Route::get('news-event/{event}', 'FrontendController@eventDetail')->name('event.detail');
Route::get('courses', 'FrontendController@courseList')->name('course.list');
Route::get('course/{course}', 'FrontendController@courseDetail')->name('course.detail');

Route::post('store', "AdmissionController@store")->name('admission.store');
Route::get('/admissions', 'AdmissionController@admissionForm')->name('admission.form');
Route::get('{page}', 'FrontendController@page')->name('page.detail');



