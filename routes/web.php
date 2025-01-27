<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/home/home');
});

Route::get('/room', function () {
    return view('/pages/room/room');
});

Route::get('/service', function () {
    return view('/pages/service_page/service');
});

Route::get('/contact', function () {
    return view('/pages/contact/contact');
});

Route::get('/gallery', function () {
    return view('/pages/gallery/gallery');
});

// Route::get('/', function () {
//     return view('/pages/home/home');
// });


