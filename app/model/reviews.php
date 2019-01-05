<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\product;

class reviews extends Model
{
	public function product()
	{
    	return $this->belongsTo(Product::class);
	}
	
}

