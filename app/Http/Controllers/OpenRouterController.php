<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpenRouterController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function generateText(Request $request)
    {
        $apiKey = env('OPENROUTER_API_KEY'); // Ambil API Key dari .env
        $prompt = $request->input('prompt');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://openrouter.ai/api/v1/chat/completions', [
            'model' => 'deepseek/deepseek-chat-v3-0324:free',
            'messages' => [['role' => 'user', 'content' => $prompt]],
            'max_tokens' => 50,
            'stream' => true, // Gunakan streaming agar output muncul bertahap
        ]);

        // Jika gagal, tampilkan error
        if ($response->failed()) {
            return response()->json(['error' => $response->json()], 500);
        }


        return response()->json($response->json());
    }
}
