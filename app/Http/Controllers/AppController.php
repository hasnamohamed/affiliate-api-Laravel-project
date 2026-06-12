<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AppController extends Controller
{
    public function getCategories()
    {
        $categories = Category::select('id', 'name')->get();

        return response()->json([
            'categories' => $categories,
        ], 200);
    }
}
