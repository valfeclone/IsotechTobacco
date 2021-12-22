<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'description',
        'category',
        'seen_time',
        'regular_price',
        'promo_price',
        'tax_rate',
        'width',
        'height',
        'published',
        'product_image_path',
    ];    
}
