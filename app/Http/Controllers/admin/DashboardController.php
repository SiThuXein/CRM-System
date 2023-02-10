<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Complain;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        $pending_customer = Customer::where("status","Pending")->get();
        $closed_customer = Customer::where("status","Closed")->get();
        $complain = Complain::all();
        $product = Product::all();
        $user = User::all();
        foreach($product as $p){
            if($p->product_name == "uab Pay/Pay+"){
                $pay = $p->sale_quantity;
            }
    
            if($p->product_name == "Fix Deposit"){
                $fix_deposit = $p->sale_quantity;
            }
            else{
                $fix_deposit = 0;
            }

            if($p->product_name == "Current Account"){
                $current_account = $p->sale_quantity;
            }
            else{
                $current_account = 0;
            }

            if($p->product_name == "ZeeGwat Account"){
                $zeegwat_account = $p->sale_quantity;
            }
            else{
                $zeegwat_account = 0;
            }

            if($p->product_name == "Call Deposit"){
                $call_deposit = $p->sale_quantity;
            }
            else{
                $call_deposit = 0;
            }

            if($p->product_name == "Debit Card"){
                $debit_card = $p->sale_quantity;
            }
            else{
                $debit_card = 0;
            }

            if($p->product_name == "Prepaid/Gift Card"){
                $prepaid = $p->sale_quantity;
            }
            else{
                $prepaid = 0;
            }
        }

        $role1 = User::where('role', 'manager')->get();
        $role2 = User::where('role', 'teller')->get();
        $role3 = User::where('role', 'admin')->get();

        return view("adminDashboard",[
            'pending_customer' => $pending_customer,
            'closed_customer' => $closed_customer,
            'complain' => $complain,
            'product' => $product,
            'pay' => $pay,
            'fix_deposit' => $fix_deposit,
            'current_account' => $current_account,
            'zeegwat_account' => $zeegwat_account,
            'call_deposit' => $call_deposit,
            'debit_card' => $debit_card,
            'prepaid' => $prepaid,
            'role1' => $role1,
            'role2' => $role2,
            'role3' => $role3
        ]);
    }
}
