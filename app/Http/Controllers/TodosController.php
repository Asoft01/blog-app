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

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        // dd($request()->all());
        $this->validate();
        
        $data = $request->all();

        // dd($data); die;
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('/todos');
    }
}
