<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'prodotto';
    protected $primaryKey = 'codProdotto';

    protected $guarded = ['codProdotto'];
    protected $timeStamps = false;
}
