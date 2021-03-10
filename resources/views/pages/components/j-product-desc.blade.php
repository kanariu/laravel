<div class="jumbotron p-4 w-100">
    <div class="row">
        <div class="col">
            <p class="h5">@lang('words.desc')</p>
        </div>
    </div>
    <hr class="mb-4 mt-0">
    <div class="row d-flex align-items-stretch">
        <div class="col">
            <span>
                {!! str_replace('\n', '<br>', $product->description) !!}
            </span>
        </div>
    </div>
</div>