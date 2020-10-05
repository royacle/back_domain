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

                    {{ __('Add New Sub-Category') }}
                        <form action="{{ route('subcategory.store')}}" method="POST">
                            @csrf
                            <div class="form-group mt-4">
                                <label for="category name">Select Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="" selected>Select a Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->categoryname}}</option>
                                    @endforeach
                                </select>
                                @error('categoryname')
                                    <div class="error text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-4">
                                <label for="subcategory name">Enter Sub Category name</label>
                                <input type="text" class="form-control" name="subcategoryname" placeholder="Enter sub category name">
                                @error('subcategoryname')
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
