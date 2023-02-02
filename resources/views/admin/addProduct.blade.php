@extends("layouts.master")
@extends("layouts.nav")
@section("title","Dashboard")
@include("layouts.footer")

@section("content")

<div class="container-fluid bg-white">
    <div class="row  mt-3 mb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Add Product</h5>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/admin/panel/products/add" method="post">
                @csrf
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Product Name</label>
                    <input type="text" class="form-control" name="product_name">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Sale Quantity</label>
                    <input type="text" class="form-control" name="sale_quantity">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Remain Quantity</label>
                    <input type="text" class="form-control" name="remain_quantity">
                </div>
                <div class="form-group">
                    <label for="" class="form-label text-dark">Category ID</label>
                    <select name="category_id" style="width:485px;height:35px;border:1px solid #ccc;border-radius:3px">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-3 mb-5">Add</button>
            </form>
        </div>
    </div>
</div>

@endsection