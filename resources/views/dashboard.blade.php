@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="start">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a  :href="route('logout')" 
            onclick="event.preventDefault();
            this.closest('form').submit();">Wyloguj</a>
        </form>
    </div>
@endsection