@extends('layouts.app')

@section('navigation')
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ URL::to('/tasks') }}">Tasks</a></li>
    <li><a href="{{ route('task') }}">My tasks</a></li>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
@endsection
