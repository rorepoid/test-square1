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
        $this->data = Http::get($this->endpoint)['data'];

        return $this->data;
    }

    public function getDataParsed()
    {
        $this->getData();

        $new_array = [];

        foreach ($this->data as $item) {
            array_push($new_array, [
                'title' => $item['title'],
                'user_id' => 1,
                'body' => $item['description'],
                'created_at' => $item['publication_date'],
                'updated_at' => $item['publication_date'],
            ]);
        }

        return $new_array;
    }
}