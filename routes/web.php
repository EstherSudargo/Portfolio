<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Research', function () {
    return view('research');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/aboutme', function(){
    return view('aboutme');
});
