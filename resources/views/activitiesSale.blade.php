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
<div class="container-fluid pipeline bg-white mt-5" >
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Activities</h5>

        </div>
        <div class="col-md-6 mt-3">
           <div>
               <form action="/admin/user/activities" method="post">
                   @csrf
                   <div class="container">
                       <div class="row">
                           <div class="col-md-6"></div>
                           <div class="col-md-3">
                                <input type="date"  name="date" class="form-control">
                           </div>
                           <div class="col-md-1">
                                <button type="submit" class="btn btn-info">Search</button>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table">
                <tr class="row_1">
                    <th><i class="fa-thin fa-square"></i></td>
                    <th>No</td>
                    <th>Name</td>
                    <td>Type</td>
                    <th>NRC</td>
                    <th>Phone</td>
                    <th>Sale Person</th>
                    <th>Assigned Date</th>
                    <th>Status</th>
                    <th>Action</td>
                </tr>
               
                    @foreach($assign as $c)  
                    @if($c->customer->status == "Closed")
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $c->customer->id }}</td>
                            <td>{{ $c->customer->full_name }}</td>
                            <td>{{ $c->customer->type }}</td>
                            <td>{{ $c->customer->nrc }}</td>
                            <td>{{ $c->customer->phone }}</td>
                            <td>{{ $c->user->username }}</td>
                            <td>{{ $c->assign_date }}</td>
                            <td class="fw-bold text-warning">{{ $c->customer->status }}</td>
                         
                            <td><a href="/admin/customer/detail/{{$c->customer->id}}"><button class="btn btn-sm btn-primary">View Datail</button></a></td>
                       </tr>
                       @endif
                    @endforeach
                       </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            {{ $assign->links() }}
            </div>
    </div>

</div>

@endsection