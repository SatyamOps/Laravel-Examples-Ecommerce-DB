<?php

namespace App\Http\Controllers\Public;

use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        dd('rere');
    }

    public function show(Product $product) {}
}
