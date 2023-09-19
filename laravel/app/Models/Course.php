<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        // 'user_id',
        'course_title',
        'course_description',
        'course_price'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_courses', 'course_id', 'user_id');
    }


    public function modules()
    {
        return $this->hasMany(Module::class);
    }

}
