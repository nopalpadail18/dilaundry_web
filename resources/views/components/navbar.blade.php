<!-- Navbar -->
  <header class="px-8 py-4 flex items-center justify-between border-b">
    <div class="flex items-center space-x-2">
      <span class="text-red-500 text-2xl font-extrabold tracking-tight">DI</span>
      <span class="text-blue-600 text-2xl font-extrabold tracking-tight">LAUNDRY</span>
    </div>

    <nav class="flex items-center space-x-4 bg-black rounded-full px-4 py-1">
      <a href="/" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Home</a>
      <a href="#" class="bg-blue-600 text-white font-medium px-3 py-1 rounded-full">Tipe Bisnis</a>
      <a href="/bantuan" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Bantuan</a>
      <a href="/harga" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Harga</a>
      <a href="/kontak" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Kontak Kami</a>
    </nav>

    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-5 py-2 rounded-full font-semibold">Daftar sekarang</a>
  </header>