@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if(isset($data))
                    <div class="panel">
                        <a href="{{ route('task') }}}">Hide tasks</a>
                    </div>
                    <table class="table">
                        <tr>
                            <th>My Tasks</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->Name}}</td>
                            </tr>
                        @endforeach
                    </table>
                @endif
                    <div class="panel">
                        <a href="{{ route('mine') }}}">Show All my Tasks</a>
                    </div>
            </div>
        </div>
    </div>
@endsection