<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';
   protected $fillable = ['video','category_id'];

   public function catvideo(){
    return $this->belongsTo(Catvideo::class);
}
}
