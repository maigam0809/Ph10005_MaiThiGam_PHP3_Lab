<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject_name',
    ];
    
    protected $table = 'subjects';
    protected $primariKey = 'id';

    public function students(){
        return $this->hasMany(Student::class,'student_id','id');

    }

}
