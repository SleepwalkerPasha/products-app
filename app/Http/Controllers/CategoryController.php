<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller {
    
    public function getAllProductsByCategory(string $code, Request $request) : View
    {
        $category = Category::where('code', $code)->firstOrFail();
        if ($category->activity == false) {
            abort(404);
        }
        $productsIds = Category::where('code', '=', $category->id)
                        ->pluck('id')
                        ->paginate($request['page_size']);

        
        $from = $request['lowest_price'];
        $to = $request['higest_price'];
        $products = Product::whereIn('id', $productsIds)
                        ->whereBetween('price',[$from, $to])
                        ->get()->toArray();

        return view('category')->with('products', $products)->with('category', $category);
    }


}