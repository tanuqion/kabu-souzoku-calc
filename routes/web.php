<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stocks/{code}/price', function (string $code) {
    return response()->json(['code' => $code, 'price' => 12345.6]);
});
