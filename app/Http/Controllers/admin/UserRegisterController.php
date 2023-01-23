<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserRegisterController extends Controller
{
    public function index(){
        return view("adminRegister");
    }

    public function create(){
        $name = request()->name;
        $staff_id = request()->staff_id;
        $role = request()->role;
        $crm_role = request()->crm_role;
        $branch = request()->branch;
        $password = request()->password;

        
        $user = User::create([
            "staff_id" => $staff_id,
          "username" => $name,
          "password" => $password,
          "role" => $role,
          "crm_role" => $crm_role,
          "branch" => $branch,
        ]);

        $role = $user->assignRole($role);
        $role->givePermissionTo('edit info');

        return redirect("/admin");
    }
}
