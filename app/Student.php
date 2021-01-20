<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //$fillable or $guarded
    protected $fillable = ['nama', 'phone', 'email', 'jurusan'];
}
