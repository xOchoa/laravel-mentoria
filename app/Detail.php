<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
  // Creando los fillables;
	protected $fillabe = ['product_id', 'quantity', 'price'];

	public function product(){
		return $this->belongsTo('App\Product','product_id');
	}
}
