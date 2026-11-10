<?php

namespace App\Http\Controllers\Api;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:5',
        ]);

        $feedback = Feedback::create($validated);

        return response()->json([
            'message' => 'Спасибо за ваше сообщение! Мы свяжемся с вами.',
            'data' => $feedback
        ], 201);
    }
}