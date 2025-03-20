<?php

namespace App\Http\Controllers;

use App\Models\finance;
use App\Models\Target;
use Illuminate\Http\Request;

class targetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $request->validate([
            'name' => 'required|string', // Sesuaikan dengan form
            'nominal' => 'required|numeric',
        ]);
    
        Target::create([
            'user_id' => auth()->id(), // Jika ada kolom user_id
            'nama_target' => $request->name,
            'nominal' => $request->nominal,
        ]);
    
        return redirect()->back()->with('success', 'Target tabungan berhasil ditambahkan!');
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
        // Cari data target berdasarkan ID dan pastikan hanya user yang bersangkutan yang bisa menghapus
        $target = Target::where('id', $id)->where('user_id', auth()->id())->first();
    
        // Cek apakah target ditemukan
        if (!$target) {
            return redirect()->back()->with('error', 'Target tidak ditemukan atau Anda tidak memiliki izin untuk menghapusnya.');
        }
    
        // Hapus target
        $target->delete();
    
        return redirect()->back()->with('success', 'Target berhasil dihapus!');
    }
    
}
