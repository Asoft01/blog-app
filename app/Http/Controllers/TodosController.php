<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
        // fetch all todos from the database

        // display them in the todos.index page
        $todos = Todo::all();
        // return view('todos.index')->with('todos', $todos);
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId){
        // $todo = Todo::find($todoId);
        return view('todos.show')->with('todo', Todo::find($todoId));
    }
}
