<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Detail;

class Product extends Model
{

    protected $fillable = ['product_type_id','titulo','descripcion', 'price'];

    /*
        Una relacion 1:N donde producto es N, para la obtencion de su respectivo registro relacionado se utiliza belongsTo
    */
    public function type()  {
        return $this->belongsTo('App\ProductType','product_type_id');
    }
}
