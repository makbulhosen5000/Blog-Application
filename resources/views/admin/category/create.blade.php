@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Category') }}
                    <a href="{{route('category.index')}}" class="btn btn-info float-end">All Category</a>
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="my-input">Category Name</label>
                            <input id="my-input" class="form-control" type="text" name="category_name">
                        </div>
                        <div class="form-group">
                            <label for="my-input">Category Slug</label>
                            <input id="my-input" class="form-control" type="text" name="category_slug">
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Submit</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
