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

Route::middleware(['guest'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});


});

Auth::routes();
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', 'HomeController@index')->name('home');

Route::post('/add-goal', 'GoalController@store')->name('storegoal');


Route::get('/settings', function () {
    return view('setting');
 });
// Route
Route::livewire('/mygoals', 'goals');

Route::livewire('/goals/{id}/edit', 'editgoal');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
});
Route::livewire('/goals/{id}', 'showgoal');


Route::get('/faqs', function () {
    return view('faq');
 });
 
 Route::get('/contact', function () {
    return view('contact');
 });

 Route::post('/contact', 'ContactController@index');
//  Route::post('/update-account', 'UserController@update');

