<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
       @props(['servicesTitle','title','exploreTitle','downloadTitle','copyright'])
            {{-- Bagian 1: Judul & Social --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">{{ $title ?? 'Dilaundry' }}</h4>
                <p class="text-gray-400">{{ $description ?? 'Layanan laundry modern dengan solusi lengkap untuk semua kebutuhan mencuci Anda.' }}</p>
                <div class="mt-4 flex space-x-4">
                    {{ $social ?? '' }}
                </div>
            </div>
            {{-- Bagian 2: Services --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">{{ $servicesTitle ?? 'Layanan' }}</h4>
                <ul class="space-y-2 text-gray-400">
                    {{ $services ?? '' }}
                </ul>
            </div>

            {{-- Bagian 3: Jelajahi / Explore --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">{{ $exploreTitle ?? 'Jelajahi' }}</h4>
                <ul class="space-y-2 text-gray-400">
                    {{ $explore ?? '' }}
                </ul>
            </div>

            {{-- Bagian 4: Download --}}
            <div>
                <h4 class="text-lg font-semibold mb-4">{{ $downloadTitle ?? 'Unduh Aplikasi' }}</h4>
                <div class="space-y-4">
                    {{ $download ?? '' }}
                </div>
            </div>

        </div>

        {{-- Footer bawah --}}
        <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
            <p>{{ $copyright ?? '© 2025 PT Dilaundry Indonesia. Seluruh hak cipta dilindungi.' }}</p>
        </div>
    </div>
</footer>