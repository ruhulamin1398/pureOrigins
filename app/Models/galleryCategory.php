<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galleryCategory extends Model
{
    use HasFactory;

  public function gallery()
  {
     return $this->hasMany('App\Models\gallery','gallery_category_id','id');
  }

  public function image(){
    return $this->BelongsTo('App\Models\image','image_id','id');
}

}
