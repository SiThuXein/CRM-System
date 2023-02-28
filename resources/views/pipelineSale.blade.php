@extends("layouts.master")
@extends("layouts.nav")
@section("title","Pipeline")
@include("layouts.footer")

@section("content")

<div class="container-fluid pipeline bg-white mt-5" >
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Pipeline</h5>

        </div>
        <div class="col-md-6 mt-3">
           <div>
               <form action="/admin/user/pipeline" method="post">
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
                    <th>NRC</td>
                    <th>Phone</td>
                    <th>Sale Person</th>
                    <th>Assigned Date</th>
                    <th>Status</th>
                    <th>Action</td>
                </tr>
                    @foreach($assign as $a)
                    @if($a->customer->status == "Pending")
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->customer->full_name }}</td>
                            <td>{{ $a->customer->nrc }}</td>
                            <td>{{ $a->customer->phone }}</td>
                            <td>{{ $a->user->username }}</td>
                            <td>{{ $a->assign_date }}</td>
                            @if($a->customer->status == "Pending")
                                <td>{{ $a->customer->status }}</td>
                            @else
                                <td class="text-warning fw-bold">{{ $a->customer->status }}</td>
                            @endif
                            <td><a href="/admin/customer/detail/{{$a->customer->id}}"><button class="btn btn-sm btn-primary">View Datail</button></a></td>
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
        </div>
    </div>

</div>

@endsection