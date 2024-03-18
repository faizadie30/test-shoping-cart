<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartList extends Model
{
    use HasFactory;

    protected $table = 'cart_list';
    protected $primaryKey = 'id';

    protected $fillable = ['product_id', 'quantity', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
