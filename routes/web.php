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

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome/{locale}', function ($locale) {
    App::setLocale($locale);
});

Route::get('about', function () {
    return view('about');
});

Route::post('/', function () {

});

Route::put('/', function () {

});

Route::delete('/', function () {

});

Route::any('/', function () {

});

Route::match(['get', 'post'], '/', function () {

});

Route::get('/', 'WelcomeController@index');

Route::get('users/{id}/friends', function ($id) {
//
});

Route::get('users/{id?}', function ($id = 'fallbackId') {
//
});

Route::get('users/{id}', function ($id) {
//
})->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {
//
})->where('username', '[A-Za-z]+');

Route::get('posts/{id}/{slug}', function ($id, $slug) {
//
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);

// Defining a route with name in routes/web.php:
Route::get('members/{id}', 'MembersController@show')->name('members.show');
// Link the route in a view using the route() helper
/* <a href="<?php echo route('members.show', ['id' => 14]); ?>"> */

Route::group([], function () {
    Route::get('hello', function () {
        return 'Hello';
    });
    Route::get('world', function () {
        return 'World';
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('account', function () {
        return view('account');
    });
});

Route::group(['prefix' => 'api'], function () {
    Route::get('/', function () {
// Handles the path /api
    });
    Route::get('users', function () {
// Handles the path /api/users
    });
});

Route::group(['domain' => 'api.myapp.com'], function () {
    Route::get('/', function () {
//
    });
});

Route::group(['domain' => '{account}.myapp.com'], function () {
    Route::get('/', function ($account) {
//
    });
    Route::get('users/{id}', function ($account, $id) {
//
    });
});

Route::group(['as' => 'users.', 'prefix' => 'users'], function () {
    Route::group(['as' => 'comments.', 'prefix' => 'comments'], function () {
// Route name will be users.comments.show
        Route::get('{id}', function () {
//
        })->name('show');
    });
});

Route::get('/', 'TasksController@home');

Route::get('tasks/create', 'TasksController@create');

Route::post('tasks', 'TasksController@store');
