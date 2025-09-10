<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center">
        <!-- Logo -->
        <div class="mb-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0Bg8TJO38qjCKPG-kZhkRL2Ypd_ONG4umjw&s" alt="Logo" class="mx-auto w-16 h-16">
            <p class="text-sm text-gray-600">Laundry</p>
        </div>

        <!-- Judul -->
        <h1 class="text-xl font-bold text-gray-800 mb-2">DILAUNDRY</h1>
        <p class="text-blue-500 mb-6">Buat akun barumu</p>

        <!-- Pesan Error -->
        @if ($errors->has('register_error'))
            <div class="mb-4 text-red-500 text-sm">
                {{ $errors->first('register_error') }}
            </div>
        @endif

        @if ($errors->has('api_response'))
            <div class="mb-4 text-red-400 text-xs break-words">
                Debug API: {{ $errors->first('api_response') }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4 text-left">
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required
                    class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 py-2 px-1">
            </div>

            <div class="mb-4 text-left">
                <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required
                    class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 py-2 px-1">
            </div>

            <div class="mb-4 text-left">
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                    class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 py-2 px-1">
            </div>

            <div class="mb-4 text-left">
                <input type="password" name="password" placeholder="Password" required
                    class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 py-2 px-1">
            </div>

            <div class="mb-6 text-left">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required
                    class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 py-2 px-1">
            </div>

            <!-- Tombol -->
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-semibold py-2 rounded-md hover:opacity-90">
                REGISTER
            </button>

            <!-- Link ke login -->
            <p class="mt-4 text-sm text-gray-600">
                Sudah punya akun? 
                <a href="{{ route('login.form') }}" class="text-blue-500 hover:underline">Login di sini</a>
            </p>
        </form>
    </div>
</body>
</html>
