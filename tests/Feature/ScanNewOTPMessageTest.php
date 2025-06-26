<?php


namespace Tests\Feature;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ScanNewOTPMessageTest extends TestCase
{
    public function test_send_new_oto()
    {
        $response = $this->post('/api/send-otp');



        $response->assertStatus(200);

        $response->assertJsonStructure([
            'status',
            'message',
        ]);
        $response->assertSimilarJson([
            'status' => Response::HTTP_OK,
            'message' => 'OTP sent successfully',
        ]);
    }

}
