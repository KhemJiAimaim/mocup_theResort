<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/home/home');
});

Route::group(['prefix' => 'room'], function () {
    Route::get('/', function () {
        return view('/pages/room/room');
    })->name('room.index');
    Route::get('/detail', function () {
        return view('/pages/room/detail_room');
    })->name('room.detail');
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

Route::get('/about-us', function () {
    return view('/pages/about_us/about_us');
});
