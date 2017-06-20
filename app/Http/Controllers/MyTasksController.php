<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use App\User;


class MyTasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('myTasks');
    }
    public function show()
    {
        $id = Auth::user()->id;
        $data = Tasks::where('User_id',$id);
        return view('myTasks')->with('data',$data);
    }
}