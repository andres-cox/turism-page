<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $fillable = ["title_id", "title", "img_url", "text"];
}
