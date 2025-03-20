<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\DiaryBook;

class FavoriteController extends Controller
{
    public function toggleFavorite($diaryId)
    {
        $user = auth()->user();

        // Cek apakah diary sudah disukai
        $favorite = Favorite::where('user_id', $user->id)
                            ->where('diary_id', $diaryId)
                            ->first();

        if ($favorite) {
            // Jika sudah disukai, batalkan suka
            $favorite->delete();
            return response()->json(['status' => 'removed']);
        } else {
            // Jika belum disukai, tambahkan ke favorit
            Favorite::create([
                'user_id' => $user->id,
                'diary_id' => $diaryId
            ]);
            return response()->json(['status' => 'added']);
        }
    }

    public function favoriteDiaries()
    {
        $user = auth()->user();
        $favorites = Favorite::where('user_id', $user->id)->with('diary')->get();

        

        return view('book_Diary.favorites', compact('favorites'));
    }
}

