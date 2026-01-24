<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  
    public function productDetail(){
        return $this->hasOne(ProductDetailes::class,foreignKey:'product_id');
    }
}
