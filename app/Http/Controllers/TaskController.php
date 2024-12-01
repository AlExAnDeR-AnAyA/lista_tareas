<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed',
        ]);

        $task = Task::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'status' => $validated['status'],
            'user_id' => auth()->id(),
        ]);

        return response()->json(['message' => 'Tarea creada con éxito', 'task' => $task], 201);
    }
}
