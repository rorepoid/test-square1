<?php

namespace App;

use App\User;
use App\Services\Square1;
use App\Services\BaseService as Service;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function insertFromApi(Service $service)
    {
        $new_array = [];
        $posts = $service->getData();

        foreach ($posts as $data) {
            array_push($new_array, [
                'title' => $data['title'],
                'user_id' => 1,
                'body' => $data['description'],
                'created_at' => $data['publication_date'],
                'updated_at' => $data['publication_date'],
            ]);
        }

        return $new_array;
    }

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
    */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
