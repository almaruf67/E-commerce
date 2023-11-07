<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::get();
        // p($products);
        return response()->json($products, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //p($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = product::findOrFail($id);
        p($product);

        if ($product!=null) {
            return response()->json(
                [
                    "message" => "Product Found",
                    'data'=>$product,
                    "status" => 1,
                ],200
            );
        } else {
            // User with the given email does not exist
            return response()->json(
                [
                    "message" => "Product Not Found",
                    "status" => 0
                ],401
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
