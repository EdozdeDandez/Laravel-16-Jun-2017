@extends('layouts.app')
@section('content')
    <h2>Edit task</h2>
    {{ Form::model($task, array('route' => array('tasks.update', $task->id), 'method' => 'PUT')) }}
    <div class="form-group">
        {{ Form::label('taskName', 'Task name:') }}
        {{ Form::text('taskName', !is_null($task) ? $task->name : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('user', 'Performed by:') }}
        {{ Form::select('user', $user, !is_null($task) ? $task->user_id : null, array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('description', 'Description:') }}
        {{ Form::text('description', !is_null($task) ? $task->description : null, array('class' => 'form-control')) }}
    </div>
    {{ Form::submit('Save changes', array('class' => 'btn btn-primary')) }}
    <a class="btn btn-danger" href="{{ URL::to('/tasks') }}">Cancel</a>
    {{ Form::close() }}
@endsection