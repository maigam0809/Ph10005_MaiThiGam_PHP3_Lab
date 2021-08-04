<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'address',
        'avatar',
        'description'
    ];
    protected $table = 'students';
    protected $primariKey = 'id';
}
