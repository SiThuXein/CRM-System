<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assign;
use App\Models\User;

class ReportController extends Controller
{
    public function activities_report(){
        $assign = Assign::paginate(5);
        $user = User::all();
        return view("activitiesReport",compact(["assign","user"]));
     
      
    }

    public function search(){
        $date = request()->date;
        $sale_person = request()->sale_person;
        $res = Assign::all();
        $user = User::all();
        if(isset($date) && !isset($sale_person)){
            $assign = Assign::where('assign_date','like',$date.'%')->paginate(5);
            return view("activitiesReport",compact(["assign","user"]));
        }
        else if(isset($date) && isset($sale_person)){
            foreach($res as $r){
                if($r->user->username == $sale_person){
                    $assign = Assign::where('user_id',$r->user->id)->where('assign_date','like',$date.'%')->paginate(5);
                    return view("activitiesReport",compact(["assign","user"]));
                }
            }
        }
        else if(!isset($date) && isset($sale_person)){
            foreach($res as $r){
                if($r->user->username == $sale_person){
                    $assign = Assign::where('user_id',$r->user->id)->paginate(5);
                    return view("activitiesReport",compact(["assign","user"]));
                }
            }
        }else{
            return redirect()->back()->with("not_found","Result Not Found");
        }
    }

}
