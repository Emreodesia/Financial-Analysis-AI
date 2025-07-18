<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Todo::create([
            'title' => $request->title,
            'completed' => false,
        ]);

        return redirect()->route('todos.index')->with('success', 'Todo oluşturuldu!');
    }

    public function toggle(Todo $todo)
    {
        $todo->update([
            'completed' => !$todo->completed,
        ]);

        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success', 'Todo silindi!');
    }
}
