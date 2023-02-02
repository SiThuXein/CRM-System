<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate();
        return view('admin.category',compact(['categories']));
    }

    public function category_search(){
        $name = request()->name;
        $categories = Category::where('category_name','like',$name.'%')->paginate(7);

        return view('admin.category',compact(['categories']));
    }

    public function category(){
        return view('admin.addCategory');
    }

    public function add_category(){
        $name = request()->category_name;
        Category::create([
            'category_name' => $name,
        ]);

        return redirect("admin/panel/categories");
    }

    
    public function edit_category($id){
        $category = Category::find($id);
        return view('admin.editCategory',[
            "category" => $category
        ]);
    }

    public function update_category($id){
        $category_name = request()->category_name;
        Category::where('id',$id)->update([
            'category_name' => $category_name
        ]);

        return redirect("/admin/panel/categories");
    }
    
    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();

        return redirect("/admin/panel/categories");
    }

}
