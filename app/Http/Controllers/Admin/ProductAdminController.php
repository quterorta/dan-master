<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderBy('id')->get();

        return view('admin.product.index', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('image')->store('products');

        $new_product = new Product();
        $new_product->title = $request->input('title');
        $new_product->article = $request->input('article');
        $new_product->description = $request->input('description');
        $new_product->image = $path;
        $new_product->reccomend = $request->input('reccomend');

        $new_product->save();

        return redirect()->back()->withSuccess('Ваш товар добавлен!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
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

        if ($request->file('image')) {
            $path = $request->file('image')->store('products');
        } else {
            $path = $request->input('hidden-image');
        }

        // $path = $request->file('image')->store('products');

        $product->title = $request->input('title');
        $product->article = $request->input('article');
        $product->description = $request->input('description');
        $product->image = $path;
        $product->reccomend = $request->input('reccomend');

        $product->save();

        return redirect()->back()->withSuccess('Товар успешно изменен!');
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
        return redirect()->back()->withSuccess('Товар успешно удален!');
    }
}
