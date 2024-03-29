<?php

use StudentsForum\Http\Controllers\UsersController;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('discussions','DiscussionsController');
#Route::post('/discussion-index','DiscussionsController@save_page');
Route::resource('discussions/{discussion}/replies','RepliesController');
Route::get('users/notifications',[UsersController::class,'notifications'])->name('users.notifications');
Route::post('discussions/{discussion}/replies/{reply}/best','DiscussionsController@reply')->name('discussions.best');
