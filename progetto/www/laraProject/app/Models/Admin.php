<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /*  public function getProdsCats() {
        return Category::where('parId', '!=', 0)->get();
    }*/

    protected $table = 'amministrazione';
}
