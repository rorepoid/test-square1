<?php

namespace App;

use App\User;
use App\Services\Square1;
use App\Services\BaseService as Service;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Throwable;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function importDataFromApi(Service $service)
    {
        try {
            return self::insert($service->getDataParsed());
        } catch (Throwable $th) {
            return false;
        }
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
