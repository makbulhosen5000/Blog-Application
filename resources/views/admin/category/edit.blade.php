@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Category') }}
                    <a href="{{route('categories.index')}}" class="btn btn-info float-end">All Category</a>
                </div>

                <div class="card-body">
                    <form action="{{route('categories.update',$categoryEdit->id)}}" method="POST">
                       @csrf
                       <input type="hidden" name="_method" value="PATCH">
                       @if(Session::has('success'))
                       <div class="alert alert-success" role="alert">
                           {{Session::get('success')}}
                       </div>
                       @endif

                        <div class="form-group">
                            <label for="my-input">Category Name</label>
                            <input id="my-input" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{$categoryEdit->category_name}}" type="text" required>
                            @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Update</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
