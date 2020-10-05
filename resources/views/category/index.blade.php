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

                        {{-- @foreach ($category as $cat)
                            <h4>{{ $cat->categoryname }}</h4>
                            <ul>
                                @foreach ($cat->subcategory as $subcat)
                                    <li>{{ $subcat->subcategoryname }}</li>
                                @endforeach
                            </ul>
                            
                        @endforeach --}}
                        <categories-component :category="{{$category}}"></categories-component>
                        {{-- <example-component :category="{{$category}}"></example-component> --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
