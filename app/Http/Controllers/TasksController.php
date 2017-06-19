<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Tasks;

class TasksController extends Controller
{
    public function index()
    {
        $data = Tasks::all();
        return view('tasks')->with('data',$data);
    }
    public function store()
    {
        $taskName = Input::get('addTask');
        $data = array(
            'Name'=>$taskName,
            'status'=>'Incomplete'
        );
        $response=Tasks::create($data);
        if($response)
        {
            return redirect()->back();
        }
    }
}
