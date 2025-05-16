<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'title',
        'content',
        'image',
    ];

    protected function casts(){
        return [
            'publish_at'=>'datetime',
        ];
    }
}
