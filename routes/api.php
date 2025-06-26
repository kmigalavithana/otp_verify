<?php

use App\Http\Controllers\SmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

Route::post('/send-otp', [SmsController::class, 'sendOTP']);
