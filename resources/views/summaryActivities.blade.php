@extends("layouts.master")
@extends("layouts.nav")
@section("title","Activities")
@include("layouts.footer")

@section("content")

<!-- @if(session("not_found"))
<div class="containers">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="alert alert-warning">{{ session("not_found") }}</div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
@endif -->

<div class="container-fluid pipeline bg-white" id="pipeline">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-3 ">
           <div>
               <form action="/admin/dashboard/summary/activities" method="post">
                   @csrf
                   <div class="container">
                       <div class="row">
                           <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <label for="" class="fw-bold fs-6">Date</label>
                                <input type="date"  name="date" class="form-control">
                           </div>
                           <div class="col-md-2">
                               <label for="" class="fw-bold fs-6">Sale Person</label><br>
                               <select name="sale_person" id="" class="text-center">
                                   <option value="" active>All</option>
                                   @foreach($user as $ur)
                                        <option value="{{ $ur->username }}" >{{ $ur->username }}</option>
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
            <h5 class="fw-bold text-center">Summary Activities Report</h5>
            <h6 class="fw-bold text-secondary text-center"></h6>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <tr class="row_1">
                    <th><i class="fa-thin fa-square"></i></td>
                    <th>Sale Person</th>
                    <th>Pending Customer</th>
                    <th>Closed Customer</th>
                    <th>Total Customer</th>
                </tr>
                <tr>
                </tr>
                @foreach($user as $u)
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $u->username }}</td>
                            <td class="text-end">{{ $count_1 = count($u->customer->where("status","Pending"))  }}</td>
                            <td class="text-end">{{ $count_2 = count($u->customer->where("status","Closed"))  }}</td>
                            <td class="text-end">
                                {{ $count_1 + $count_2 }}
                            </td>
                       
                       </tr>
                    @endforeach
                    <!-- @foreach($user as $u)
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $u->username }}</td>
                            <td class="text-end">{{ $count_1 = count($u->customer->where("status","Pending")->where("start_date",request()->start_date))  }}</td>
                            <td class="text-end">{{ $count_2 = count($u->customer->where("status","Closed")->where("start_date",request()->start_date))  }}</td>
                            <td class="text-end">
                                {{ $count_1 + $count_2 }}
                            </td>
                       
                       </tr>
                       @endforeach -->
          

                <tr>
                    <td colspan="2" class="text-center">Total</td>
                    <td class="text-end fw-bold">{{ $pending_customer }}</td>
                    <td class="text-end fw-bold">{{ $close_customer }}</td>
                    <td class="text-end fw-bold">{{ $total_customer }}</td>
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