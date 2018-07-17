@extends('currencies-show')

@section('content')
    <div class="media-body">
    {!! Form::open([
        'route' => ['currencies.update', $currency['id']],
        'method' => 'PUT'
    ]) !!}
    
    @include('parts/currency-form')
    
    {!! Form::close() !!}
    </div>
@endsection