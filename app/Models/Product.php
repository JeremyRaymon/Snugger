<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function cartItems() {
        return $this->hasMany(CartItem::class);
    }

    public function wishItems()
    {
        return $this->hasMany(WishItem::class);
    }
}
