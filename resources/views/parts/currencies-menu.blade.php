    <li class="nav-item">
      <a class="nav-link active" href="{{ route('currencies.index') }}">Currencies</a>
    </li>

    @each('parts/menu-item', $currencies, 'currency')

    @can('create', App\Currency::class)
    <li class="nav-item">
      <a class="nav-link active" href="{{ route('currencies.add') }}">Add</a>
    </li>
    @endcan