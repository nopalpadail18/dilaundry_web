<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan - Dilaundry</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
            animation: fadeIn 0.3s ease;
        }
        .faq-item {
            transition: all 0.3s ease;
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .faq-item.active .faq-answer {
            max-height: 500px;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Navbar -->
   <header class="px-8 py-4 flex items-center justify-between border-b">
    <div class="flex items-center space-x-2">
        <span class="text-red-500 text-2xl font-extrabold tracking-tight">DI</span>
        <span class="text-blue-600 text-2xl font-extrabold tracking-tight">LAUNDRY</span>
    </div>

    <nav class="flex items-center space-x-5 bg-black rounded-full px-4 py-2">
        <a href="/" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Home</a>
        <a href="#" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Tipe Bisnis</a>
        <a href="/bantuan" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Bantuan</a>
        <a href="/harga" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Harga</a>
        <a href="/kontak" class="text-white font-medium px-3 py-1 rounded-full hover:bg-blue-600 transition">Kontak Kami</a>
    </nav>

    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-5 py-2 rounded-full font-semibold">Daftar sekarang</a>
</header> 

   <!-- Hero Section -->
<section class="relative w-full">
    <img src="https://images.unsplash.com/photo-1580175486077-959357d7c72e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTI2fHxsYXVuZHJ5fGVufDB8fDB8fHww" alt="Pusat Bantuan" class="w-full h-72 object-cover">
    
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Pusat Bantuan Dilaundry</h2>
        <p class="text-lg md:text-xl text-white max-w-3xl">
            Temukan solusi untuk setiap pertanyaan dan kendala Anda dalam menggunakan layanan kami
        </p>
    </div>
</section>


    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Tab Navigation -->
        <div class="flex flex-wrap border-b border-gray-200 mb-6">
            <button class="tab-btn px-6 py-3 font-medium text-lg text-blue-600 border-b-2 border-blue-600 transition-all" data-tab="faq">
                <i class="fas fa-question-circle mr-2"></i>FAQ
            </button>
            <button class="tab-btn px-6 py-3 font-medium text-lg text-gray-600 hover:text-blue-500 transition-all" data-tab="guide">
                <i class="fas fa-book mr-2"></i>Panduan
            </button>
            <button class="tab-btn px-6 py-3 font-medium text-lg text-gray-600 hover:text-blue-500 transition-all" data-tab="policy">
                <i class="fas fa-file-alt mr-2"></i>Kebijakan
            </button>
        </div>

        <!-- FAQ Tab -->
        <div id="faq" class="tab-content active">
            <h3 class="text-2xl font-bold mb-6 text-gray-800">Pertanyaan yang Sering Ditanyakan</h3>
            
            <div class="space-y-4 mb-8">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white rounded-lg shadow-md p-4" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h4 class="font-semibold text-blue-600">Apa keunggulan aplikasi Dilaundry dibanding laundry biasa?</h4>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-2 text-gray-600">
                        <p>Anda bisa memesan dengan mudah melalui beberapa cara:</p>
                        <ol class="list-decimal pl-5 mt-2 space-y-1">
                            <li>Melalui aplikasi Dilaundry (download di Play Store/App Store)</li>
                            <li>Website resmi kami</li>
                            <li>WhatsApp ke nomor +62 812-3456-7890</li>
                            <li>Datang langsung ke outlet terdekat</li>
                        </ol>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white rounded-lg shadow-md p-4" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h4 class="font-semibold text-blue-600">Bagaimana cara memanfaatkan promo & diskon di aplikasi?</h4>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-2 text-gray-600">
                        <p>Waktu proses bervariasi tergantung jenis layanan:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li><strong>Reguler:</strong> 2-3 hari kerja</li>
                            <li><strong>Express:</strong> 24 jam (1 hari kerja)</li>
                            <li><strong>Dry Cleaning:</strong> 3-4 hari kerja</li>
                            <li><strong>Premium:</strong> 4-5 hari kerja dengan treatment khusus</li>
                        </ul>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white rounded-lg shadow-md p-4" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h4 class="font-semibold text-blue-600">Metode pembayaran apa saja yang tersedia?</h4>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-2 text-gray-600">
                        <p>Kami menerima berbagai metode pembayaran modern:</p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
                            <div class="flex items-center">
                                <i class="fas fa-credit-card text-blue-500 mr-2"></i>
                                <span>Kartu Kredit/Debit</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fab fa-gopuram text-blue-500 mr-2"></i>
                                <span>Gopay/OVO/Dana</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-university text-blue-500 mr-2"></i>
                                <span>Transfer Bank</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-money-bill-wave text-blue-500 mr-2"></i>
                                <span>Tunai</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fab fa-cc-paypal text-blue-500 mr-2"></i>
                                <span>PayLater</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white rounded-lg shadow-md p-4" onclick="toggleFaq(this)">
                    <div class="flex justify-between items-center cursor-pointer">
                        <h4 class="font-semibold text-blue-600">Apakah saya bisa melacak status laundry melalui aplikasi?</h4>
                        <i class="fas fa-chevron-down text-gray-500 transition-transform"></i>
                    </div>
                    <div class="faq-answer mt-2 text-gray-600">
                        <p>Kami menyediakan layanan antar-jemput gratis dengan ketentuan:</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Minimal order 5 kg untuk area dalam kota</li>
                            <li>Penjemputan sesuai jadwal yang disepakati</li>
                            <li>Alamat harus jelas dan mudah diakses</li>
                            <li>Pengantaran dilakukan setelah laundry selesai</li>
                            <li>Biaya tambahan mungkin berlaku untuk area tertentu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Guide Tab -->
        <div id="guide" class="tab-content">
            <h3 class="text-2xl font-bold mb-6 text-gray-800">Panduan Penggunaan Layanan Aplikasi</h3>
            
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <!-- Guide Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-blue-500 text-white p-4">
                        <h4 class="font-semibold text-lg"><i class="fas fa-washing-machine mr-2"></i>Cara Registrasi & Login</h4>
                    </div>
                    <div class="p-4 text-gray-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Pisahkan pakaian warna dan putih</li>
                            <li>Kosongkan semua kantong sebelum dikirim</li>
                            <li>Beritahu staff jika ada noda khusus</li>
                            <li>Untuk pakaian khusus, gunakan layanan Dry Cleaning</li>
                            <li>Barang pecah belah/handphone tidak dicuci</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Guide Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-blue-500 text-white p-4">
                        <h4 class="font-semibold text-lg"><i class="fas fa-shipping-fast mr-2"></i>Cara Memesan Layanan Laundry</h4>
                    </div>
                    <div class="p-4 text-gray-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Jemput sampai jam 17.00 untuk layanan hari sama</li>
                            <li>Minimal order 5 kg untuk gratis antar</li>
                            <li>Bungkus rapi jika ada pakaian khusus/basah</li>
                            <li>Siapkan bukti pembayaran saat pengantaran</li>
                            <li>Periksa barang sebelum kurier meninggalkan lokasi</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Guide Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-blue-500 text-white p-4">
                        <h4 class="font-semibold text-lg"><i class="fas fa-box-open mr-2"></i>Panduan Keluhan & Garansi</h4>
                    </div>
                    <div class="p-4 text-gray-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Bahan wol/sutera hanya di Dry Cleaning</li>
                            <li>Noda darah/wine memerlukan perlakuan khusus</li>
                            <li>Jas/baju pengantaran sebaiknya Dry Cleaning</li>
                            <li>Selimut tebal/besar mungkin butuh biaya tambahan</li>
                            <li>Untuk bahan khusus, konsultasikan dengan staff</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Guide Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="bg-blue-500 text-white p-4">
                        <h4 class="font-semibold text-lg"><i class="fas fa-hand-holding-usd mr-2"></i>Panduan Pembayaran</h4>
                    </div>
                    <div class="p-4 text-gray-600">
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Transfer maksimal 2x24 jam setelah pemesanan</li>
                            <li>Simpan bukti pembayaran</li>
                            <li>E-wallet pembayaran instan</li>
                            <li>Tunai saat penjemputan dikenakan tambahan 5%</li>
                            <li>Refund membutuhkan waktu 2-5 hari kerja</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Policy Tab -->
        <div id="policy" class="tab-content">
            <h3 class="text-2xl font-bold mb-6 text-gray-800">Kebijakan Layanan</h3>
            
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-xl font-semibold mb-3 text-blue-600">1. Kebijakan Pembatalan</h4>
                    <div class="text-gray-600 space-y-2">
                        <p>Pelanggan dapat membatalkan pesanan dengan ketentuan:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Pembatalan sebelum penjemputan: 100% refund</li>
                            <li>Setelah penjemputan tapi belum diproses: 70% refund</li>
                            <li>Sudah diproses: tidak bisa dibatalkan</li>
                            <li>Refund membutuhkan waktu 3-5 hari kerja</li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-xl font-semibold mb-3 text-blue-600">2. Kebijakan Pengembalian</h4>
                    <div class="text-gray-600 space-y-2">
                        <p>Untuk pengembalian/komplain, harap:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Laporkan dalam 24 jam setelah menerima barang</li>
                            <li>Lengkapi dengan foto bukti kerusakan</li>
                            <li>Simpan kemasan dan tag laundry</li>
                            <li>Untuk kasus berat, tim kami akan melakukan investigasi</li>
                            <li>Solusi bisa berupa perbaikan, ganti rugi atau credit</li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-xl font-semibold mb-3 text-blue-600">3. Kebijakan Privasi</h4>
                    <div class="text-gray-600 space-y-2">
                        <p>Kami menjaga data pelanggan dengan:</p>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Data hanya digunakan untuk keperluan layanan</li>
                            <li>Tidak menjual data ke pihak ketiga</li>
                            <li>Proses pembayaran melalui sistem terenkripsi</li>
                            <li>Pelanggan bisa minta data dihapus setelah transaksi</li>
                            <li>Alamat email hanya untuk notifikasi layanan</li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h4 class="text-xl font-semibold mb-3 text-blue-600">4. Syarat & Ketentuan</h4>
                    <div class="text-gray-600 space-y-2">
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Minimum order antar-jemput 5 kg</li>
                            <li>Benda berharga/uang dalam kantong bukan tanggung jawab kami</li>
                            <li>Pakaian tidak diambil dalam 30 hari akan disumbangkan</li>
                            <li>Perubahan harga sewaktu-waktu tanpa pemberitahuan</li>
                            <li>Untuk pakaian khusus, sampaikan ke petugas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-4">Dilaundry</h4>
                    <p class="text-gray-400">Layanan laundry modern dengan solusi lengkap untuk semua kebutuhan mencuci Anda.</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Laundry Reguler</a></li>
                        <li><a href="#" class="hover:text-white">Laundry Express</a></li>
                        <li><a href="#" class="hover:text-white">Dry Cleaning</a></li>
                        <li><a href="#" class="hover:text-white">Laundry Sepatu</a></li>
                        <li><a href="#" class="hover:text-white">Laundry Bed Cover</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Jelajahi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Beranda</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#" class="hover:text-white">Pusat Bantuan</a></li>
                        <li><a href="#" class="hover:text-white">Promo</a></li>
                        <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Unduh Aplikasi</h4>
                    <div class="space-y-4">
                        <img src="https://placehold.co/150x50/3b82f6/ffffff?text=App+Store" alt="Download di App Store" class="h-10 cursor-pointer">
                        <img src="https://placehold.co/150x50/3b82f6/ffffff?text=Google+Play" alt="Download di Google Play" class="h-10 cursor-pointer">
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; 2025 PT Dilaundry Indonesia. Seluruh hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>


    <!-- pindahkan nanti ke file js nya -->
    <script>
        // Tab System
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabButtons.forEach(btn => {
                    btn.classList.remove('border-blue-600', 'text-blue-600');
                    btn.classList.add('text-gray-600');
                });
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                button.classList.add('border-blue-600', 'text-blue-600');
                button.classList.remove('text-gray-600');
                document.getElementById(button.dataset.tab).classList.add('active');
            });
        });
        
        // FAQ Toggle Function
        function toggleFaq(element) {
            element.classList.toggle('active');
            const icon = element.querySelector('i');
            icon.style.transform = element.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)';
        }
        
        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah terkirim. Tim Dilaundry akan menghubungi Anda dalam 1x24 jam.');
            this.reset();
        });
    </script>
</body>
</html>
