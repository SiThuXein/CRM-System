@extends("layouts.master")
@extends("layouts.nav")
@section("title","Team List")
@include("layouts.footer")

@section("content")

<div class="container-fluid pipeline bg-white" >
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Team List</h5>

        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table table-striped">
                <tr class="row_1">
                    <th>No</td>
                    <th>Staff ID</td>
                    <th>Name</th>
                    <th>Role</td>
                    <th>CRM Role</td>
                    <th>Branch</th>
                    <th>Action</td>
                </tr>
                @foreach($Admin as $admin)
                       <tr class="row_2">
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->staff_id }}</td>
                            <td>{{ $admin->username }}</td>
                            <td>{{ $admin->role }}</td>
                            <td>{{ $admin->crm_role }}</td>
                            <td>{{ $admin->branch }}</td>
                            <td><a href="/admin/dashboard/teamlist/edit/{{ $admin->id }}"><i class="fa fa-pen-to-square"></i></a></td>
                       </tr>
                @endforeach
                       </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                {{ $Admin->links() }}
        </div>
    </div>
</div>

@endsection