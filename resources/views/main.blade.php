@extends('layouts.app')

@section('title', 'Currency market')

@section('content')
    @guest
        Please <a href="{{ route('currencies.index') }}">login</a> to view currencies.
    @else
        You can view <a href="{{ route('currencies.index') }}">currencies</a> now!
    @endguest
@endsection