<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('anonymous/contents');
})->middleware('check');*/
Route::get('/', 'SubscriberController@index')->name('home.contents')->middleware('check');
Route::get('{content}/details', 'SubscriberController@homedetails')->name('home.details')->middleware('check');
Route::put('{content}/details', 'SubscriberController@homesuscription')->name('home.suscription')->middleware('check');


Auth::routes();

//HAY QUE PONER MIDDLEWARES
Route::resource('/cont-all', 'SectionController')->middleware('auth', 'rol:dif');
Route::resource('/cont', 'ContentController')->middleware('auth', 'rol:aut');
Route::resource('/prop-all', 'SectionController')->middleware('auth', 'rol:dif');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cont-all', 'ContentController@index')->name('all_contents')->middleware('auth', 'rol:dif');
Route::get('/aut', 'ContentController@autlist')->name('all_auts')->middleware('auth', 'rol:dif');
Route::get('/subs', 'ContentController@sublist')->name('all_subs')->middleware('auth', 'rol:dif');
Route::get('/mods', 'ContentController@modifications')->name('all_contents.mods')->middleware('auth', 'rol:dif');
Route::get('/prop-all', 'ContentController@indexlistall')->name('all_proposals')->middleware('auth', 'rol:dif');
Route::get('/prop-all/{content}/details', 'ContentController@details')->name('all_contents.details')->middleware('auth', 'rol:dif');
Route::put('/prop-all/{content}/details', 'ContentController@status')->name('all_proposals.status')->middleware('auth', 'rol:dif');

Route::get('/cont', 'ContentController@indexx')->name('content')->middleware('auth', 'rol:aut');
Route::get('/cont/{content}/update', 'ContentController@content_details')->name('contents.details')->middleware('auth', 'rol:aut');
Route::put('/cont/{content}/update', 'ContentController@content_edit')->name('contents.edit')->middleware('auth', 'rol:aut');
Route::get('/prop', 'ContentController@indexlist')->name('proposals')->middleware('auth', 'rol:aut');
Route::get('/prop/{content}/details', 'ContentController@propdetails')->name('proposals.details')->middleware('auth', 'rol:aut');
Route::put('/prop/{content}/details', 'ContentController@propstatus')->name('proposals.status')->middleware('auth', 'rol:aut');


//Route::get('/activate','ContentController@activate')->middleware('auth');
//Route::get('/add/{id}' ,'ContentController@add')->middleware('auth');
//Route::delete('/delete/{id}' ,'ContentController@delete')->middleware('auth');
//Route::get('/cont', 'ContentController@create')->name('content_create');