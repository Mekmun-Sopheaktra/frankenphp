<?php

use Illuminate\Support\Facades\Route;
use Modules\Base\app\Http\Controllers\BaseController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('bases', BaseController::class)->names('base');
});
