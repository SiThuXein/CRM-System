@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","Detail")

@section("content")


<div class="container mt-5  bg-white detail">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-7 mt-5">
            <h5 class="fs-5 fw-bold"><i class="fa fa-user"></i> {{ auth()->user()->username }}</h5>
        </div>
       
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-2 mt-5 mb-5">
            <div>
                <h5 class="fs-6">Email</h5>
                <h5 class="fs-6">Staff ID</h5>
                <h5 class="fs-6">Role</h5>
                <h5 class="fs-6">CRM Role</h5>
                <h5 class="fs-6">Branch</h5>
                <h5 class="fs-6">Phone</h5>
            </div>
        </div>
        <div class="col-md-2 mt-5">
                <h5 class="fs-6 fw-bold">: </h5>
                <h5 class="fs-6 fw-bold">: {{ auth()->user()->staff_id }}</h5>
                <h5 class="fs-6 fw-bold">: {{ auth()->user()->role }}</h5>
                <h5 class="fs-6 fw-bold">: {{ auth()->user()->crm_role }}</h5>
                <h5 class="fs-6 fw-bold">: {{ auth()->user()->branch }}</h5>
                <h5 class="fs-6 fw-bold">: </h5> 

        </div>
        <div class="col-md-1"></div>
 
    </div>
</div>


@endsection