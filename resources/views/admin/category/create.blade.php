@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Category') }}
                    <a href="{{route('categories.index')}}" class="btn btn-info float-end">All Category</a>
                </div>

                <div class="card-body">
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
    </div>
</div>
@endsection
