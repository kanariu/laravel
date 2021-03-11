<div class="jumbotron p-4 w-100">
    <div class="row">
        <div class="col">
            @if ($locale == 'en')
                <p class="h5">{{ $product->name_en }}</p>
            @endif
            @if ($locale == 'pt')
                <p class="h5">{{ $product->name_pt }}</p>
            @endif
        </div>
    </div>
    <hr class="mb-4 mt-0">
    <div class="row d-flex align-items-stretch">
        <div class="col-md-6">
            <img src="{{ $product->img_link }}" alt="" class="img-fluid p-4" width="500" height="500">
        </div>
        <div class="col-md-6">
            <div class="card bg-dark">
                <div class="card-title">
                    <div class="row m-0 p-3">
                        <div class="col-md-3">
                            @if ($product->promotion == 'S')
                                @if (date($today) >= date($product->expire_promotion))
                                    <i class="fas fa-clock fa-7x text-danger"></i> 
                                @else
                                    <i class="fas fa-clock fa-7x text-warning"></i>
                                @endif
                            @else
                                <i class="fas fa-star fa-7x text-primary"></i>
                            @endif
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                            @if ($product->promotion == 'S')
                                <span class="text-white">@lang('words.promotion-expire')</span>
                                @if (date($today) >= date($product->expire_promotion))
                                    <span class="h2 text-danger">@lang('words.expired')</span>
                                @else
                                    <div id="timer">
                                        <div id="text-success" class="countdown"></div>
                                    </div>
                                @endif
                            @else
                                <span class="text-white">@lang('words.highlight-item')</span>
                                <span class="display-4 text-primary">@lang('words.item')</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row m-0 p-3">
                        <div class="col d-flex flex-column">
                            @if ($product->promotion == 'S')
                                @if (date($today) >= date($product->expire_promotion))
                                    <del><span class="h1 text-success">@lang('words.coin') {{ number_format($product->promotion_price,2) }}</span></del>
                                    <span class="display-4 text-primary">@lang('words.coin') {{ number_format($product->price,2) }}</span>
                                @else
                                    <span class="text-warning">@lang('words.from') @lang('words.coin') {{ number_format($product->price,2) }} @lang('words.to')</span>
                                    <span class="display-4 text-success">@lang('words.coin') {{ number_format($product->promotion_price,2) }}</span>
                                @endif
                            @else
                                <span class="display-4 text-success">@lang('words.coin') {{ number_format($product->price,2) }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row m-0 p-3">
                        <div class="col">
                            <button class="btn btn-secondary btn-lg btn-block">@lang('words.add-cart')</button>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-success btn-lg btn-block">@lang('words.buy')</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row m-0 p-3">
                        <div class="col text-white">
                            <span>@lang('words.payment')</span>
                        </div>
                    </div>
                    <div class="row m-0 p-3 text-secondary">
                        <div class="col">
                            <i class="fas fa-barcode fa-2x"></i>
                        </div>
                        <div class="col">
                            <i class="fab fa-cc-visa fa-2x"></i>
                        </div>
                        <div class="col">
                            <i class="fab fa-cc-mastercard fa-2x"></i>
                        </div>
                        <div class="col">
                            <i class="fab fa-cc-paypal fa-2x"></i>
                        </div>
                        <div class="col">
                            <i class="fab fa-google-pay fa-2x"></i>
                        </div>
                        <div class="col">
                            <i class="fab fa-cc-apple-pay fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function makeTimer() {


        var endTime = new Date("{{ $product->expire_promotion }}");			
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400); 
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $(".countdown").html("<span class='h2 text-warning'>" + days + "d " + hours + ":" + minutes + ":" + seconds + "</span>");

    }

    setInterval(function() { makeTimer(); }, 1000);
</script>