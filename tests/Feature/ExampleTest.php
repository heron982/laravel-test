<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EndpointRegister extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_endpoint_cadastro() : void
    {
        $user = User::factory()->make();

        $response = $this->withHeaders([
            'Accept' => 'application/json'
        ])->post('/api/register', [
            'name'      => $user->name,
            'email'     => $user->email,
            'password'  => $user->password
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'success'
            ]);
    }
}
