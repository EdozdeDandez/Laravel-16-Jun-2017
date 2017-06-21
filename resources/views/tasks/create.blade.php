@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>Create a Task</h2>

                {{ Form::open(array('url' => '/tasks')) }}
                <div class="form-group">
                    {{ Form::label('addTask', 'Task Name:') }}
                    {{ Form::text('addTask', null, array('class' => 'form-control')) }}
                </div>
                <div class="form-group">
                    {{ Form::label('description', 'Description:') }}
                    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                </div>
                     {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection