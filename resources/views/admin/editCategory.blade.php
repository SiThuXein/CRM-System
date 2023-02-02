@extends("layouts.master")
@extends("layouts.nav")
@section("title","Dashboard")
@include("layouts.footer")

@section("content")

<div class="container-fluid bg-white">
    <div class="row  mt-3 mb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Edit Category</h5>
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="/admin/panel/categories/edit/{{$category->id}}" method="post">
                @csrf
                <div class="form-group mt-3 mb-3">
                    <label for="" class="form-label text-dark">Category Name</label>
                    <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary mt-3 mb-5">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection