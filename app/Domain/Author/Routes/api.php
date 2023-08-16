<?php

use App\Domain\Author\Api\Controllers\AuthorController;

Route::group(['prefix' => 'authors', 'as' => 'authors.'], function () {
    Route::get('/get_authors_in_block', [AuthorController::class, 'getAuthorsInBlock'])
        ->name('get_authors_in_block');
});
