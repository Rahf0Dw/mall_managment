<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'key',
        'value',
    ];

    public function Product(){
        return $this->belongsTo(Product::class);
    }

}
