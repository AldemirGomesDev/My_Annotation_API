<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
 
   protected $table = "annotation";
   protected $fillable = ['titulo','message'];

}
