<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $timestamps = false;
    protected $table ='students';
    protected $fillable = [
        'name', 'email', 'image',
    ];


}
