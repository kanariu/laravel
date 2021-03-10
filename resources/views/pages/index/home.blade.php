@extends('layouts.base')

@section('body-content')
    <div class="container vh-100">
        @include('layouts.h-navbar3')
        @include('layouts.h-container')
        @include('layouts.h-navbar2')
        <div class="row m-0 d-flex align-items-start">
            <div class="col-md-9 pl-0">
                @include('pages.components.j-promotions')
                @include('pages.components.j-highlights')
            </div>
            <div class="col-md-3 pr-0">
                @include('pages.components.j-menu')
            </div>
        </div>
    </div>
@endsection