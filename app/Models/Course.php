<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=[
        'title',
        'description',
        'price',
        'is_free',
        'level',
    ];

    protected function casts(){
        return [
            'is_free'=>'boolean',
        ];
    }

    public function lectures(){
        return $this->hasMany(Lecture::class);
    }

    public function students(){
        return $this->belongsToMany(Course::class , 'student_courses' , 'student_id' , 'course_id');
    }
}
