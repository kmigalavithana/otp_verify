<?php


namespace Tests\Feature;

use Tests\TestCase;

class ScanNewOTPMessageTest extends TestCase
{
    public function test_send_new_oto()
    {
        $response = $this->post('/api/send-otp', []);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'message',
            'status',
        ]);
    }

}
