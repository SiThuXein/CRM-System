@extends("layouts.master")
@section("title","Register")

@section("content")

<div class="container bg-primary" id="admin_register">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div>
                <h1 class="text-white text-center"><b>CRM</b></h1>
                <h3 class="text-white text-center"><b>administration panel</b></h3>
            </div>
            <div class="mt-5">
                <form action="/admin/register" method="post">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              
                             @if(session("info"))
                                <div class="form-group">
                                <div class="alert alert-success">
                                        {{ session("info") }}
                                </div>
                                </div>
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label text-white">Name</label>
                                    <input type="text" class="form-control" name="name" >
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label text-white">Staff ID</label>
                                    <input type="text" class="form-control" name="staff_id" >
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="form-label text-white">Role</label>
                                    <select  name="role">
                                        <option   active class="text-secondary fs-6">Choose Role ...</option>
                                        <option value="manager">Manager</option>
                                        <option value="teller">Teller</option>
                                        <option value="flo">FLO</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="form-label text-white">CRM Role</label>
                                    <select  name="crm_role">
                                        <option  active class="text-secondary fs-6">Choose CRM Role ...</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Sale">Sale</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="form-label text-white">Branch</label>
                                    <select name="branch">
                                        <option  active class="text-secondary fs-6">Choose Branch...</option>
                                        <option value="Head Office">Head Office</option>
                                        <option value="Taungyi">Taungyi</option>
                                        <option value="Banmaw">Banmaw</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label text-white">Password</label>
                                    <input type="password" class="form-control" name="password" >
                                </div>
                                <button type="submit" name="login" class="btn btn-success mt-3 mb-3">Register</button>
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                    </div>
               
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection