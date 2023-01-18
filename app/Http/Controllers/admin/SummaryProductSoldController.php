<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class SummaryProductSoldController extends Controller
{
    public function summary_product_sold(){
        $product = Product::all();
        $user = User::all();
        return view("summaryProductSold",compact(['product','user']));
    }
}
