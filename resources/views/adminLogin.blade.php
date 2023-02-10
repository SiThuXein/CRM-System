@extends("layouts.master")
@section("title","Login")

@section("content")

<div class="container-fluid bg-primary" id="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div>
                <h1 class="text-white text-center mt-5"><b>CRM</b></h1>
                <h3 class="text-white text-center"><b>administration panel</b></h3>
            </div>
            <div class="mt-5">
                <form action="/admin/login" method="post">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                @if(session("loginError"))
                                    <div class="form-group">
                                        <div class="alert alert-danger" id="loginError">{{ session("loginError") }}</div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label text-white"><i class="fa fa-user"></i> USERNAME</label>
                                    <input type="text" class="form-control" name="username" >
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="form-label text-white"><i class="fa fa-lock"></i> PASSWORD</label>
                                    <input type="text" class="form-control" name="password" >
                                </div>
                                <button type="submit" name="login" class="btn btn-success mt-3 mb-3">Login</button>
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