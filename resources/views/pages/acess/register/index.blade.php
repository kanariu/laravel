@extends('layouts.base')

@section('body-content')
    
    <div class="container-fluid vh-100 p-0">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand text-white" href="{{ route('index') }}"><i class="fas fa-chevron-left p-4"></i></a>
        </nav>
        <div class="container">
            @include('layouts.h-container')

            <div class="jumbotron">
                <form action="{{ route('createUser') }}" method="POST">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="i_name">@lang('words.name')</label>
                        <input type="text" class="form-control" id="i_name" name="i_name" placeholder="@lang('words.name')" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="i_birthdate">@lang('words.birthdate')</label>
                        <input type="date" class="form-control" id="i_birthdate" name="i_birthdate" placeholder="@lang('words.birthdate')" required>
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="i_cpf">@lang('words.cpf')</label>
                            <input type="text" class="form-control" id="i_cpf" name="i_cpf" placeholder="@lang('words.cpf')" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="i_email">@lang('words.email')</label>
                            <input type="email" class="form-control" id="i_email" name="i_email" placeholder="@lang('words.email')" required>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="i_ddd">@lang('words.ddd')</label>
                            <input type="text" class="form-control" id="i_ddd" name="i_ddd" placeholder="@lang('words.ddd')" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="i_phone">@lang('words.phone')</label>
                            <input type="text" class="form-control" id="i_phone" name="i_phone" placeholder="@lang('words.phone')" required>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="i_address">@lang('words.address')</label>
                      <input type="text" class="form-control" id="i_address" name="i_address" placeholder="@lang('words.address')" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="i_username">@lang('words.username')</label>
                          <input type="text" class="form-control" id="i_username" name="i_username" placeholder="@lang('words.username')" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="i_password">@lang('words.password')</label>
                          <input type="password" class="form-control" id="i_password" name="i_password" placeholder="@lang('words.password')" required>
                        </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="i_city">@lang('words.city')</label>
                        <input type="text" class="form-control" id="i_city" name="i_city" placeholder="@lang('words.city')" required>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="i_state">@lang('words.state')</label>
                        <select id="i_state" name="i_state" class="form-control" required>
                            <option selected>@lang('words.choose')</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->state }}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="i_zipcode">@lang('words.zipcode')</label>
                        <input type="text" class="form-control" id="i_zipcode" name="i_zipcode" placeholder="@lang('words.zipcode')" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">@lang('words.register')</button>
                </form>
            </div>
        </div>
    </div>
@endsection