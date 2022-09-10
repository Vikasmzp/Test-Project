<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $fillable = ['name','address','email','number'];


    public function teacher()
    {
        return $this->hasOne(Subject::class,'teacher_id','id');
    }
    public function subject()
    {
        return $this->hasOne(Teacher::class ,'teacher_id','id');
    }

}
