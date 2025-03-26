<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat AI dengan OpenRouter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
    <div class="w-full max-w-2xl bg-gray-800 p-6 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-4">Chat AI dengan OpenRouter</h1>
        
        <form id="chat-form" class="space-y-4">
            <textarea name="prompt" id="prompt" rows="4" 
                class="w-full p-3 border border-gray-600 rounded-lg bg-gray-700 text-white placeholder-gray-400"
                placeholder="Masukkan pertanyaan..."></textarea>
            <button type="submit" 
                class="w-full bg-blue-500 hover:bg-blue-600 transition text-white py-2 px-4 rounded-lg font-semibold">
                Kirim
            </button>
        </form>

        <div class="mt-6">
            <h3 class="text-lg font-semibold">Hasil:</h3>
            <div id="result" class="bg-gray-700 p-4 rounded-lg mt-2 text-gray-300 min-h-[50px]">
                <p class="text-gray-400 italic">Belum ada respon...</p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#chat-form').on('submit', function (event) {
                event.preventDefault();
                var prompt = $('#prompt').val();
                $('#result').html('<p class="text-yellow-400">Menunggu respon...</p>');

                $.ajax({
                    url: '/generate',
                    method: 'POST',
                    data: { prompt: prompt, _token: '{{ csrf_token() }}' },
                    success: function (response) {
                        $('#result').html('<p class="text-green-400"><b>AI:</b> ' + response.choices[0].message.content + '</p>');
                    },
                    error: function () {
                        $('#result').html('<p class="text-red-400">Terjadi kesalahan.</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>
