@can('view', $currency)
<li class="nav-item">
    <a class="nav-link" href="{{ route('currencies.show', ['id' => $currency['id']]) }}">{{ $currency['title'] }}</a>
</li>
@endcan