<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('admin.pages.products');
    }
    public function add_product()
    {
        return view('admin.pages.add-product');
    }
}
