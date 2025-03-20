<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\diary_book;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $query = diary_book::where('user_id', $user->id);
    
        // Cek apakah ada input pencarian
        if ($request->has('search')) {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('diary', 'like', "%{$search}%");
        }
    
        // Ambil hasil query
        $diaries = $query->orderBy('created_at', 'desc')->get();
    
        // Ambil ID diary yang sudah disukai user
        $likedDiaries = Favorite::where('user_id', $user->id)->pluck('diary_id')->toArray();
    
        return view('Book_Diary.view_Diary', compact('diaries', 'likedDiaries'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Book_Diary.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'diary' => 'required|string',
            'mood' => 'required|string',
            'weather' => 'required|string',
            'location' => 'required|string',
        ]);

        diary_book::create([
            'title' => $request->title,
            'user_id' => auth()->id(), // Ambil ID pengguna yang sedang login
            'diary' => $request->diary,
            'mood' => $request->mood,
            'weather' => $request->weather,
            'location' => $request->location,
        ]);

        // dd($request);

        return redirect()->route('bookDiary.index')->with('success', 'Diary berhasil disimpan!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $diary = diary_book::findOrFail($id); // Ambil berdasarkan ID, atau tampilkan error jika tidak ada

        $diary->delete();
        return redirect()->route('bookDiary.index')->with('success', 'Diary berhasil dihapus!');
    }
}
