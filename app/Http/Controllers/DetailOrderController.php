<?php

namespace App\Http\Controllers;

use App\Models\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Resources\DetailOrderResource;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetailOrderResource::collection(DetailOrder::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail_order = DetailOrder::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Detail_order created successfully!",
            'detail_order' => $detail_order
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailOrder $detailOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailOrder $detailOrder)
    {
    // Elimina lo user// Elimina lo user
        $detailOrder->delete();

        return response()->json(['message' => 'User successfully deleted.'], 200);
   
    }
}
