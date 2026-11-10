<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController
{
    public function index(Request $request)
    {
        $cart = Cart::with('product')->where('user_id', $request->user()->id)->get();
        return response()->json($cart);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'integer|min:1'
        ]);

        $userId = $request->user()->id;
        $productId = $request->product_id;
        $quantity = $request->quantity ?? 1;

        $cartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            $cartItem = Cart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);
        }

        return response()->json(['message' => 'Товар добавлен в корзину', 'item' => $cartItem], 201);
    }

    public function destroy(Request $request, $id)
    {
        $cartItem = Cart::where('user_id', $request->user()->id)->where('id', $id)->first();

        if (!$cartItem) {
            return response()->json(['message' => 'Товар не найден в вашей корзине'], 404);
        }

        $cartItem->delete();
        return response()->json(['message' => 'Товар удален из корзины']);
    }
}