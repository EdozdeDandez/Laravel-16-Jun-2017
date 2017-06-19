@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="" method="POST" class="form-inline">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>Add task</p>
                    <p>
                        <input type="text" class="form-control" name="addTask"/>
                        <span><input type="submit" class="btn btn-success" value="Save"/></span>
                    </p>
                </form>
                <table class="table">
                    <tr>
                        <th>Tasks</th>
                        <th>Assigned to User ID</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $row)
                        <tr>
                            <td>{{$row->Name}}</td>
                            <td>{{$row->User_id}}</td>
                            <td>
                                <a href="#">Assign</a> | <a href="#">Edit</a> | <a href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection