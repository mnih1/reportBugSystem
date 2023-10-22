@extends('layouts.dashboardLayout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <script src="{{ asset('js/dashNav.js') }}" defer></script>
@endsection

@section('nav')
    @include('includes.dashboardNav')
@endsection

@section('content')

    {{-- <div class="start">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a  :href="route('logout')" 
            onclick="event.preventDefault();
            this.closest('form').submit();">Wyloguj</a>
        </form>
    </div> --}}
@endsection