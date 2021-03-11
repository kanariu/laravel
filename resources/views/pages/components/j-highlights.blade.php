<div class="jumbotron p-4 jb-high">
    <div class="row">
        <div class="col">
            <p class="h5">@lang('words.highlights')</p>
        </div>
    </div>
    <hr class="mb-4 mt-0">
    <div class="row d-flex align-items-stretch">
        @foreach ($highlights as $highlight)
          <div class="col-md-4 align-items-stretch">
            <div class="card d-flex mt-3">
                <img class="card-img-top img-fluid p-3" src="{{ asset('products/' . $highlight->img_link . '.png') }}" alt="Card image cap">
                <div class="card-body">
                    <div>
                        @if ($locale == 'en')
                            <h5 class="card-title">{{ $highlight->name_en }}</h5>
                        @endif
                        @if ($locale == 'pt')
                            <h5 class="card-title">{{ $highlight->name_pt }}</h5>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <p class="h2 text-success">@lang('words.coin') {{ number_format($highlight->price, 2) }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('product-item', [ 'id' => $highlight->id ]) }}" class="btn btn-warning btn-block">@lang('words.checknow')</a>
                </div>
              </div>
          </div>
        @endforeach
    </div>
</div>