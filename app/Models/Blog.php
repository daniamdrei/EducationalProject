<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'admin_id',
        'title',
        'content',
        'image',
    ];

    protected function casts(){
        return [
            'publish_at'=>'datetime',
        ];
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
