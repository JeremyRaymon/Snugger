<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function transactions() {
        return $this->belongsTo(Transaction::class, "transactionId", "id");
    }

    public function products() {
        return $this->hasOne(Product::class, "id", "itemId");
    }
}
