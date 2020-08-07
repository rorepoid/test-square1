<?php

namespace Tests\Feature;

use App\Post;
use App\User;
use App\Services\Square1;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    public $endpoint = 'https://sq1-api-test.herokuapp.com/posts';

    /** @test */
    public function get_posts_from_api_endpoint()
    {
        // Act
        $response = Http::get($this->endpoint);

        // Assert
        $this->assertTrue($response->ok());
    }

    /** @test */
    public function auto_import()
    {
        //Arrange
        $square1 = new Square1();
        $this->createAdmin();

        // Act
        $data = Post::insertFromApi($square1);

        Post::insert($data);

        $posts = Post::select('title', 'user_id', 'body', 'created_at', 'updated_at')
                    ->get()
                    ->toArray();

        // Assert
        $this->assertEquals($data, $posts);
    }

    public function createAdmin()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'secret',
        ]);
    }
}
