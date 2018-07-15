@can('view', $currency)
<li class="media my-4">
    <img class="d-flex mr-3 img-fluid" src="{{ $currency['logo_url'] }}">
    <div class="media-body">
        <h5 class="mt-0 mb-1">
            <a href="{{ route('currencies.show', ['id' => $currency['id']]) }}">{{ $currency['title'] }}</a>
        </h5>
        {{ $currency['short_name'] }}
        ${{ $currency['price'] }}
        <br>
        @include('parts/edit-links')
    </div>
</li>
@endcan