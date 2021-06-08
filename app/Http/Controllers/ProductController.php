<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    public function create(Request $req) {

        $path = $req->file('image')->store('products');

        $product = new Product();
        $product->title = $req->input('title');
        $product->article = $req->input('article');
        $product->image = $path;
        $product->description = $req->input('description');
        $product->reccomend = $req->input('reccomend');

        $product->save();

        return redirect()->route('home')->with('success', 'Ваш товар добавлен');

    }

    public function allProducts() {
        $paginate = 12;
        $products_list = Product::paginate($paginate);
        return view('catalog', ['products' => $products_list]);
    }

    public function homeProductView() {
        $products_list = new Product;
        return view('main', ['recommend_products' => $products_list->where('reccomend', 1)->orderBy('id', 'desc')->take(4)->get()]);
    }

    public function getProduct($id) {
        $product = new Product;
        return view('product-view', ['product' => $product->find($id)]);
    }

}
