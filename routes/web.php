<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "root";
});

Route::get('/login', function () {
    return "login";
});

Route::post('/login', function () {
    // user log
    return "login";
});

Route::get('/signup', function () {
    return "signup";
});

Route::get('/dashboard', function () {
    
    return "dashboard";
});

Route::get('/ticket', function () {
    return "tickets";
});

Route::get('/ticket/create', function () {
    return "tickets creation page";
});

Route::get('/ticket/assign', function () {
    return "tickets assign page";
});

Route::get('/ticket/{id}', function (string $id) {
    return "ticket#".$id;
});

Route::get('/ticket/{id}/review', function (string $id) {
    return "ticket#".$id."-review";
});

Route::get('/ticket/{id}/inquire', function (string $id) {
    return "ticket#".$id."-message";
});

Route::get('/charliekirk', function () {
    return view('routes.charliekirk');
});


