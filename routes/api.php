<?php

use Illuminate\Http\Request;
use App\Frage;
use App\Fragebogen;
use App\Eingabe;
use App\Truefalse;
use App\Multiplechoice;
use App\Kategorie;

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
Route::post('kategorie', 'KategorieController@store');
Route::put('kategorie/{id}', 'KategorieController@update');
Route::delete('kategorie/{id}', 'KategorieController@delete');

/*
 *--------------------------------------------------------------------------
 * Fragebogen
 *--------------------------------------------------------------------------
 */
Route::get('fragebogen', 'KategorieController@index');
Route::get('fragebogen/{id}', 'KategorieController@show');
Route::post('fragebogen', 'KategorieController@store');
Route::put('fragebogen/{id}', 'KategorieController@update');
Route::delete('fragebogen/{id}', 'KategorieController@delete');

/*
 *--------------------------------------------------------------------------
 * Fragebogen
 *--------------------------------------------------------------------------
 */
Route::get('frage', 'KategorieController@index');
Route::get('frage/{id}', 'KategorieController@show');
Route::post('frage', 'KategorieController@store');
Route::put('frage/{id}', 'KategorieController@update');
Route::delete('frage/{id}', 'KategorieController@delete');
