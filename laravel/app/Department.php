<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'slogan'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];
}
