@extends('currencies-index')

@section('title', 'Add new currency')

@section('content-title', 'Add new currency')

@section('content')
    <div class="media-body">
    <form method="POST" action="{{ route('currencies.store') }}">
        @include('parts/currency-form')       
    </form>
    </div>
@endsection