<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SmsController extends Controller
{
    public function sendOTP(): JsonResponse
    {
        return response()->json([
            'status' => Response::HTTP_OK,
            'message' => 'OTP sent successfully',
        ]);


    }
}
