<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterCourses extends Model
{
    use HasFactory;
    protected $table = 'register_courses_table';
    protected $guarded = [];
}
