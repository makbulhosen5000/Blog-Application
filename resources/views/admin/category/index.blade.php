@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Category List') }}
                    <a href="{{route('category.create')}}" class="btn btn-info float-end">+Add Category</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>Category Name</td>
                                <td>Category Slug</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>101</td>
                                <td>Book</td>
                                <td>Slug</td>
                                <td>
                                    <a href="" class="btn btn-success">Show</a>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Danger</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
