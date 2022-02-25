<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Product::paginate(10);
        return view('product.index', [
            'models' => $models
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'ar_name' => 'required',
           'en_name' => 'required',
           'image' => 'required',
        ]);
        $model = Product::create([
            'ar_name' => $request->ar_name,
            'en_name' => $request->en_name,
            'price' => $request->price,
            'qty' => $request->qty,
            'image' => $request->file('image')->store('products/sss'),
        ]);

        return redirect(route('product.index', $model));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $model = Product::find($product->id);
        return view('product.show', [
            'model' => $model,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', [
            'model' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'ar_name' => 'required',
            'en_name' => 'required',
            'price' => 'required',
        ]);
        $product->ar_name = $request->ar_name;
        $product->en_name = $request->en_name;
        $product->price = $request->price;

        $product->save();

        return redirect(route('product.index', $product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }


    public function add_specs()
    {
        return view('product._add_specs', [
            'id' => $_GET['id'],
        ]);
    }
}
