<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    //
    protected $fillable = [
        'name',
        'email'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];
}
