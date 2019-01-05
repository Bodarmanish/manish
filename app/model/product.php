<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\reviews;

class product extends Model
{
    public function reviews()
    {
    	return $this->hasMany(reviews::class);
    }

    protected $fillable = [
        'name', 'detail', 'price','stock','discount',
    ];
}
