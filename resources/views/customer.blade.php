@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","Dashboard/Customers")

@section("content")

<div class="container-fluid customer bg-white mt-5">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Customers</h5>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
           <div>
               <form action="/admin/dashboard/customers/" method="post">
                   @csrf
                   <div class="container">
                       <div class="row">
                           <div class="col-md-4"></div>
                           <div class="col-md-5">
                                <input type="text" class="form-control" name="name">
                           </div>
                           <div class="col-md-2">
                                <button type="submit" class="btn btn-info text-end">Search</button>
                           </div>
                        
                       </div>
                   </div>
                </form>
           </div>
        </div>
        @if(auth()->user()->role == "teller")
        <div class="col-md-1 mt-3">
           <a href="/admin/user/register"><button class="btn btn-primary">New</button></a>
        </div>
        @endif
        <div class="col-md-1"></div>
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
                    <th>Branch</td>
                    <th>Opening Date</td>
                    <th>Status</th>
                    <th>Action</td>
                </tr>
                       @foreach($customers as $customer)
                       
                       <tr class="row_2">
                            <th><i class="fa-thin fa-square"></i></td>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->full_name }}</td>
                            <td>{{ $customer->nrc }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td></td>
                            <td>{{ $customer->created_at }}</td>
                            <td>{{ $customer->status }}</td>
                            <td><a href="/admin/dashboard/customer/detail/{{ $customer->id }}"><button class="btn btn-sm btn-primary">View Datail</button></a></td>
                       </tr>
                       @endforeach
                   </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                {{ $customers->links() }}
        </div>
    </div>

</div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

    </script>

@endsection

