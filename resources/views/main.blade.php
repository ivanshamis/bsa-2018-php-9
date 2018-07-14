@extends('layout')

@section('title', 'Currency market')

@section('header')
    
@endsection

@section('content-title', 'Currency market')

@section('content') 
    <a class="navbar-brand" href="{{ route('currencies.index') }}">Currencies editor</a>
@endsection