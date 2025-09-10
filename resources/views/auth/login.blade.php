<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Laundry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">

  <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
    
    <!-- Logo -->
    <div class="mb-6 text-center">
        <img id="logoLaundry" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0Bg8TJO38qjCKPG-kZhkRL2Ypd_ONG4umjw&s" alt="Logo Laundry" class="w-20 mx-auto mb-3">
        <h2 class="text-xl font-semibold text-gray-700">DILAUNDRY</h2>
        <p class="text-blue-600 font-medium mt-2">Login untuk akunmu</p>
    </div>

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-5">
      @csrf

      <!-- Username -->
      <div>
        <input 
            type="text" 
            name="username" 
            placeholder="Username" 
            required
            class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 px-2 py-2"
        >
      </div>

      <!-- Password -->
      <div>
        <input 
          type="password" 
          name="password" 
          placeholder="Password" 
          required
          class="w-full border-b-2 border-blue-400 focus:outline-none focus:border-blue-600 px-2 py-2"
        >
      </div>

      <!-- Error -->
      @error('login_error')
        <p class="text-red-600 text-sm">{{ $message }}</p>
      @enderror

      <!-- Tombol -->
      <button 
        type="submit"
        class="w-full py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg hover:opacity-90 transition"
      >
        LOGIN
      </button>
    </form>

    <!-- Link daftar -->
    <p class="text-center text-sm text-gray-600 mt-4">
      Belum punya akun? 
      <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">
        Daftar di sini
      </a>
    </p>
  </div>

  

</body>
</html>
