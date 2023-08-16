<?php

use App\Domain\Article\Http\Controllers\ArticleController;

Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
    Route::get('', [ArticleController::class, 'index'])
        ->name('index');

    Route::middleware(['role:author'])
        ->get('/create', [ArticleController::class, 'create'])
        ->name('create');

    Route::get('/{article_slug}', [ArticleController::class, 'show'])
        ->name('show');
});
