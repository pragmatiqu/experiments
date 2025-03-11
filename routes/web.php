<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ui5/hybrid', function () {
    return view('ui5.hybrid');
});

Route::get('/ui5/index', function () {
    return view('ui5.index');
});
Route::get('/ui5/manifest.json', function () {
    return response()->json(
        json_decode(
            view('ui5.manifest', [
                'appTitle' => 'Hello World!',
                'appDescription' => 'This is app description.',
            ])->render(),
            true
        )
    );
});
Route::get('/ui5/Component-preload.js', function () {
    return response()->file(resource_path('views/ui5/Component-preload.js'), [
        'Content-Type' => 'application/javascript'
    ]);
});
Route::get('/ui5/Component-dbg.js', function () {
    return response()->file(resource_path('views/ui5/Component-dbg.js'), [
        'Content-Type' => 'application/javascript'
    ]);
});
Route::get('/ui5/{string}.js.map', function (string $string) {
    return response()->file(resource_path("views/ui5/portal/{$string}.js.map"), [
        'Content-Type' => 'application/json'
    ]);
});
Route::get('/ui5/css/style.css', function () {
    return response()->file(resource_path('views/ui5/style.css'), [
        'Content-Type' => 'text/css'
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
