@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","Dashboard/Customers")

@section("content")



<div class="container bg-white mb-5" id="register">
    <div class="row mt-5 pt-3">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h4>Register</h4>
        </div>
    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 mt-3">
          <form action="/admin/user/register" method="post">
              @csrf
              
                @if(session("info"))
                <div class="form-group">
                  <div class="alert alert-success">
                        {{ session("info") }}
                   </div>
                </div>
                      @endif
            
              <div class="form-group">
                  <label for="" class="form-label text-dark">Full name</label>
                  <input type="text" class="form-control" name="full_name">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">NRC</label>
                  <input type="text" class="form-control" name="nrc">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Father Name</label>
                  <input type="text" class="form-control" name="father_name">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Type</label>
                  <select id="register_select" name="type">
                      <option value="personal" active id="option">Personal</option>
                      <option value="business">Business</option>
                  </select>
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Phone / Mobile</label>
                  <input type="text" class="form-control" name="phone">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Date of Birth</label>
                  <input type="date" class="form-control" name="date_of_birth">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Education</label>
                  <input type="text" class="form-control" name="education">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Gender</label>
                  <input type="radio" class="" name="gender" value="male" id="register_gender"> Male 
                  <input type="radio"class="" name="gender" value="female"> Female
                  
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Occupation</label>
                  <input type="text" class="form-control" name="occupation">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Address</label>
                  <input type="text" class="form-control" name="address">
              </div>
              <div class="form-group mt-3">
                  <label for="" class="form-label text-dark">Register By</label>
                  <input type="text" class="form-control" name="user">
              </div>
              <button type="submit" name="register" class="btn btn-primary mt-3 mb-5">Register</button>
          </form>
      </div>
    </div>
</div>

@endsection

