<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami - Saku Laundry</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800">


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
        <a href="#" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Kontak Kami</a>
    </nav>

    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-5 py-2 rounded-full font-semibold">Daftar sekarang</a>
</header> 



<!-- Banner Section -->
<section class="relative py-20 text-white text-center bg-cover bg-center" 
         style="background-image: url('https://images.unsplash.com/photo-1639739767611-cc582846849f?w=1600&auto=format&fit=crop&q=80');">
  <!-- Overlay Gelap -->
  <div class="absolute inset-0 bg-black bg-opacity-60"></div>

  <!-- Konten -->
  <div class="relative max-w-3xl mx-auto px-4">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">
      Butuh penjelasan lebih detail tentang fitur Dilaundry?
    </h2>
    <p class="mb-6">
      Tim kami siap menjawab pertanyaan Anda setiap saat
    </p>
    <a href="https://wa.me/6281389871168" 
   class="bg-white text-black font-semibold px-6 py-3 rounded-full shadow-md hover:bg-gray-200">
   Hubungi Sekarang
</a>
  </div>
</section>



  <!-- Kontak -->
<section class="py-16 bg-gray-50">
  <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-3 gap-8 text-center">

    <!-- Card 1 -->
    <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
      <img class="w-21 h-20 mb-4 object-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-olVCFbjUzyjZvnN1iUXugOT4GicdVOJ9uA&s">
      <h3 class="text-xl font-semibold text-blue-700 mb-3">Statistik Singkat</h3>
      <p class="text-gray-600">
        500+ pelanggan dilayani tiap bulan
        100% respon WA < 10 menit       
      </p>
    </div>

    <!-- Card 2 -->
    <div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
      <img class="w-21 h-20 mb-4 object-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb7SniY-NOPTWqrVdsWr3VS5ri8Uocap2bMA&s" alt="Office Hour" class="w-16 h-16 mb-4 object-contain">
      <h3 class="text-xl font-semibold text-blue-700 mb-3">Jam Operasional</h3>
      <p class="text-gray-600">
        Senin – Sabtu<br>09.00 – 17.00
      </p>
    </div>

    <!-- Card 3 -->
<div class="bg-white shadow-md rounded-xl p-6 flex flex-col items-center">
  <img class="w-20 h-20 mb-4 object-contain" 
       src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAADJCAMAAADSHrQyAAAAZlBMVEX///9BQUM+PkD29vbV1dUjIyW3t7dbW1zV1dc3NzmxsbHb29stLTAsLC2np6iBgYI6OjwbGx3v7+9paWkxMTQTExYiIiLo6OiTk5MZGRgrKyqioqRvb3BGRkYPDw5PT0/JyclhYWFDD6mgAAADHUlEQVR4nO2dUXOiMAAGIdh64cCKjdVWrN7//5Onveu0tSCCXy4X2Z3Whwrb2UlI4IkkAQAAAAAAAAAAAACA22J1fx2r0AFDWazL55eyGE758lyuF6EzhrBZ2vR67HITOqQ3WV0Iyo8UdRY6pie1E6WnqatDx/QjV436kSIPndOHrBraOTcNf6ximvWz9hlvrHXOWWfff9zfT3uoNq7eNqyQbhY6qAfbptH7k57O2jh8aydJ8mv+/aRt6KDLyV5bh922D+HMmulhcucNA/8az6SfPLW2p+ahjcNccfsk2zXMmadJ6KSLmdy1t6e2jeOX88dd0x3R3Y20n5kSx9/GleL229uhPQr07T9CJ13Msd24K55eP+NMbO1ml6s4bHqRtU9VtyPZlPZIoF0ke2uPao9j3BXQLpL5h3aRjHaRzD+0i2S0i2T+oV0ko10k8w/PMiLZ6Med9higXSQbfTvrfAzQLpLRLpL5h3aRbPTt7HExQLtIRrtI5h/aRTLWeZHMP7SLZLSLZP6hXSQbfTt7XAzQLpLRLpL5h3aRjHVeJPMP7SIZ7SKZf2gXyWgXyfxDu0hGu0jmH9pFstG38ywTA7SLZLSLZP6hXSQbfTt7XAzQLpLRLpL5h3aRjHVeJPMP7SIZ7SKZf2gXyUbfzh4XA7SLZLSLZP6hXSSjXSTzD+0iGe0imX9oF8lG386zTAzQLpLRLpL5h3aRjHVeJPMP7SIZ7SKZf2gXyUbfzh4XA7SLZLSLZP6hXSRjnRfJ/PPWPvmpYRJde2rmrS8/7sc8uveEjvr9sLTT/h1TVB8Uje/+/tIe1R7XkW7yxQd584vPb3PcjV19OX5lO+JjGven8yludnLCzI2mvdifnLAvOtrjmfPZ61bbvlTdIP8DtuevX7M7OX7acfw2SMUwuq5f9/B5ILOHrsNP14f/maw6H5PadPr4ztTYjqOriKZ8kuQdF/DxWeedzjubIg+d04+6Yxr3wNWhY3qS1Z0jfyFFHdWMf2OzVAy9W25ChwxhsS6r8jqqcr0InTGU1f11rLr/BQAAAAAAAAAAAAAARMVv7B9GDz8O/usAAAAASUVORK5CYII=" 
       alt="Email Icon">
  <h3 class="text-xl font-semibold text-blue-700 mb-3">Email Support</h3>
  <p class="text-gray-600 mb-2">Ada pertanyaan? Kirim email ke</p>
  <a href="mailto:Dilaundry@gmail.com" 
     class="text-blue-600 font-bold hover:underline">
    Dilaundry@gmail.com
  </a>
</div>
  </div>
</section>

<!-- Lokasi Kami -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Judul -->
    <h2 class="text-2xl md:text-3xl font-bold text-center mb-2">
      Lokasi Kami
    </h2>
    <!-- Garis tipis biru -->
    <div class="w-24 h-[2px] bg-blue-500 mx-auto mb-10"></div>

    <div class="grid md:grid-cols-2 gap-8">
      <!-- Map -->
      <div class="w-full h-[400px] rounded-xl overflow-hidden shadow-md">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.071548023842!2d122.5388593734157!3d-4.00571394464245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d989348f3d65387%3A0x1c18ce95f48233ad!2sItech!5e0!3m2!1sen!2sid!4v1755840914327!5m2!1sen!2sid" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <!-- Info Kontak (diperkecil) -->
      <div class="bg-white shadow-md rounded-xl p-4 flex flex-col justify-center max-w-sm w-full mx-auto">
        <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center">
          <span class="text-orange-500 text-2xl mr-2">
            <img src="https://icons.veryicon.com/png/128/miscellaneous/mobanui-official-icon-library/location-657.png" alt="Lokasi" class="h-6 w-6 mr-2">
          </span>
          DiLaundry
        </h3>
        <p class="text-gray-600 mb-4 pl-5 ml-5">
          Jl. Kelapa No.24, Anduonohu, Kec. Poasia, Kota Kendari,<br>
          Sulawesi Tenggara
        </p>
        <p class="flex items-center text-gray-700 mb-4">
          <span class="mr-2"> 
            <img src="https://icons.veryicon.com/png/128/application/a-group-of-common-linear-icon/phone-69.png" alt="Lokasi" class="h-6 w-6 mr-2"></span> 
          +62 853-4243-3353
        </p>
        <p class="flex items-center text-gray-700 mb-4">
          <span class="mr-2">
            <img src="https://icons.veryicon.com/png/128/miscellaneous/memory-icon-library/email-161.png" alt="Lokasi" class="h-6 w-6 mr-2"></span> 
          </span> 
          Dilaundry@gmail.com
        </p>
        <a href="https://maps.app.goo.gl/w73CMnxD8qXcQLwHA" 
   target="_blank"
   class="bg-blue-500 text-white font-semibold px-5 py-3 rounded-lg text-center hover:bg-blue-600 transition flex items-center justify-center gap-2">
   <img src="https://icons.veryicon.com/png/128/commerce-shopping/online-retailers/corner-arrow.png" 
        alt="Lokasi" class="h-5 w-5">
   Petunjuk Arah
</a>

      </div>
    </div>
  </div>
</section>


 

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-12">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10">
      <div>
        <h3 class="text-lg font-bold text-white mb-3">Di Laundry</h3>
        <p class="text-gray-400">Solusi laundry praktis untuk pakaian Anda. Cukup serahkan pada kami, pakaian bersih, wangi, dan rapi siap dipakai kapan saja.
Kami menggunakan peralatan modern serta deterjen berkualitas yang aman untuk semua jenis kain. Setiap pakaian ditangani dengan hati-hati agar tetap awet dan nyaman dipakai.
</p>
      </div>
      <div>
        <h3 class="text-lg font-bold text-white mb-3">Kontak</h3>
        <p>Ruko Alicante Blok C-29, Medang, Pagedangan,<br>Kab Tangerang – Banten 15334</p>
        <p class="mt-2">Whatsapp: <a href="https://wa.me/6281389871168" class="text-green-400 hover:underline">0813-8987-1168</a></p>
      </div>
    </div>
      
    <div class="text-center text-gray-500 mt-10 text-sm">
      © 2025 Dilaundry. All Rights Reserved.
    </div>
  </footer>

</body>
</html>
