@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">
                        {{ __('Categories') }}
                    </div>

                    <div class="inline-block">
                        <a href="{{ route('home')}}" class="btn btn-secondary">Back</a>
                    </div>
                    
                </div>

                
                <div class="card-body">

                    {{ __('Add New Category') }}
                        <form action="{{ route('category.store')}}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="category name">Enter Category name</label>
                                <input type="text" class="form-control" name="categoryname" placeholder="Enter category name">
                                @error('categoryname')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
