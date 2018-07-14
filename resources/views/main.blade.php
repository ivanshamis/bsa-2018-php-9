@extends('layouts.app')

@section('title', 'Currency market')

@section('content')
    @guest
        <a href="{{ route('currencies.index') }}">Login to currency editor</a>
    @else
        <a href="{{ route('currencies.index') }}">Currency editor</a>
    @endguest
@endsection