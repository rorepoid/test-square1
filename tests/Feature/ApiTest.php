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
        $result = Post::importDataFromApi($square1);

        // Assert
        $this->assertTrue($result);
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
