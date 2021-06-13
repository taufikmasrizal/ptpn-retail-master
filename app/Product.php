<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function history()
    {
        # code...
        return $this->hasMany('App\History_product', 'product_id');
    }
   
}
