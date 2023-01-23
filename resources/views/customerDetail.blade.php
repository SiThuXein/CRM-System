@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","Detail")

@section("content")

<div class="container mt-3 bg-white">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-6    ">
                        <h6 class="fs-6 fw-bold mt-3">Activities</h6>
                    </div>
                    <div class="col-md-4 mt-3 text-end">
                        <div>
                            <a href=""><button class="btn btn-sm btn-info">Back</button></a>
                            <!-- <a href=""><button class="btn btn-sm btn-primary">Comment</button></a> -->
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 mt-3 mb-3">
                        <h6 class="fs-6"><i class="fa fa-circle"></i> Have other accounts?</h6>
                        <h6 class="fs-6"><i class="fa fa-circle"></i> Greet the customer?</h6>
                        <h6 class="fs-6"><i class="fa fa-circle"></i> Listen and ask question?</h6>
                        <h6 class="fs-6"><i class="fa fa-circle"></i> Recommened account or service?</h6>
                        <h6 class="fs-6"><i class="fa fa-circle"></i> Cross sell?</h6>
                        <h6 class="fs-6"><i class="fa fa-circle"></i> Thanks customers?</h6>
                        
                    </div>
                    <div class="col-md-3 mt-3">
                        <form action="/admin/customer/detail/{{$customer->id}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$customer->id}}" name="customer_id">
                            <input type="radio" name="input1" value="yes">Yes  <input type="radio" name="input1" value="no">No <br>
                            <input type="radio" name="input2" value="yes">Yes  <input type="radio" name="input2" value="no">No <br>
                            <input type="radio" name="input3" value="yes">Yes  <input type="radio" name="input3" value="no">No <br>
                            <input type="radio" name="input4" value="yes">Yes  <input type="radio" name="input4" value="no">No <br>
                            <input type="radio" name="input5" value="yes">Yes  <input type="radio" name="input5" value="no">No <br>
                            <input type="radio" name="input6" value="yes">Yes  <input type="radio" name="input6" value="no">No <br>

                    </div>
                    <div class="col-md-3 mt-3 text-end mb-3">
                            <textarea name="comment" id="" cols="35" rows="6" placeholder="Enter comment"></textarea>
                            <a href="/admin/customer/detail"></a><button class="btn btn-sm btn-primary mt-3 ">submit</button>

                        </form>
                    </div>
                </div>
            </div>


<div class="container mt-5  bg-white detail">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7 mt-5">
            <h5 class="fs-6 fw-bold">Customer Profile</h5>
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

<!-- <div class="container mt-3 detail_2">
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
</div> -->

@endsection