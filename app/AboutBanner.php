<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutBanner extends Model
{
    protected $fillable = [
    	'image_logo', 'title_en', 'title_idn', 'image_background', 'image_float_item1', 'image_float_item2', 'image_float_item3', 'image_float_item4'
    ];
}
