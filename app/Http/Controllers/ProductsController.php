<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function showAll()
    {
        $products = new Product::all();

        return view('product.showPage', ['products' => $products]);
    }
}
