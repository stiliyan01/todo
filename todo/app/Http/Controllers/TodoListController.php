<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class TodoListController extends Controller
{

    public function index()
    {
        $todoList = TodoList::all();
        return view('home', compact('todoList'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'task' => "required"
        ]);
        TodoList::create($data);
        return back();
    }


    public function destroy(TodoList $todolist)
    {
        $todolist->delete();
        return back();
    }
}
