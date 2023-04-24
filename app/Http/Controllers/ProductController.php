<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index' ,compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required'
        ]);

        Product::create($data);
        return redirect()->route('products.index')->with('success','Product added successfully!');
    }

    public function show(Product $product)
    {

        return view('products.show', compact('product'));

    }


    public function edit(Product $product)
    {

        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required'
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success','Product updated successfully!');
    }


    public function destroy(Product $product)
    {

        $product->delete();
        return back()->with('success','Product deleted successfully!');
    }
}
