<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ $user['username'] ?? 'User' }}</h2>
    <p>Email: {{ $user['email'] ?? '-' }}</p>
    <p>Role: {{ $user['role'] ?? '-' }}</p>

    <a href="{{ route('logout') }}">Logout</a>
    <hr>

    {{-- Form Tambah Data Pengeluaran --}}
    <h3>Tambah Pengeluaran</h3>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('dashboard.store') }}">
        @csrf
        <label>Jenis:</label>
        <select name="jenisId" required>
            <option value="">-- Pilih Jenis --</option>
            <option value="1">Jenis 1</option>
            <option value="2">Jenis 2</option>
        </select>
        <br><br>

        <label>Deskripsi:</label>
        <input type="text" name="description" placeholder="Deskripsi" required>
        <br><br>

        <label>Jumlah:</label>
        <input type="number" name="amount" placeholder="Jumlah" required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>
    <hr>

    {{-- Form cari data berdasarkan ID --}}
    <h3>Cari Pengeluaran Berdasarkan ID</h3>
    <form method="GET" action="{{ route('dashboard') }}">
        <input type="number" name="idoutlay" placeholder="Masukkan ID Pengeluaran" value="{{ request('idoutlay') }}">
        <button type="submit">Cari</button>
    </form>

    {{-- Jika ada detail data --}}
    @if(!empty($detailData))
        <h3>Detail Pengeluaran ID: {{ $detailData['id'] ?? '-' }}</h3>
        <table border="1" cellpadding="6">
            <tr>
                <th>ID</th>
                <td>{{ $detailData['id'] ?? '-' }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $detailData['description'] ?? '-' }}</td>
            </tr>
            <tr>
                <th>Total</th>
                <td>Rp {{ number_format($detailData['amount'] ?? 0, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td>
                    {{ !empty($detailData['datetime']) ? \Carbon\Carbon::parse($detailData['datetime'])->format('d M Y H:i') : '-' }}
                </td>
            </tr>
            <tr>
                <th>Dibuat Oleh</th>
                <td>{{ $detailData['createdby'] ?? '-' }}</td>
            </tr>
        </table>
        <hr>

        {{-- Form Edit Data Pengeluaran --}}
        <h3>Edit Pengeluaran</h3>
        <form method="POST" action="{{ route('dashboard.update', $detailData['id']) }}">
            @csrf
            @method('PUT')

            <label>Jenis:</label>
            <select name="jenisId" required>
                <option value="1" {{ ($detailData['jenisId'] ?? '') == 1 ? 'selected' : '' }}>Jenis 1</option>
                <option value="2" {{ ($detailData['jenisId'] ?? '') == 2 ? 'selected' : '' }}>Jenis 2</option>
            </select>
            <br><br>

            <label>Deskripsi:</label>
            <input type="text" name="description" value="{{ $detailData['description'] ?? '' }}">
            <br><br>

            <label>Jumlah:</label>
            <input type="number" name="amount" value="{{ $detailData['amount'] ?? 0 }}">
            <br><br>

            <label>Tanggal:</label>
            <input type="datetime-local" name="datetime" 
                value="{{ !empty($detailData['datetime']) ? \Carbon\Carbon::parse($detailData['datetime'])->format('Y-m-d\TH:i') : '' }}">
            <br><br>

            <button type="submit">Update</button>
        </form>
        <hr>
    @endif

    {{-- Data semua pengeluaran --}}
    <h3>Data Pengeluaran</h3>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Outlet</th>
                <th>Nama Pegawai</th>
                <th>Deskripsi</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse(($allData['data'] ?? $allData ?? []) as $item)
                <tr>
                    <td>{{ $item['id'] ?? '-' }}</td>
                    <td>{{ $item['outlet']['name'] ?? '-' }}</td>
                    <td>{{ $item['pegawai']['name'] ?? '-' }}</td>
                    <td>{{ $item['description'] ?? '-' }}</td>
                    <td>Rp {{ number_format($item['amount'] ?? 0, 0, ',', '.') }}</td>
                    <td>
                        {{ !empty($item['datetime']) ? \Carbon\Carbon::parse($item['datetime'])->format('d M Y H:i') : '-' }}
                    </td>
                    <td>
                        @if(!empty($item['id']))
                            <a href="{{ route('dashboard.detail', $item['id']) }}">
                                Lihat Detail
                            </a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Filter Berdasarkan Tanggal --}}
    <h3>Filter Berdasarkan Tanggal</h3>
    <form method="GET" action="{{ route('dashboard') }}">
        <label>Start Date:</label>
        <input type="date" name="startDate" value="{{ request('startDate') }}">
        
        <label>End Date:</label>
        <input type="date" name="endDate" value="{{ request('endDate') }}">
        
        <button type="submit">Filter</button>
    </form>
    <hr>

</body>
</html>
