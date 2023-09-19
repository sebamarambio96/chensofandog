<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cover');
});

Route::get('/chainsaw', function () {
    return view('chainsaw');
});
