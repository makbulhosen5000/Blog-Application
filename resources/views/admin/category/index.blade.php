@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category List') }}
                    <a href="{{route('categories.create')}}" class="btn btn-info float-end">+Add Category</a>
                </div>

                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>Category Name</td>
                                <td>Category Slug</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allCategory as $key=> $category)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->category_slug}}</td>
                                <td>
                                    <a href="{{route('categories.show',$category->id)}}" class="btn btn-success">Show</a>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a>
                                    <!-- start form for delete  -->
                                    <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                                        @csrf
                                        @if(Session::has('success'))
                                        <div class="alert alert-primary" role="alert">
                                            {{Session::get('success')}}
                                        </div>
                                        @endif
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
