<?php

namespace App\Models;

use App\Events\PostCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'string',
        'description',
    ];

    public static function boot()
    {
        parent::boot();

        self::created(function(Post $model){
            PostCreated::dispatch($model);
        });
    }
}
