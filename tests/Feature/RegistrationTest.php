<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function testIfRegisterPageIsAvailable()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testIfRegisteringIsPossible()
    {
        $response = $this->post('/register', [
            'name' => 'testUser',
            'email' => 'test@test.com',
            'password' => 'Test1234',
            'password_confirmation' => 'Test1234',
        ]);

//        $this->assertAuthenticated();
        $response->assertSessionHasNoErrors();
        $response->assertRedirect(RouteServiceProvider::HOME);
        $this->assertDatabaseHas('users', [
            'name' => 'testUser',
            'email' => 'test@test.com',
            'password' => 'Test1234',
        ]);

    }
}
