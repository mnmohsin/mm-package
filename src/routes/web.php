<?php

use Illuminate\Support\Facades\Route;
use shayanmemon\contact\Http\Controllers\ContactController;

Route::group(['namespace'=>'shayanmemon\contact\Http\Controllers'],function(){
    Route::get('contact',[ContactController::class,'index'])->name('contact');
    Route::post('contact',[ContactController::class,'send']);
});
