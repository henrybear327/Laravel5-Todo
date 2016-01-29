<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hey', function () {
    return view('Bemg');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task; // A MUST
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', 'TaskController@index');

    /**
     * Add New Task
     */
    Route::post('/task', 'TaskController@store');

    /**
     * Delete Task
     */
    Route::delete('/task/{task}', 'TaskController@destroy');
});
