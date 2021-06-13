<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'category_id', 'image_thumbnail','slug', 'title_en', 'title_idn','content_en','content_idn','is_highlight','created_by' 
    ];
}
