<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = ['product_type_id','titulo','descripcion'];

    public function type()  {
        return $this->belongsTo('App\ProductType','product_type_id');
    }
}
