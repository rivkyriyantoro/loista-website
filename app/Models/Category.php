<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id_category';
    protected $fillable = ['name_category'];

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class, 'id_category', 'id_category');
    }
}
