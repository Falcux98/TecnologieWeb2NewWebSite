<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   //

   protected $table = 'categoria';
   protected $primaryKey = 'codCategoria';
   public $incrementing = true;
}
