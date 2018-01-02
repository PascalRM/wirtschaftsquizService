<?php

use Illuminate\Http\Request;
use App\Frage;
use App\Fragebogen;
use App\Eingabe;
use App\Truefalse;
use App\Multiplechoice;
use App\Kategorie;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\Cors;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
 *--------------------------------------------------------------------------
 * Kategorie
 *--------------------------------------------------------------------------
 */

Route::get('kategorie', 'KategorieController@index');
Route::get('kategorie/{id}', 'KategorieController@show');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('kategorie', 'KategorieController@store');
    Route::put('kategorie/{id}', 'KategorieController@update');
    Route::delete('kategorie/{id}', 'KategorieController@delete');
});

Route::get('kategorie_fragebogen/{id}', 'KategorieController@getfragebogen');

/*
 *--------------------------------------------------------------------------
 * Fragebogen
 *--------------------------------------------------------------------------
 */
Route::get('fragebogen', 'FragebogenController@index');
Route::get('fragebogen/{id}', 'FragebogenController@show');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('fragebogen', 'FragebogenController@store');
    Route::put('fragebogen/{id}', 'FragebogenController@update');
    Route::delete('fragebogen/{id}', 'FragebogenController@delete');
});


/*
 *--------------------------------------------------------------------------
 * Frage
 *--------------------------------------------------------------------------
 */
Route::get('frage', 'FrageController@index');
Route::get('frage/{id}', 'FrageController@show');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('frage', 'FrageController@store');
    Route::put('frage/{id}', 'FrageController@update');
    Route::delete('frage/{id}', 'FrageController@delete');
});
/*
 *--------------------------------------------------------------------------
 * Eingabe
 *--------------------------------------------------------------------------
 */
Route::get('eingabe', 'FrageController@index');
Route::get('eingabe/{id}', 'FrageController@show');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('eingabe', 'FrageController@store');
    Route::put('eingabe/{id}', 'FrageController@update');
    Route::delete('eingabe/{id}', 'FrageController@delete');
});
/*
 *--------------------------------------------------------------------------
 * Multiplechoice
 *--------------------------------------------------------------------------
 */
Route::get('multiplechoice', 'FrageController@index');
Route::get('multiplechoice/{id}', 'FrageController@show');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('multiplechoice', 'FrageController@store');
    Route::put('multiplechoice/{id}', 'FrageController@update');
    Route::delete('multiplechoice/{id}', 'FrageController@delete');
});
/*
 *--------------------------------------------------------------------------
 * Truefalse
 *--------------------------------------------------------------------------
 */
Route::get('truefalse', 'FrageController@index');
Route::get('truefalse/{id}', 'FrageController@show');

Route::group(['middleware' => 'auth:api'], function() {
    Route::post('truefalse', 'FrageController@store');
    Route::put('truefalse/{id}', 'FrageController@update');
    Route::delete('truefalse/{id}', 'FrageController@delete');
});
/*
 *--------------------------------------------------------------------------
 * Authentifizierung
 *--------------------------------------------------------------------------
 */


Route::group(['middleware' => 'cors'], function() {
    Route::post('register', 'Auth\RegisterController@register');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
});
