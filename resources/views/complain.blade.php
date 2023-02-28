@extends("layouts.master")
@extends("layouts.nav")
@section("title","Complain")
@include("layouts.footer")

@section("content")

<div class="container-fluid pipeline bg-white mt-5" >
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-5 mt-3">
            <h5 class="fs-5 fw-bold ">Complain</h5>

        </div>
        @if(auth()->user()->role == "teller")
        <div class="col-md-5 mt-3 text-end">
            <a href="/admin/dashboard/complain/add"><button class="btn btn-primary">Add Complain</button></a>
        </div>
        @endif
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table table-striped">
                <tr class="row_1">
                    <th>No</td>
                    <th>Customer ID</td>
                    <th>Phone</th>
                    <th>Complain</td>
                    <th>Created By</td>
                    <th>Created At</th>
                </tr>
                @foreach($complains as $complain)
                    <tr>
                        <td>{{ $complain->id }}</td>
                        <td>{{ $complain->customer_id }}</td>
                        <td>{{ $complain->phone }}</td>
                        <td>{{ $complain->complain }}</td>
                        <td>{{ $complain->created_by }}</td>
                        <td>{{ $complain->created_at }}</td>
                    </tr>
                @endforeach
                       </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
               {{ $complains->links() }}
        </div>
    </div>
</div>

@endsection