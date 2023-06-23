<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\JWT;

class EndpointUserTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function test_endpoint_user() : void
    {
        $user = $this->getUser();

        // $token = JWTAuth::fromUser($user);

        $response = $this->actingAs($user)->withHeaders([
            'accept' => 'application/json',
            // 'Authorization' => 'Bearer ' . $token
        ])->get("/api/user/$user->id");

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function test_endpoint_users()
    {
        $user = $this->getUser();

        $response = $this->actingAs($user)->withHeaders([
            'accept' => 'application/json',
        ])->get("/api/users");

        $response->assertStatus(200);
    }

    public function getUser() : User
    {
        $user = User::where('email', 'test-user@gmail.com')->first();

        if(!$user) {
            $user= User::factory()->make()->create(['name' => 'TEST USER', 'email' => 'test-user@gmail.com', 'password' => 'password']);
        }

        return $user;
    }
}
