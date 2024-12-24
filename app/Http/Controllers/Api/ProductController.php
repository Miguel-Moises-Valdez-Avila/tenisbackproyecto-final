<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Product::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
        ]);

        return response()->json("Producto registrado", 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setBrand($request->input('brand'));
        $product->setColor($request->input('color'));
        $product->setSize($request->input('size'));
        $product->setPrice($request->input('price'));

        $product->save();

        return response()->json("Producto actualizado", 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Product::destroy($id);
        return response()->json("Producto eliminado", 200);


    }
}
