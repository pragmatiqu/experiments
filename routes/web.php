<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/card-manifest', function () {
        $manifest = json_decode(view('manifest')->render());
        return response()->json($manifest);
    });

    Route::get('/admin', function () {
        return view('admin');
    });

});
