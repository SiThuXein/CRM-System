@extends("layouts.master")
@extends("layouts.nav")
@section("title","Pipeline")
@include("layouts.footer")

@section("content")

<div class="container-fluid pipeline bg-white" >
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Pipeline</h5>

        </div>
        <div class="col-md-6 mt-3">
           <div>
               <form action="/admin/dashboard/pipeline" method="post">
                   @csrf
                   <div class="container">
                       <div class="row">
                           <div class="col-md-4">
                               <select name="sale_person" id="" class="text-center">
                                <option value="" active class="text-secondary">Choose sale person</option>
                                   @foreach($user as $u)
                                        <option value="{{$u->id}}">{{ $u->username }}</option>
                                   @endforeach
                                </select>
                            </div>
                           <div class="col-md-4">
                               <select name="status" id="" class="text-center">
                                   <option value="" active class="text-secondary">Choose status</option>
                                   <option value="Pending">Pending</option>
                                   <option value="Closed">Closed</option>
                               </select>
                           </div>
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
                            <td>{{ $a->customer->status }}</td>
                            <td><a href=""><button class="btn btn-sm btn-primary">View Datail</button></a></td>
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