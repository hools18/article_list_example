<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;


Route::get('/', [MainController::class, 'index'])->name('main.index');


Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
    Route::get('', [ArticleController::class, 'index'])
        ->name('index');
    Route::middleware(['auth'])
        ->get('/create', [ArticleController::class, 'create'])
        ->name('create');
    Route::get('/{article_slug}', [ArticleController::class, 'show'])
        ->name('show');
});
