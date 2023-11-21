<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

\Livewire\Livewire::setScriptRoute(function ($handle) {
    return Route::get('/scraper/livewire/livewire.js', $handle);
});

Route::post('livewire/update', [\Livewire\Mechanisms\HandleRequests\HandleRequests::class, 'handleUpdate']);
