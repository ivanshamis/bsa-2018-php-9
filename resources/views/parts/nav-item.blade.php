@can('view', $currency)
<a class="nav-item nav-link" href="{{ route('currencies.show', ['id' => $currency['id']]) }}">{{ $currency['title'] }}</a>
@endcan