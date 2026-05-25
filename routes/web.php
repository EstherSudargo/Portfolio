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
Route::get('/figma', function(){
    return view('figma');
});
Route::get('/data_based_projects', function(){
    return view('data_based_projects');
});
