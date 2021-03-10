@extends('layouts.base')

@section('body-content')
    <div class="container vh-100">
        @include('layouts.h-navbar3')
        @include('layouts.h-container')
        @include('layouts.h-navbar2')
        <div class="row m-0 d-flex align-items-start">
            @include('pages.components.j-product-list')
        </div>
    </div>
@endsection