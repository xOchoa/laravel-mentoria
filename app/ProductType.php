<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    /*
     * En caso de ser necesario es posible indicar la tabla correspondiente al modelo si esta no cuenta con un nombre
     * convencional de acuerdo a laravel
     */

    protected $table = 'product_types';

    /*
     * Una relacion 1:N donde producto es N, para la obtencion de sus respectivos registros relacionados se utiliza hasMany
    */

    public function products(){
        return $this->hasMany('App\Product','product_type_id');
    }
}
