<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(){
        $product = Product::all();
        $category = Category::all();
        return view("admin.index",compact(['product','category']));
    }
}
