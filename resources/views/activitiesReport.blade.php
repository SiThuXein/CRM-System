@extends("layouts.master")
@extends("layouts.nav")
@section("title","Activities")
@include("layouts.footer")

@section("content")

<div class="container-fluid pipeline bg-white" id="pipeline">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-3 ">
           <div>
               <form action="" method="get">
                   @csrf
                   <div class="container">
                       <div class="row">
                            <div class="col-md-2">
                                <label for="" class="fw-bold fs-6">Month</label>
                                <input type="date"  name="name" class="form-control">
                           </div>
                           <div class="col-md-4">
                               <label for="" class="fw-bold fs-6">Sale Person</label><br>
                               <select name="" id="" class="text-center">
                                   <option value="" active>All</option>
                                </select>
                            </div>
                            <div class="col-md-4"></div>
                           <div class="col-md-1">
                                <button type="submit" class="btn btn-info">Search</button>
                           </div>
                           <div class="col-md-1">
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
            <h5 class="fw-bold text-center">Activities Report</h5>
            <h6 class="fw-bold text-secondary text-center">Jan 2022</h6>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table">
                <tr class="row_1">
                    <th><i class="fa-thin fa-square"></i></td>
                    <th>Customer</td>
                    <th>Phone</td>
                    <th>Sale Person</td>
                    <th>Assigned Date</th>
                    <td>Follow Up Date</td>
                    <th>Status</th>
                </tr>
                       
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                       </tr>
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