<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harga - DI LAUNDRY</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white"> <!-- body jadi putih aja -->

  <x-navbar></x-navbar>

  <!-- Section Harga -->
  <section class="max-w-7xl mx-auto px-4 py-10 bg-green-100 mt-10">
    <main class="max-w-5xl mx-auto px-6 text-center">
      <!-- Title -->
      <h2 class="text-xl font-semibold text-gray-800 mb-2">Harga perbulannya :</h2>
      <hr class="border-gray-400 mb-10">

      <!-- Pricing Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch justify-center">
        
        <!-- Card 1 -->
        <div class="w-full max-w-[220px] mx-auto flex flex-col">
          <div class="bg-green-700 text-green-100 text-xl font-bold py-3 rounded-t-lg text-center">
            RP.35.000
          </div>
          <div class="bg-yellow-200 p-6 rounded-b-lg flex-1 flex flex-col items-center justify-start">
            <img src="{{ asset('images/sekalibayar.png') }}" alt="ikon harga" class="w-20 h-20 object-contain mb-4">
            <p class="text-gray-800 text-sm text-center leading-relaxed">
              1 Pengaplikasian <br> Rp. 35.000 Perbulan
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="w-full max-w-[220px] mx-auto flex flex-col">
          <div class="bg-yellow-400 text-green-700 text-xl font-bold py-3 rounded-t-lg text-center">
            RP.100.000
          </div>
          <div class="bg-green-400 p-6 rounded-b-lg flex-1 flex flex-col items-center justify-start">
            <img src="{{ asset('images/sekalibayar.png') }}" alt="ikon harga" class="w-20 h-20 object-contain mb-4">
            <p class="text-gray-800 text-sm text-center leading-relaxed">
              5 Pengaplikasian <br> 100.000 Perbulan
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="w-full max-w-[220px] mx-auto flex flex-col">
          <div class="bg-green-600 text-white text-md font-bold py-3 rounded-t-lg text-center">
            HUBUNGI NO CUSTOMER
          </div>
          <div class="bg-yellow-300 p-6 rounded-b-lg flex-1 flex flex-col items-center justify-start">
            <img src="{{ asset('images/datapengguna.png') }}" alt="ikon harga" class="w-20 h-20 object-contain mb-4">
            <p class="text-gray-800 text-sm text-center leading-relaxed">
              Diatas 5 Pengaplikasian <br> mohon Hubungi Customer
            </p>
          </div>
        </div>

      </div>
    </main>
  </section>

</body>
</html>
