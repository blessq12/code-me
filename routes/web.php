<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;





// Routes group below

Route::domain(env('APP_URL'))->group(function(){
    Route::controller(MainController::class)->group(function(){
        Route::get('/','index');
    });
});
