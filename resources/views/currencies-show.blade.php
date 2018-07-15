@extends('currencies-index')

@section('title'){{ $currency->title }}@endsection

@section('content-title'){{ $currency->title }}@endsection

@section('content')
        <img class="d-flex mr-3 img-fluid" src="{{ $currency['logo_url'] }}">
        <div class="media-body">
         {{ $currency['short_name'] }}
         ${{ $currency['price'] }}
         <br>
         @include('parts/edit-links')
@endsection