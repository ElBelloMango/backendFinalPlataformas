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

//Css

URL::asset('css/style.css');
URL::asset('css/bootstrap.css');
URL::asset('css/fontawesome-all.min.css');

//Javascript
URL::asset('js/app.js');
URL::asset('js/bootstrap.js');
URL::asset('js/easing.js');
URL::asset('js/fontawesome.min.js');
URL::asset('js/jquery-2.2.3.min.js');
URL::asset('js/logeo.js');
URL::asset('js/move-top.js');
URL::asset('js/pristine.js');
URL::asset('js/pristine.min.js');
URL::asset('js/referencias.js');
URL::asset('js/registroLogueo.js');
URL::asset('js/renderizar.js');
URL::asset('js/rotadorBanners.js');
URL::asset('js/SmoothScroll.min.js');

//Images
URL::asset('images/arminArlet.jpg');
URL::asset('images/bannerSNK.jpg');
URL::asset('images/eren-jaeger-portada.jpg');
URL::asset('images/EreneJeager.png');
URL::asset('images/erenVagabundo.jpg');
URL::asset('images/Erwin.png');
URL::asset('images/erwinFachero.jpg');
URL::asset('images/Historia.png');
URL::asset('images/Levi.png');
// URL::asset('images/renderizar.images');
// URL::asset('images/rotadorBanners.images');
// URL::asset('images/SmoothScroll.min.images');
// URL::asset('images/renderizar.images');
// URL::asset('images/rotadorBanners.images');
// URL::asset('images/SmoothScroll.min.images');
// URL::asset('images/renderizar.images');
// URL::asset('images/rotadorBanners.images');
// URL::asset('images/SmoothScroll.min.images');