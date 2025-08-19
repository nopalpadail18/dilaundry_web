<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">Register</h1>

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

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-medium" for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium" for="username">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium" for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium" for="password">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium" for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="flex justify-between items-center mt-6">
                <a href="{{ route('login.form') }}" class="text-sm text-blue-500 hover:underline">Already registered?</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
