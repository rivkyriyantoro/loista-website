<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'id_subcategory', 'name_product', 'SKU', 'price', 'discount_price', 'is_promo', 'description', 'image_product','promo'
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'id_subcategory', 'id_subcategory');
    }
}
