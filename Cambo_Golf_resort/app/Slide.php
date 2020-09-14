<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
   protected $table = 'slides';
   // protected $fileable =['img_name','main_text','desc'] ;
  protected $fillable = ['maintext', 'desc', 'imgname'];
}
