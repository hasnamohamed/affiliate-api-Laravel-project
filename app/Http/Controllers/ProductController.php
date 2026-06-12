<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Product::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => ['nullable', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'total_amount' => ['required', 'integer', 'min:0'],
            'commission' => ['nullable', 'numeric', 'min:0'],
            'image' => ['nullable', 'string'],
            'is_best_seller' => ['nullable', 'boolean'],
            'is_new_arrival' => ['nullable', 'boolean'],
        ]);

        $data['code'] = 'PRD' . strtoupper(Str::random(6));

        $product = Product::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Product created successfully',
            'data' => $product,
        ], 201);
    }

    public function show(Product $product)
    {
        return response()->json([
            'success' => true,
            'data' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'category_id' => ['nullable', 'exists:categories,id'],
            'name' => ['sometimes', 'string', 'max:255'],
            'price' => ['sometimes', 'numeric', 'min:0'],
            'total_amount' => ['sometimes', 'integer', 'min:0'],
            'commission' => ['sometimes', 'numeric', 'min:0'],
            'image' => ['nullable', 'string'],
            'is_best_seller' => ['sometimes', 'boolean'],
            'is_new_arrival' => ['sometimes', 'boolean'],
        ]);

        $product->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Product updated successfully',
            'data' => $product->fresh(),
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully',
        ]);
    }
}
