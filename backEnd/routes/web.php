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

Route::get('/', function () {
    return view('index');
});

URL::asset('css/style.css');
URL::asset('css/bootstrap.css');
URL::asset('css/fontawesome-all.min.css');

URL::asset('js/app.js');
URL::asset('js/bootstrap.js');
URL::asset('js/easing.js');
URL::asset('js/fontawesome.min.js');
URL::asset('js/jquery-2.2.3.min.js');
URL::asset('js/logeo.js');
// URL::asset('js/style.js');
// URL::asset('js/bootstrap.js');
// URL::asset('js/fontawesome-all.min.js');
// URL::asset('js/style.js');
// URL::asset('js/bootstrap.js');
// URL::asset('js/fontawesome-all.min.js');
// URL::asset('js/style.js');
// URL::asset('js/bootstrap.js');