<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/home/home');
});

Route::get('/room', function () {
    return view('/pages/room/room');
});

// Route::get('/', function () {
//     return view('/pages/home/home');
// });

// Route::get('/', function () {
//     return view('/pages/home/home');
// });

// Route::get('/', function () {
//     return view('/pages/home/home');
// });

// Route::get('/', function () {
//     return view('/pages/home/home');
// });


