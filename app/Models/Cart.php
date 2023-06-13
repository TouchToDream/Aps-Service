<?php

namespace App\Models;

use App\Models\User;
use App\Models\CartProduct;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'total_quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartProducts()
    {
        return $this->hasMany(CartProduct::class);
    }

    public function addProduct(Product $product, $quantity = 1)
    {
        if ($this->products->contains($product)) {
            $this->products()->updateExistingPivot($product, [
                'quantity' => $this->products->find($product)->pivot->quantity + $quantity
            ]);
        } else {
            $this->products()->attach($product, ['quantity' => $quantity]);
        }
        
        $this->updateTotalQuantity();
    }

    public function removeProduct(Product $product)
    {
        $this->products()->detach($product);
        $this->updateTotalQuantity();
    }

    public function updateTotalQuantity()
    {
        $this->total_quantity = $this->products->sum('pivot.quantity');
        $this->save();
    }
}
