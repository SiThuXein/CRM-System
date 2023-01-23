@extends("layouts.master")
@extends("layouts.nav")
@section("title","Activities")
@include("layouts.footer")

@section("content")

@if(session("not_found"))
<div class="containers">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="alert alert-warning">{{ session("not_found") }}</div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endif

<div class="container-fluid pipeline bg-white" id="pipeline">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-3 ">
           <div>
               <form action="/admin/dashboard/product/report" method="post">
                   @csrf
                   <div class="container">
                       <div class="row">
                           <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <label for="" class="fw-bold fs-6">Date</label>
                                <input type="date"  name="start_date" class="form-control">
                           </div>
                           <div class="col-md-2">
                               <label for="" class="fw-bold fs-6">Sale Person</label><br>
                               <select name="sale_person" id="" class="text-center">
                                   <option value="" active>All</option>
                                   @foreach($user as $u)
                                        <option value="{{ $u->id }}" >{{ $u->username }}</option>
                                    @endforeach
                                    </select>
                            </div>
                         
                            <div class="col-md-2"></div>    
                           <div class="col-md-1 mt-3">
                                <button type="submit" class="btn btn-info">Search</button>
                           </div>
                           <div class="col-md-1 mt-3">
                                <button type="submit" class="btn btn-warning">Reset</button>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5 mb-5">
            <h5 class="fw-bold text-center">Summary Product Sold Report</h5>
            <h6 class="fw-bold text-secondary text-center"></h6>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table">
                <tr class="row_1">
                    <th><i class="fa-thin fa-square"></i></td>
                    <th>Product Name</td>
                    <th>Total Sold</th>
                </tr>
                @foreach($user as $u)
                <tr>
                    <td>{{ $u->username }}</td>
                </tr>
                @foreach($u->product as $p)
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $p->product_name }}</td>                     
                           

                @endforeach
                <td>{{ count($u->product) }}</td>
                       </tr>

                @endforeach
                       </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        </div>
    </div>

</div>

@endsection