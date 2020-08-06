<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function auth_users_can_create_posts()
    {
        // Arrange
        $user = factory(User::class)->create();
        $this->actingAs($user);

        // Act
        $content = [
            'title' => "The world's leading software development platform",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorum nulla, distinctio accusantium nostrum sapiente maiores fuga deserunt officia, maxime voluptatum earum porro non quidem facere perferendis, doloribus sequi? Laborum.",
        ];

        $post = $user->posts()->create($content);

        // Assert
        $this->assertEquals($user->id, $post->user_id);
    }
}
