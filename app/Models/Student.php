<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'image',
        'status',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function courses(){
        return $this->belongsToMany(Student::class ,'student_courses' , ' course_id' , 'student_id');
    }
}
