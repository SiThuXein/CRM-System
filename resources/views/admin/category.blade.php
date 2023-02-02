@extends("layouts.master")
@extends("layouts.nav")
@include("layouts.footer")
@section("title","")

@section("content")

<div class="container-fluid customer bg-white">
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-4 mt-3">
            <h5 class="fs-5 fw-bold ">Categories [ {{ count($categories) }} ]</h5>
        </div>
        <div class="col-md-5 mt-3">
           <div>
               <form action="/admin/panel/categories" method="post">
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
        <div class="col-md-2 mt-3">
           <a href="/admin/panel/categories/add"><button class="btn btn-primary">Add Category</button></a>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row mt-3">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <table class="table">
                <tr class="row_1">
                    <th><i class="fa-thin fa-square"></i></th>
                    <th>No</td>
                    <th>Category Name</th>
                    <th>Created Date</th>
                    <th>Action</th>
                </tr>
                       @foreach($categories as $category)
                       
                       <tr class="row_2">
                            <td><i class="fa-thin fa-square"></i></td>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a href="/admin/panel/categories/edit/{{ $category->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="/admin/panel/categories/delete/{{ $category->id }}"><i class="fa-solid fa-trash"></i></a>
                            </td>
                       </tr>
                       @endforeach
                   </table>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                {{ $categories->links() }}
        </div>
    </div>

</div>

@endsection