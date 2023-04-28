<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Routes group below

Route::domain(env('APP_URL'))->group(function(){
    $mainRoutes = function(){
        Route::get('/','index')->name('index');
        Route::get('/services','services')->name('services');
        Route::get('/portfolio','portfolio')->name('portfolio');
        Route::get('/contact','contact')->name('contact');
    };
    Route::controller(MainController::class)->name('main.')->group($mainRoutes);
});
