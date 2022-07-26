<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'cate_id',
        'name',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'qty',
        'taxt',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];

}
