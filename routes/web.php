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


Route::get('/', 'LandingController');

//template route
// Route::get('/', function () {
//     return view('welcome');
// });

//just for fun
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'This is user '.$name.' with user id of '.$id;
    //projectURL/users/2/brad
});

