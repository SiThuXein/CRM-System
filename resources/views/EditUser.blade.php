@extends("layouts.master")
@extends("layouts.nav")
@section("title","Team List")
@include("layouts.footer")

@section("content")

<div class="container bg-white mt-5">
    <div class="row">
        <!-- <div class="col-md-2"></div> -->
            <div class="col-md-12 mt-3">
                <h5 class="fs-5 fw-bold ">Edit User</h5>
            </div>
        

    </div>
    <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="/admin/dashboard/teamlist/edit/{{ $user->id }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Staff ID</label>
                        <input type="text" class="form-control" name="staff_id" value="{{ $user->staff_id }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->username }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Role</label>
                        <input type="text" class="form-control" name="role" value="{{ $user->role }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">CRM Role</label>
                        <input type="text" class="form-control" name="crm_role" value="{{ $user->crm_role }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="" class="form-label">Branch</label>
                        <input type="text" class="form-control" name="branch" value="{{ $user->branch }}">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-5">Edit</button>
                </form>
            </div>
    </div>
</div>

@endsection