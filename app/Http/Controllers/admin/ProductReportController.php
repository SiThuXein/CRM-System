<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Assign;
use App\Models\Product;

class ProductReportController extends Controller
{
    public function product_report(){
        $user = User::all();
        $product = Product::all();
        $assign = Assign::paginate(5);
        return view("productSoldReport",compact(["user","assign","product"]));
    
    }

    public function search_report(){
        $date = request()->date;
        $sale_person = request()->sale_person;
        $product_id = request()->product;
        $res = Assign::all();
        $user = User::all();
        $product = Product::all();
        
    
        if(isset($date) && !isset($sale_person)){
                $assign = Assign::where('assign_date','like',$date.'%')->paginate(5);
                return view("productSoldReport",compact(["user","assign","product"]));
        }
        else if(!isset($date) && isset($sale_person) ){

            foreach($res as $r){
                if($r->user->username == $sale_person){
                    $assign = Assign::where('user_id',$r->user->id)->paginate(5);
                    return view("productSoldReport",compact(["user","assign","product"]));
                }
            }   

        }
        else if(isset($date) && isset($sale_person)){
            foreach($res as $r){
                if($r->user->username == $sale_person){
                    $assign = Assign::where('user_id',$r->user->id)->where('assign_date','like',$date.'%')->paginate(5);
                    return view("productSoldReport",compact(["user","assign","product"]));
                }
            }
        }
        else if(!isset($date) && !isset($sale_person) && isset($product)){
                        $assign = Assign::where('product_id',$product_id)->paginate(5);
                        return view("productSoldReport",compact(["user","assign","product"]));
                
            
            
        }
        else if(isset($date) && isset($sale_person) && isset($product)){
            foreach ($res as $r){
                if($r->user->username == $sale_person){
                    if($r->product->product_name == $product){
                        $assign = Assign::where('use_id',$r->user->id)->where('product_id',$r->product->id)->where('assign_date','like',$date.'%')->paginate(5);
                        return view("productSoldReport",compact(["user","assign","product"]));
                    }
                }
            }
        }
 
        else{
            return redirect()->back()->with("not_found","Result Not Found");
        }
    }
}
