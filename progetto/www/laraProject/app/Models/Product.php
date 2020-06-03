<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'prodotto';
    protected $primaryKey = 'codProdotto';

    protected $guarded = ['codProdotto'];
    protected $timeStamps = false;
    
    
    public function getPrice($withDiscount = false) {
        $price = $this->prezzo;
        if (true == ($this->inPromozione) && true == $withDiscount) {
            $discount = ($price * $this->percentualeSconto) / 100;
            $price = round($price - $discount, 2);
        }
        return $price;
    }
}
