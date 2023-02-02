@extends("layouts.master")
@extends("layouts.nav")
@section("title","Dashboard")
@include("layouts.footer")

@section("content")

<div class="container admin_dashboard">
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/menu.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text">{{ count($category) }}</h4>
                <a href="/admin/panel/categories" class="text-decoration-none"><h6 class="text-primary fw-bold text2">All Categories</h6></a>
            </div>
        </div>
        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/feature.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text" >{{ count($product) }}</h4>
                <a href="/admin/panel/products" class="text-decoration-none"><h6 class="text-primary fw-bold">All Products</h6></a>
            </div>
               
        </div>

        <div class="col-md-1"></div>
    </div>
</div>

@endsection
