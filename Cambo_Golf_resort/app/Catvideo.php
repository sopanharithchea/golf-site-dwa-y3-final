<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catvideo extends Model
{
    protected $table = 'catvideos';

   protected $fillable = ['category','category_img'];
    public function video(){
        return $this->hasMany(Video::class);
    }
}
