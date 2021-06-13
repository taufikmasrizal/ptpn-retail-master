<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_contact extends Model
{
    protected $fillable = [
    	'content_en', 'content_idn', 'link'
    ];
}
