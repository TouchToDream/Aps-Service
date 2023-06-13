<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cartId = $request->session()->get('cart_id');
        $user = $request->user();
        $cart = $user->cart;
        $cartItems = $cart->cartProducts;
        $totalPrice = $this->calculateTotalPrice($cartItems);

        return view('cart.index', compact('cartItems', 'totalPrice'));
    }


    private function calculateTotalPrice($cartItems)
    {
        $totalPrice = 0;

        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->product->selling_price * $cartItem->quantity;
            $cartItem->total = $cartItem->product->selling_price * $cartItem->quantity;
        }

        return $totalPrice;
    }

    public function addProduct(Request $request, Product $product)
    {
        $user = $request->user();
        $cart = Cart::where('user_id', $user->id)->first();

        $cartProduct = CartProduct::where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartProduct) {
            $cartProduct->quantity++;
            $cartProduct->save();
        } else {
            $cartProduct = new CartProduct([
                'product_id' => $product->id,
                'quantity' => 1,
            ]);

            $cart->cartProducts()->save($cartProduct);
        }

        return redirect()->route('cart.index');
    }

    public function update(Request $request, CartProduct $cartProduct)
    {
        $requestedQuantity = $request->input('quantity');
        $availableQuantity = $cartProduct->product->quantity;
        if ($requestedQuantity > $availableQuantity) {
            $requestedQuantity = $availableQuantity;
        }
        $quantity = $request->input('quantity');
        $cartProduct->quantity = $quantity;
        $cartProduct->save();

        return redirect()->route('cart.index');
    }

    public function destroy(CartProduct $cartProduct)
    {
        $cartProduct->delete();

        return redirect()->route('cart.index');
    }
}
