<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $products = Product::all();
        return response()->json(['data' => $products,'massage' => 'data is successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Show will error response for (validation errors)
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required',
            'user_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        };

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->user_id = $request->input('user_id');
        $product->save();

        return response()->json(['data' => $product, 'message' => 'Product successfully created'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string|int $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required',
            'user_id' => 'reqiured',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 400);
        }

        if ($request->has('name')) {
            $product->name = $request->input('name');
        }
        if ($request->has('price')) {
            $product->price = $request->input('price');
        }
        if ($request->has('user_id')) {
            $product->user_id = $request->input('user_id');
        }
        
        $product->save();

        return response()->json(['data' => $product, 'message' => 'Product successfully updated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 400);
        }
        $product->delete();
        return response()->json(['message' => 'Product successfully deleted'], 200);
    }
}

