<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [];
        $products['products'] = Product::all();
        return view('layouts.index')->with('products', $products); 
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = [];
        $products['products'] = Product::with('categoria')->get();
        $products['categoria'] = Categoria::all();
        
        return view('product.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //se crea el registro usando eloquent
        Product::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'price' => $request->input('price'),
            'categoria_id' => $request->input('categoria'),
        ]);

        return back();



    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product=[];
        $product['product']= Product::find($id);
        return view('product.edit')->with('products', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setBrand($request->input('brand'));
        $product->setColor($request->input('color'));
        $product->setSize($request->input('size'));
        $product->setPrice($request->input('price'));

        $product->save();
        return redirect()->route('product.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
