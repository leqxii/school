@extends('layout')

@section('navigatie')
    <nav>
        <ul>
            <li class="{{ Request::path() === '/' ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="{{ Request::path() === 'about' ? 'active' : '' }}"><a href="/about">Over Ons</a></li>
            <li class="{{ Request::path() === 'contact' ? 'active' : '' }}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
@endsection

@section('content')
    <h1>Over Ons</h1>
@endsection
