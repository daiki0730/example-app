<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

// Sample
Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

// Tweets
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');
Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)->name('tweet.create');
Route::get('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\IndexController::class)->name('tweet.update.index');
Route::put('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\Update\PutController::class)->name('tweet.update.put');
Route::delete('/tweet/delete/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)->name('tweet.delete');
