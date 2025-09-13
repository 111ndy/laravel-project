<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/landingPage', [LandingController::class, 'landingPage']); {
    return view('landingPage');
};
