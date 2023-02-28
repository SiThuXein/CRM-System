@extends("layouts.master")
@extends("layouts.nav")
@section("title","Assign")
@include("layouts.footer")

@section("content")

<div class="container bg-white mt-5">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10 mt-3">
            <h5 class="fw-bold">Assign</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="/admin/dashboard/assign" method="post">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Customer Name</label>
                    <input type="text" name="customer_id" value="{{$customer->full_name}}" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="" class="form-label">Staff Name</label>
                    <select name="staff_id" id="" class="form-control">
                        <option value="" class="text-secondary">Choose ...</option>
                    @foreach($user as $u)
                        <option value="{{ $u->id }}">{{ $u->username }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="" class="form-label">Assigned Date</label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="" class="form-label">Remark</label>
                    <textarea name="remark" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Done</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection
