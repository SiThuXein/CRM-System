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
            $user = User::where('crm_role','sale')->get();
            // dd($product[0]->user);
            // $user = $u[0]->product[0]->product_name;
            return view("summaryProductSold",compact(['product','user']));
    }
}
