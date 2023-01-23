@extends("layouts.master")
@extends("layouts.nav")
@section("title","Dashboard")
@include("layouts.footer")

@section("content")

<div class="container-fluid admin_dashboard">
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/group.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text">{{ count($pending_customer) }}</h4>
                <a href="/admin/dashboard/customer/pending" class="text-decoration-none"><h6 class="text-secondary fw-bold text2">Pending Customers</h6></a>
            </div>
        </div>
        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/user.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text" >{{ count($closed_customer) }}</h4>
                <a href="/admin/dashboard/customer/closed" class="text-decoration-none"><h6 class="text-primary fw-bold">Closed Customers</h6></a>
            </div>
               
        </div>

        <div class="col-md-3 col">
            <div class="div1">
                <img src="{{ asset('images/messages.png') }}" alt="" class="image">
            </div>
            <div class="div2">
                <h4 class="text">{{ count($complain) }}</h4>
                <a href="/admin/dashboard/complain"><h6 class="text-danger fw-bold">Complains</h6></a>
            </div>
                
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection