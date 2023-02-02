@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","")

@section("content")

<div class="container-fluid bg-white">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-2 mt-3">
            <h5 class="fs-5 fw-bold ">Products [ {{ count($products) }} ]</h5>
        </div>
        <div class="col-md-2 mt-3">
            <h5 class="fs-6 fw-bold">Most Seller Product</h5>
            <h6 class="text-success ">{{ $max->product_name }}</h6>
        </div>
        <div class="col-md-5 mt-3">
           <div>
               <form action="/admin/panel/products" method="post">
                   @csrf
                   <div class="container">
                       <div class="row">
                           <div class="col-md-4"></div>
                           <div class="col-md-5">
                                <input type="text" class="form-control" name="name">
                           </div>
                           <div class="col-md-2">
                                <button type="submit" class="btn btn-info text-end">Search</button>
                           </div>
                        
                       </div>
                   </div>
                </form>
           </div>
        </div>
        <div class="col-md-2 mt-3">
           <a href="/admin/panel/products/add"><button class="btn btn-primary">Add Product</button></a>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table">
                <tr class="row_1">
                    <th><i class="fa-thin fa-square"></i></th>
                    <th>No</td>
                    <th>Product Name</th>
                    <th>Sale Quantity</th>
                    <th>Remain Quantity</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
                       @foreach($products as $product)
                       
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->sale_quantity }}</td>
                            <td>{{ $product->remain_quantity }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="/admin/panel/products/edit/{{ $product->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="/admin/panel/products/delete/{{ $product->id }}"><i class="fa-solid fa-trash"></i></a>
                            </td>
                       </tr>
                       @endforeach
                   </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                {{ $products->links() }}
        </div>
    </div>

</div>

@endsection