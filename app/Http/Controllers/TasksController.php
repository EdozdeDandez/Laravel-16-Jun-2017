<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Session;
use Redirect;
use App\Tasks;
use App\User;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = Tasks::all();
        return view('tasks',['data'=>$data]);
    }
    public function create()
    {
        return view('tasks.create');
    }
    public function store()
    {
        $taskName = Input::get('addTask');
        $description = Input::get('description');
        $data = array(
            'name'=>$taskName,
            'description'=>$description,
        );
        $response = Tasks::create($data);
        if($response)
        {
            Session::flash('message', 'Successfully added Task!');
            return Redirect::to('/tasks');
        }
    }
    public function edit($id)
    {
        $user = User::pluck('name', 'id')->toArray();
        $task = Tasks::findOrFail($id);
        return view('tasks.edit', ['task' => $task, 'user'=>$user]);
    }
    public function update($id)
    {
        $task = Tasks::findOrFail($id);
        $task->name = Input::get('taskName');
        $task->description = Input::get('description');
        $task->user_id = Input::get('user');
        $response = $task->save();
        if ($response)
        {
            //redirect to tasks
            Session::flash('message', 'Successfully updated task!');
            return Redirect::to('/tasks');
        }
    }
    public function show($id)
    {
        $task = Tasks::find($id);
        return view('tasks.show',['task'=>$task]);
    }
    public function destroy($id)
    {
        $task = Tasks::find($id);
        $response = $task->delete();
        if($response)
        {
            // redirect
            Session::flash('message', 'Successfully deleted the task!');
            return Redirect::to('/tasks');
        }
    }
}
