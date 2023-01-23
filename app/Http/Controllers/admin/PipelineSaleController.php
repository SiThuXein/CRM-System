<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assign;

class PipelineSaleController extends Controller
{
    public function index(){
        $assign = Assign::paginate(7);
        return view("pipelineSale",compact(["assign"]));
    }

    public function search_pipeline(){
        $date = request()->date;
        $assign = Assign::where('assign_date',$date)->paginate(7);
        return view("pipelineSale",compact(["assign"]));
    }
}
