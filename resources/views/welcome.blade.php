@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center">
                <div class="py-3"><h1>Link Building is very important part of web design in <span class="textmaincolor">SEO</span>.</h1></div>
                <div class="">
                    <h4>Every little thing helps. Submit your domain and enjoy increased traffic.<h4>
                </div>
                <div class="py-5"><a href="{{ route('domain.create')}}" class="btn btn-primary">Submit Domain</a></div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end align-items-center">
                    <img class="banner py-5 pl-5" src="{{ asset('img/computer.jpg')}}" alt="main image">
                    {{-- <div class="banner"></div> --}}
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <h2 class="font-weight-border py-5">Categories</h2>

            <example-component></example-component>
        </div>
    </div>
    
@endsection