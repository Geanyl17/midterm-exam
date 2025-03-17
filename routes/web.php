<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Nillos[Geanyl]',[FeatureController::class,'index']);
