<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use App\Models\to_do_list;
use Illuminate\Http\Request;

class toDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();
        $tasks = ToDoList::all();
        // $tasks = ToDoList::where('user_id', $userId)->where('status', 'pending')->get();
        $sukses = ToDoList::where('user_id', $userId)->where('status', 'completed')->get();

        // $panding = ToDoList::where('user_id', $userId)->where('status', 'pending');
        return view('ToDoList.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
            'status' => 'required|string|in:completed,pending',
            'priority' => 'required|string|in:normal,urgent',
            'date' => 'required|date',
        ]);

        ToDoList::create([
            'user_id' => auth()->id(), // Ambil ID pengguna yang sedang login
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'status' => $request->status,
            'priority' => $request->priority,
            'date' => $request->date,
        ]);

        return redirect()->route('todolist.index')->with('success', 'Tugas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|string|in:pending,in_progress,completed',
        ]);

        $task = ToDoList::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('todolist.index')->with('success', 'Tugas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = ToDoList::findOrFail($id);
        $task->delete();

        return redirect()->route('todolist.index')->with('success', 'Tugas berhasil dihapus!');
    }
}