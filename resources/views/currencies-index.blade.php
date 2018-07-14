@extends('layouts.app')

@section('title', 'Currency market')

@section('header')
    @include('parts/currencies-navbar')    
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