@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel">
                    <a href="{{ URL::to('/tasks/create') }}">Create New Task</a>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                {{--@if(isset($task))--}}
                        {{--{{ Form::model($task, array('route' => array('tasks.update', $task->id), 'method' => 'PUT')) }}--}}
                            {{--<p>{{ Form::label('editTask', 'Edit task') }}</p>--}}
                            {{--<p>--}}
                                {{--{{ Form::text('editTask', !is_null($task) ? $task->name : null, array('class' => 'form-control')) }}--}}
                                {{--{{ Form::submit('Save changes', array('class' => 'btn btn-primary')) }}--}}
                            {{--</p>--}}
                        {{--{{ Form::close() }}--}}
                {{--@else--}}
                    {{--<form action="" method="POST" class="form-inline">--}}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<p>Add task</p>--}}
                        {{--<p>--}}
                            {{--<input type="text" class="form-control" name="addTask"/>--}}
                            {{--<span><input type="submit" class="btn btn-success" value="Save"/></span>--}}
                        {{--</p>--}}
                    {{--</form>--}}
                {{--@endif--}}
                @if(isset($data))
                    <table class="table">
                        <tr>
                            <th>Tasks</th>
                            <th>Assigned to User ID</th>
                            <th>Action</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->user_id}}</td>
                                <td>
                                    <a href="{{ URL::to('/tasks/' . $row->id . '/edit') }}">Edit | Assign</a> |
                                    <a href="{{ URL::to('/tasks/' . $row->id ) }}">Show</a>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => '/tasks/' . $row->id)) }}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Delete') }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection