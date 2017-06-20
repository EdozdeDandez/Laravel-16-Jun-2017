@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h2>Task details</h2>
        <p>
            <strong>Name:</strong> {{ $task->name }}<br>
            <strong>Description:</strong> {{ $task->description }}<br>
            <strong>Assigned to user id:</strong> {{ $task->user_id }}<br>
            <strong>Date created:</strong> {{ $task->created_at }}
        </p>
    </div>
@endsection