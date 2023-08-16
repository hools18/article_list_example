<?php

use App\Domain\Article\Api\Controllers\ArticleController;

Route::group(['prefix' => 'articles', 'as' => 'articles.'], function () {
    Route::get('', [ArticleController::class, 'index'])
        ->name('index');

    Route::get('/get_articles_in_block', [ArticleController::class, 'getArticlesInBlock'])
        ->name('get_articles_in_block');

    Route::middleware(['role:author'])
        ->get('/create', [ArticleController::class, 'create'])
        ->name('create');

    Route::get('/{article_slug}', [ArticleController::class, 'show'])
        ->name('show');
});
