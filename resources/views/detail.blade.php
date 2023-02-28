@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","Detail")

@section("content")

<div class="container mt-5  bg-white detail mt-5">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7 mt-5">
            <h5 class="fs-5 fw-bold">Customer Profile</h5>
        </div>
        <div class="col-md-4 mt-5 text-center">
            <div>
                <a href="/admin/dashboard/customer/pending"><button class="btn btn-sm btn-info">Back</button></a>
                <a href="/admin/dashboard/assign/{{$customer->id}}"><button class="btn btn-sm btn-primary">Assign</button></a>
                <button class="btn btn-sm btn-warning">Close</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 mt-5 mb-5">
            <div>
                <h5 class="fs-6">Name</h5>
                <h5 class="fs-6">NRC</h5>
                <h5 class="fs-6">Father Name</h5>
                <h5 class="fs-6">Type</h5>
                <h5 class="fs-6">Phone</h5>
            </div>
        </div>
        <div class="col-md-2 mt-5">
                <h5 class="fs-6 fw-bold">: {{ $customer->full_name }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->nrc }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->father_name }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->type }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->phone }}</h5> 

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2 mt-5">
                <h5 class="fs-6">Date of Birth</h5>
                <h5 class="fs-6">Education</h5>
                <h5 class="fs-6">Gender</h5>
                <h5 class="fs-6">Occupation</h5>
                <h5 class="fs-6">Opening Date</h5>
        </div>
        <div class="col-md-2 mt-5">
                <h5 class="fs-6 fw-bold">: {{ $customer->date_of_birth }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->education }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->gender }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->occupation }}</h5>
                <h5 class="fs-6 fw-bold">: {{ $customer->created_at }}</h5>
        </div>
    </div>
</div>

<div class="container  bg-white detail_2">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="container">
                <div class="row div1">
                    <div class="col-md-2">
                        <table class="table">
                            <td class="fs-6 "><a href="">Address</a></td>
                            <td class="fs-6"><a href="">Products</a> </td>
                            <td class="fs-6 "><a href="">Cards</a></td>
                        </table>
                    </div>
                </div>
                <div class="row bg-white div2">
                    <div class="col-md-4 ">
                        <h5 class="fs-6">Contact Address</h5>
                        <h5 class="fs-6">Permanent Address</h5>
                        <h5 class="fs-6">Business Address</h5>
                    </div>
                    <div class="col-md-6">
                        <h5 class="fs-6 fw-bold">: {{ $customer->address }}</h5>
                        <h5 class="fs-6 fw-bold">: {{ $customer->address }}</h5>
                        <h5 class="fs-6 fw-bold">: {{ $customer->address }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection