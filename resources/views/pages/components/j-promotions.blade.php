<div class="jumbotron p-4 jb-promo">
    <div class="row">
        <div class="col">
          <p class="h5">@lang('words.promotions')</p>
        </div>
    </div>
    <hr class="mb-4 mt-0">
    <div class="row d-flex align-items-stretch">
        @foreach ($promotions as $promotion)
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card d-flex mt-3">
                <img class="card-img-top img-fluid p-3" src="{{ $promotion->img_link }}" alt="Card image cap">
                <div class="card-body">
                  <div>
                    @if ($locale == 'en')
                      <h5 class="card-title">{{ $promotion->name_en }}</h5>
                    @endif
                    @if ($locale == 'pt')
                      <h5 class="card-title">{{ $promotion->name_pt }}</h5>
                    @endif
                  </div>
                </div>
                <div class="card-footer">
                  <div>
                    <p class="h6 text-muted w-100"><small>@lang('words.from') @lang('words.coin') {{ number_format($promotion->price, 2) }} @lang('words.to')</small></p>
                    <p class="h2 text-violet w-100">@lang('words.coin') {{ number_format($promotion->promotion_price, 2) }}</small></p>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="{{ route('product-item', [ 'id' => $promotion->id ]) }}" class="btn btn-dark btn-block align-self-end">@lang('words.checknow')</a>
                </div>
              </div>
          </div>
        @endforeach
    </div>
</div>