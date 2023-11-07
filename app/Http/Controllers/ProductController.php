<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'asc')->paginate(10);
        return view('Admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view('Admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //For Image

        $file = $request->poster;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extension;
            $file->move('images/product', $fileName);
            $path = '/images/product/' . $fileName;
        } else {
            $path = null;
        }

        $product = new Product();

        $product->category_id = $request->category_id;
        $product->Title = $request->title;
        $product->Poster = $path;
        $product->Description = $request->description;
        $product->Price = $request->price;
        $product->Short_Description = $request->short_description;
        $product->Old_Price = $request->old_price;

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($data)
    {
        $product = Product::where('id', $data)->first();

        // dd($product);
        return view('Admin.product.details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = category::all()->where('status', 1);
        return view('Admin.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $file = $request->poster;
        if ($file) {
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(1, 999999) . '.' . $extension;
            $file->move('images/product', $fileName);
            $product->Poster = '/images/product/' . $fileName;
        }

        $product->category_id = $request->category_id;
        $product->Title = $request->title;
        $product->Short_Description = $request->short_description;
        $product->Description = $request->description;
        $product->Price = $request->price;

        $product->save();

        return redirect()->route('product.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back();
    }
}
