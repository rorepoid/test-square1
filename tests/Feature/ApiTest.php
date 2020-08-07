<?php

namespace Tests\Feature;

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
}
