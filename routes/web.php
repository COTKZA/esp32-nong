<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistanceController;

Route::get('/', function () {
    return view('index');
});
