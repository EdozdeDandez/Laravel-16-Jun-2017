<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use App\User;
use Auth;


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
        $data = Tasks::where('user_id',intval($id))->get();
        return view('myTasks',['data'=>$data]);
    }
}