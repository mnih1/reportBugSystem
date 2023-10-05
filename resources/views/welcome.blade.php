@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="start">
        <h2>Welcome!</h2>
        <div class="btnBox">
            <a href="" class="btn filled">Report</a>
            <a href="{{ route('login') }}" class="btn border">Panel</a>
        </div>
    </div>
@endsection