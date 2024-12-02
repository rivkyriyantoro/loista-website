<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $primaryKey = 'id_subcategory';
    protected $fillable = [
        'name_subcategory',
        'id_category',
        'image_subcategory',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'id_subcategory', 'id_subcategory');
    }

}
