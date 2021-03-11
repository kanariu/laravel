<nav class="navbar navbar-expand-lg navbar-light bg-light rounded mb-4 pl-1 pr-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="row m-0 w-100">
        <div class="col">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('index') }}"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('words.cases')
                </a>
                <div class="dropdown-menu disabled" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item disabled" href="#">@lang('words.case-midtower')</a>
                  <a class="dropdown-item disabled" href="#">@lang('words.case-fulltower')</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('words.motherboards')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item disabled" href="#">@lang('words.mb-miniATX')</a>
                  <a class="dropdown-item disabled" href="#">@lang('words.mb-microATX')</a>
                  <a class="dropdown-item disabled" href="#">@lang('words.mb-ATX')</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('words.processors')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item disabled" href="#">@lang('words.proc-intel')</a>
                  <a class="dropdown-item disabled" href="#">@lang('words.proc-amd')</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('words.memorys')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item disabled" href="#">@lang('words.mem-ddr3')</a>
                  <a class="dropdown-item disabled" href="#">@lang('words.mem-ddr4')</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @lang('words.gpus')
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item disabled" href="#">@lang('words.gpu-nvidia')</a>
                  <a class="dropdown-item disabled" href="#">@lang('words.gpu-amd')</a>
                </div>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <form class="form-inline my-2 w-100 my-lg-0">
            <div class="input-group w-100">
              <input type="text" class="form-control" placeholder="@lang('words.search')" aria-label="search">
              <div class="input-group-append">
                <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</nav>