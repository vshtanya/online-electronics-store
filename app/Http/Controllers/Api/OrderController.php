<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController
{
    public function store(Request $request)
    {
        $user = $request->user();
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Корзина пуста'], 400);
        }

        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $price = (int) filter_var($item->product->price, FILTER_SANITIZE_NUMBER_INT);
            $totalPrice += $price * $item->quantity;
        }

        $order = Order::create([
            'user_id' => $user->id,
            'status' => 'pending',
            'total_price' => $totalPrice,
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => (int) filter_var($item->product->price, FILTER_SANITIZE_NUMBER_INT),
            ]);
        }

        Cart::where('user_id', $user->id)->delete();

        return response()->json(['message' => 'Заказ успешно оформлен', 'order' => $order], 201);
    }

    public function index(Request $request)
    {
        $orders = Order::with('items.product')->where('user_id', $request->user()->id)->get();
        return response()->json($orders);
    }
}