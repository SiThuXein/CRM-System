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
            $users = User::where('crm_role','sale')->get();
            // dd($product[0]->user);
            // $user = $u[0]->product[0]->product_name;
            return view("summaryProductSold",compact(['product','user','users']));
    }
    public function summary_product_search(){
        $date = request()->date;
        $sale_person = request()->sale_person;
        $product = Product::all();
        $users = User::where('crm_role','sale')->get();
        if(isset($date) && !isset($sale_person)){
            $user = User::where('crm_role','sale')->where('created_at','like',$date.'%')->get();
            return view("summaryProductSold",[
                'product' => $product,
                'user' => $user,
                'users' => $users 
            ]);
        }
        else if(!isset($data) && isset($sale_person)){
            $user = User::where('crm_role','sale')->where('username',$sale_person)->get();
            return view("summaryProductSold",[
                'product' => $product,
                'user' => $user,
                'users' => $users 
            ]);
        }
        else{
            return redirect()->back()->with('not_found','Result Not Found');
        }
      
    }
}
