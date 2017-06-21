@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                @if(isset($data))
                    <div class="panel-heading text-center">
                        <a href="{{ route('task') }}">Hide tasks</a>
                    </div>
                    <table class="table">
                        <tr>
                            <th>My Tasks</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <div class="panel-heading text-center">
                        <a href="{{ route('mine') }}">Show All my Tasks</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection