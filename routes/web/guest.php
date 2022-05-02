<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->get('/guest', function () {
    return 'hello, guest!';
});
