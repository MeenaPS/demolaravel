<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $fillabel = ['first_name', 'last_name'];

    protected $fillable = array('first_name', 'last_name');
}
