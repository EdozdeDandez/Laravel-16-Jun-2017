@extends('layouts.app')

@section('navigation')
    @if (Auth::guest())
    @else
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('tasks') }}">Tasks</a></li>
        <li><a href="#">My tasks</a></li>
    @endif
@endsection
@section('content')
    <h1>Task management</h1>
@endsection