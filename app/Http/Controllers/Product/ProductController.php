<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Utils\Product;
use Session;

class ProductController extends Controller
{
    public function view(string $id){
        $product = Product::where('id', $id)->first();

        return view('pages.product.product-item', array(
            'locale' => config('app.locale'),
            'product' => $product,
            'guest' => Session::get('guest'),
        ));
    }
}
