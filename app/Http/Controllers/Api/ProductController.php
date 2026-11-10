<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('category')) {
            $slug = $request->input('category');
            $query->whereHas('category', function ($q) use ($slug) {
                $q->where('slug', $slug);
            });
        }

        return response()->json($query->paginate(12));
    }

    public function categories()
    {
        return response()->json(Category::all());
    }
}