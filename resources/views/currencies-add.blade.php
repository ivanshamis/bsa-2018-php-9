@extends('currencies-index')

@section('title', 'Add new currency')

@section('content-title', 'Add new currency')

@section('content')
    <div class="media-body">
    {!! Form::open(['route' => ['currencies.store']]) !!}
    
    @include('parts/currency-form')       
    
    {!! Form::close() !!}
    </div>
@endsection