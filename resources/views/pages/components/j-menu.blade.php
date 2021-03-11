<div class="jumbotron p-0 jb-menu">
    <div class="row m-0">
        <div class="col p-0">
            <ul class="list-group list-group-flush w-100 rounded">
                <li class="list-group-item">@lang('words.cases')</li>
                <li class="list-group-item">
                    <div class="d-flex flex-column">
                        @foreach ($menu_cases as $case)
                            <a href="#" class="btn btn-link text-left disabled">{{ $case->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="list-group-item">@lang('words.motherboards')</li>
                <li class="list-group-item">
                    <div class="d-flex flex-column">
                        @foreach ($menu_mbs as $mb)
                            <a href="#" class="btn btn-link text-left disabled">{{ $mb->name }}</a>
                        @endforeach
                    </div>
                </li>
              </ul>
        </div>        
    </div>
</div>