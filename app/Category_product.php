<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_product extends Model
{
    //

    public function product()
    {
        # code...
        return $this->hasMany('App\Other_product', 'category_id');
    }
}
