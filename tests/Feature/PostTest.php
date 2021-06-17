<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIfPostsRoutIsAvailable()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }

    public function testIfPostsCreateRoutIsAvailable()
    {
        $response = $this->get('/posts/create');

        $response->assertStatus(200);
    }

    public function testIfCreatingPostIsPossible()
    {
        $user = User::factory()->create();
        $route = route('posts.store');
        $requestBody = [
            'title' => '',
            'content' => 'test content',
        ];


        $response = $this->actingAs($user)->post($route, $requestBody);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertAuthenticated();
        $this->assertDatabaseCount('posts',1);
        $this->assertDatabaseHas('posts', [
            'title' => 'Test',
        ]);
    }
}

