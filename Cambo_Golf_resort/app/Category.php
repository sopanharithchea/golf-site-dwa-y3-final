<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

   protected $fillable = ['category','category_img'];
    public function image(){
        return $this->hasMany(Image::class);
    }
}
