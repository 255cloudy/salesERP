<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    function sales() {
        $this->hasMany(sale::class, "product_id");
    }
    function order_entries(){
        $this->hasMany(order_entry::class, "product_id");
    }
    function stock(){
        $this->hasMany(stock::class, "product_id");
    }
    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
