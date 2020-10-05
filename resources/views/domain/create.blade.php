@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row py-5">
            <div class="w-100">
                <div class="text-center">
                    Add domain and related details here
                </div>
                <domain-component :categories="{{$categories}}" :subcategories="{{$subcategories}}"></domain-component>
            </div>
        </div>
    </div>
    
@endsection