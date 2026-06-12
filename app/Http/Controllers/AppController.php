<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Governate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AppController extends Controller
{
    public function getGovernates(): JsonResponse
    {
        $governates = Governate::select('id', 'name')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $governates,
        ]);
    }

    public function getCitiesByGovernate($governateId): JsonResponse
    {
        $cities = City::where('governate_id', $governateId)
            ->select('id', 'name')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $cities,
        ]);
    }
}
