<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_content extends Model
{
    protected $fillable = [
    	'image_background', 'title_en', 'title_idn', 'content_en', 'content_idn', 'sort'
    ];
}
