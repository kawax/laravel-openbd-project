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

Route::get('coverage', function () {
    dd(\OpenBD::coverage());
});

Route::get('schema', function () {
    dd(\OpenBD::schema());
});

Route::get('get/{isbn}', function ($isbn) {
    dd(\OpenBD::get(explode(',', $isbn)));
});
