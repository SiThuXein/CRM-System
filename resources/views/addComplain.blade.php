@extends("layouts.master")
@extends("layouts.nav")
@section("title","Add Complain")
@include("layouts.footer")

@section("content")

<div class="container bg-white  mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">
            <h6 class="fw-bold">Add Complain</h6>
        </div>
    </div>
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6 mt-3">
            <form action="" method="post">
            @csrf
            @if(session("user"))
            <div class="form-group">
                <div class="alert alert-warning">
                    <h6>{{ session("user") }}</h6>
                </div>
            </div>
            @endif
            <div class="from-group">
                <label for="" class="form-label text-dark">Customer ID</label>
                <input type="text" class="form-control" name="customer_id">
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label text-dark">Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label text-dark">Complain</label>
                <textarea name="complain" id="" cols="77" rows="5"></textarea>
            </div>
            <div class="form-group mt-3 mb-3">
                <label for="" class="form-label text-dark">Created By</label>
                <input type="text" class="form-control" name="created_by">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
</div>

@endsection