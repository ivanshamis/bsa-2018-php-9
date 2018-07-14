<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
         <a class="navbar-brand" href="{{ route('currencies.index') }}">Currencies</a>
    </div>
    <div class="navbar-nav">
         @each('parts/nav-item', $currencies, 'currency')
         <a class="nav-item nav-link active" href="{{ route('currencies.add') }}">Add</a>
    </div>
  </div>
</nav>