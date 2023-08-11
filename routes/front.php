<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArticleController;


Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');

Route::get('/articles/{article_slug}', [ArticleController::class, 'show'])->name('article.index');
