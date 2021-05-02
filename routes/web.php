<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

//Si non connecté affichage du welcome
Route::get('/', function () {
    return view('welcome');
});

//Route /
Route::get('/', function () {
    return view('dashboard', ['posts' => Post::get()]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
