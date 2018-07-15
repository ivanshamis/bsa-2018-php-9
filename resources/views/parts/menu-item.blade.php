@can('view', $currency)
@if ($route = route('currencies.show', ['id' => $currency['id']])) @endif
<li class="nav-item">
    <a class="nav-link {{ \App\Helpers\Helper::setActive($route) }}" href="{{ $route }}">{{ $currency['title'] }}</a>
</li>
@endcan