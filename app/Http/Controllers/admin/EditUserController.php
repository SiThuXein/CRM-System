<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class EditUserController extends Controller
{
    // public function __construct(){
    //     return $this->middleware("auth");
    // }
    public function index($id){
        $username = session()->get("username");
        $u = User::where("username",$username)->first();
      
        $user = User::find($id);
        return view("EditUser",compact(['user']));
    }

    public function edit($id){
        $user = User::find($id);
        $staff_id = request()->staff_id;
        $name = request()->name;
        $role = request()->role;
        $crm_role = request()->crm_role;
        $branch = request()->branch;

        User::where('id',$id)->update([
            'staff_id' => $staff_id,
            'username' => $name,
            'role' => $role,
            'crm_role' => $crm_role,
            'branch' => $branch
        ]);

        return redirect('/admin/dashboard/teamlist');
    }
}
