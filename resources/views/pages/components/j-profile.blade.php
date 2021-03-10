<div class="jumbotron p-4 w-100">
    <div class="row">
        <div class="col">
            <p class="h5">@lang('words.profile')</p>
        </div>
    </div>
    <hr class="mb-4 mt-0">
    <div class="row d-flex align-items-stretch">
        <div class="col-md-6">
            <ul class="list-group list-group-flush rounded">
                <li class="list-group-item">@lang('words.info')</li>
                <li class="list-group-item">
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.name')</div>
                        <div class="col">{{  ucwords(strtolower($user->name)) }}</div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.cpf')</div>
                        <div class="col">{{  ucwords(strtolower($user->cpf)) }}</div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.birthdate')</div>
                        <div class="col">{{  $user->birthdate }}</div>
                    </div>
                </li>
                <li class="list-group-item">@lang('words.address')</li>
                <li class="list-group-item">
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.street')</div>
                        <div class="col">{{  ucwords(strtolower($user->address)) }}</div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.state')</div>
                        <div class="col">{{ ucwords(strtolower($user->city)) }}</div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.state')</div>
                        <div class="col">{{ $state->state }}</div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.zipcode')</div>
                        <div class="col">{{ $user->zipcode }}</div>
                    </div>
                </li>
                <li class="list-group-item">@lang('words.contact')</li>
                <li class="list-group-item">
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.email')</div>
                        <div class="col">{{ $user->email }}</div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-3">@lang('words.phone')</div>
                        <div class="col">{{ $user->ddd }} {{ $user->phone }}</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
        </div>
    </div>
</div>