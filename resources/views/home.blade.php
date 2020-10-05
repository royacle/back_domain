@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div class="inline-block">
                        {{ __('Dashboard') }}
                    </div>

                    <div class="inline-block">
                        <form class="" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </div>
                    
                </div>

                
                <div class="card-body">

                    {{ __('You are logged in!') }}
                    <div class="d-flex align-items-between">
                        <a href="{{ route('category.create')}}" class="btn btn-success w-50 m-1">Add New Category</a>
                        <a href="{{ route('subcategory.create')}}" class="btn btn-primary w-50 m-1">Add New Sub-Category</a>
                    </div>
                    <div class="d-flex align-items-between">
                        <a href="{{ route('category.index')}}" class="btn btn-success w-50 m-1">Show Categories</a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
