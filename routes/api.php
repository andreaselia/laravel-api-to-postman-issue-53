<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(base_path('routes/web/auth.php'));

Route::as('auth')->group(base_path('routes/web/guest.php'));
