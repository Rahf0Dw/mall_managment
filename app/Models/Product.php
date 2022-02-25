<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'ar_name',
        'en_name',
        'ar_description',
        'en_description',
        'price',
        'qty',
        'image',
    ];

    public function Specifications(){

        return $this->hasMany(Specification::class, 'product_id');
    }

}
