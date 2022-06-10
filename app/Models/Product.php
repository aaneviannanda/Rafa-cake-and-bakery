<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = ['category_id', 'name', 'price', 'link_img', 'rating', 'description'];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function favorites(){
        return $this->hasMany(Favorite::class, 'product_id', 'id');
    }
}
