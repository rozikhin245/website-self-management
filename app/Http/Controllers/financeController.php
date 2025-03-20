<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Target;
use App\Models\finance;
use Illuminate\Http\Request;
use App\Models\targetTabungan;

class financeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        $finances = finance::where('user_id', $userId)->orderBy('created_at', 'desc')->paginate(5);

        $income = finance::where('user_id', $userId)->where('type', 'income')->sum('amount');
        $expense = finance::where('user_id', $userId)->where('type', 'expense')->sum('amount');
        $found_amound = $income - $expense;

        $showWarning = $income > 0 && ($expense / $income) >= 0.85;


        $saldo = max($income - $expense, 0);

        $targetTabungan = Target::where('user_id', auth()->id())->value('nominal'); // Ambil semua nominal target

        $progres = ($targetTabungan > 0) ? min(round(($saldo / $targetTabungan) * 100), 100) : 0;

        $target = Target::where('user_id', auth()->id())->first();


        // dd($progres); // Pastikan nilai progres benar sebelum diterapkan di view

        // dd($targetTabungan);
        return view('finance.index', compact('income', 'expense', 'found_amound', 'finances', 'progres', 'targetTabungan', 'target','showWarning'));
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
            'judul' => 'required|string',
            'category' => 'required|string',
            'type' => 'required|string|in:income,expense',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        finance::create([
            'judul' => $request->judul,
            'user_id' => auth()->id(), // Ambil ID pengguna yang sedang login
            'type' => $request->type,
            'category' => $request->category,
            'amount' => $request->amount,
            'date' => Carbon::now(), // Otomatis menggunakan waktu saat ini
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Transaksi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Finance $finance)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'category' => 'required|string',
        ]);

        $finance->update([
            'judul' => $request->judul,
            'amount' => $request->amount,
            'category' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Income updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(finance $finance)
    {
        $finance->delete();
        return redirect()->route('finance.index')->with('success', 'Transaksi berhasil dihapus!');
    }
}
