<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable=[
        'course_id',
        'title',
        'description',
        'video_url',
        'duration',
        'order',
        'is_preview'
    ];

    protected function casts(){
        return [
            'is_preview'=>'boolean',
        ];
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
