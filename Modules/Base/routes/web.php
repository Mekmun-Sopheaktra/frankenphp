<?php

use Illuminate\Support\Facades\Route;
use Modules\Base\app\Http\Controllers\BaseController;

Route::resource('bases', BaseController::class)->names('base');
