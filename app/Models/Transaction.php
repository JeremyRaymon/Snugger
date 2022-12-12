<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver',
        'address'
    ];

    public function users() {
        return $this->belongsTo(User::class, "userId", "id");
    }

    public function cartItems() {
        return $this->hasMany(CartItem::class, "transactionId", "id");
    }
}
