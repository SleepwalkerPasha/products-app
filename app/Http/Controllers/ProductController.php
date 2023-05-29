<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller {

    public function getProductById(string $code) : View
    {
        $product = Product::where('code', $code)->firstOrFail();
        return view('product')->with('product', $product);
    }
}