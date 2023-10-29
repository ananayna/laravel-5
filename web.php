<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;



Route::get('/', function(){
    return view ('home');
})->name('home');

Route::get('/post-create', function(){
    return view ('post.create');
})->name('create');

Route::post('/store', [postController::class, 'store'])->name('post.store');
Route::get('/list', [postController::class, 'listPost'])->name('post.list');
Route::get('/view/{id} ', [postController::class, 'view'])->name('post.view');
Route::get('/edit/{id} ', [postController::class, 'edit'])->name('post.edit');
Route::put('/update/{id} ', [postController::class, 'update'])->name('post.update');

