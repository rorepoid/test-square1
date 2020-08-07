<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class Square1 implements BaseService {

    public $data;
    public $endpoint;

    public function __construct()
    {
        $this->endpoint = config('services.square1.endpoint');
    }

    public function getData()
    {
        return Http::get($this->endpoint)['data'];
    }
}