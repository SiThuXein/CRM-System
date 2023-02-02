<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate();
        $max = Product::max("sale_quantity");
        $record = Product::where("sale_quantity",$max)->first();
        return view('admin.product',[
            'products' => $products,
            'max' => $record,
        ]);
    }

    public function product_search(){
        $name = request()->name;
        $products = Product::where('product_name','like',$name.'%')->paginate(7);
        $max = Product::max("sale_quantity");
        $record = Product::where("sale_quantity",$max)->first();

        return view('admin.product',[
            'products' => $products,
            'max' => $record
        ]);
    }

    public function product(){
        $categories = Category::all();
        return view('admin.addProduct',[
            'categories' => $categories
        ]);
    }

    public function add_product(){
        $name = request()->product_name;
        $sale_quantity = request()->sale_quantity;
        $remain_quantity= request()->remain_quantity;
        $category_id = request()->category_id;
        Product::create([
            'product_name' => $name,
            'category_id' => $category_id,
            'sale_quantity' => $sale_quantity,
            'remain_quantity' => $remain_quantity,
            'sold_date' => now()
        ]);

        return redirect("admin/panel/products");
    }

    public function edit_product($id){
        $product = Product::find($id);
        return view('admin.editProduct',[
            "product" => $product
        ]);
    }

    public function update_product($id){
        $product_name = request()->product_name;
        $sale_quantity = request()->sale_quantity;
        $remain_quantity = request()->remain_quantity;
        $created_date = request()->created_date;
        Product::where('id',$id)->update([
            'product_name' => $product_name,
            'sale_quantity' => $sale_quantity,
            'remain_quantity' => $remain_quantity,
            'created_at' => $created_date
        ]);

        return redirect("/admin/panel/products");
    }
    
    public function delete_product($id){
        $product = Product::find($id);
        $product->delete();

        return redirect("/admin/panel/products");
    }
}
