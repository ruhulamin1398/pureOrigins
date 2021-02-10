<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;

    public function category()
    {
         return  $this->belongsTo('App\Models\galleryCategory','gallery_category_id','id');
    }
    public function image(){
        return $this->belongsTo('App\Models\image','image_id','id');
    }
}
