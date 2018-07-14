@extends('layout')

@section('title', 'Currency market')

@section('header')
    @component('parts/header-wrapper')
     <div class="navbar-header">
         <a class="navbar-brand" href="{{ route('currencies.index') }}">Currencies</a>
     </div>
     <div class="navbar-nav">
         @each('parts/nav-item', $currencies, 'currency')
         <a class="nav-item nav-link active" href="{{ route('currencies.add') }}">Add</a>
     </div>
    @endcomponent
@endsection

@section('content-title', 'Currency market')

@section('content') 
                @if (count($currencies) === 0)
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">No currencies</h4>
                </div>
                 @else
                    <ul class="list-unstyled">
                        @each('parts/list-item', $currencies, 'currency')
                    </ul>
                @endif
@endsection