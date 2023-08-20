<?php

use App\Domain\User\Api\Controllers\RolesController;

Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('public_roles', [RolesController::class, 'getPublicRoles']);
});
