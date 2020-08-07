<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Square1 implements BaseService {

    public $data;
    public $endpoint;

    public function __construct()
    {
        $this->endpoint = 'https://sq1-api-test.herokuapp.com/posts';
    }

    public function getData()
    {
        return Http::get($this->endpoint)['data'];
    }
}