<div class="row m-0 pt-3 pb-3">
  <div class="col-md-7">
    @if ($guest == 'N')
      <a href="{{ route('profile') }}" class="btn btn-link text-white">@lang('words.profile')</a>
    @endif
  </div>
  <div class="col-md-2">
    @if ($guest == 'S' || $guest == '')
      <a href="{{ route('login') }}" class="btn btn-link text-white">@lang('words.login')</a>
      <a href="{{ route('register') }}" class="btn btn-link text-white">@lang('words.register')</a>
    @else
      <a href="{{ route('orders') }}" class="btn btn-link text-white">@lang('words.orders')</a>
      <a href="{{ route('logout') }}" class="btn btn-link text-white">@lang('words.exit')</a>
    @endif
  </div>
  <div class="col-md-3 bg-dark p-1 text-white rounded d-flex justify-content-around">
    <div class="row m-0 w-100">
      <div class="col-md-2 p-1 d-flex justify-content-center align-items-center">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <div class="col p-1 d-flex justify-content-center align-items-center">
        <small>CARRINHO</small>
      </div>
      <div class="col-md-2 p-1 d-flex justify-content-center align-items-center">
        <small><i class="fas fa-chevron-right"></i></small>
      </div>
      <div class="col p-1 d-flex justify-content-center align-items-center">
        <a href="#" class="btn btn-link btn-sm text-white"><small>0 ITENS</small></a>
      </div>
    </div>
  </div>
</div>