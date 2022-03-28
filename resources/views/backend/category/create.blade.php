@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-muted">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
    <div class="head bg-muted">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12  d-flex justify-content-between align-items-center">
                    <h5 class="display-5">Create Category</h5>
                  <a href="{{route('categories.index')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> Category List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif

            <div class="form-group">
                <label for="my-input">Category Name</label>
                <input id="my-input" class="form-control @error('category_name') is-invalid @enderror" value="{{ old('category_name') }}" type="text" name="category_name" placeholder="Enter Category Name" required>
                @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-success mt-2">Submit</button>
        </form>
        </div>
    </div>
</div>
{{-- card end --}}

</div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
