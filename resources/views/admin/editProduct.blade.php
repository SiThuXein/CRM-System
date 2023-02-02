@extends("layouts.master")
@extends("layouts.nav")
@section("title","Dashboard")
@include("layouts.footer")

@section("content")

<div class="container-fluid bg-white">
    <div class="row  mt-3 mb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Edit Product</h5>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/admin/panel/products/edit/{{$product->id}}" method="post">
                @csrf
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Sale Quantity</label>
                    <input type="text" class="form-control"name="sale_quantity" value="{{ $product->sale_quantity }}">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Remain Quantity</label>
                    <input type="text" class="form-control"name="remain_quantity" value="{{ $product->remain_quantity }}">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Created Date</label>
                    <input type="text" class="form-control"name="created_date" value="{{ $product->created_at }}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-3 mb-5">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection