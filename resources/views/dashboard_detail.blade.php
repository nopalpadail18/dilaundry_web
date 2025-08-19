<!DOCTYPE html>
<html>
<head>
    <title>Detail Pengeluaran</title>
</head>
<body>
    <h2>Detail Pengeluaran</h2>

@if($detailData)
    <ul>
        <li><strong>ID:</strong> {{ $detailData['idoutlay'] }}</li>
        <li><strong>Deskripsi:</strong> {{ $detailData['description'] ?: '-' }}</li>
        <li><strong>Total:</strong> Rp {{ number_format($detailData['total'], 0, ',', '.') }}</li>
        <li><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($detailData['datetime'])->format('d M Y H:i') }}</li>
        <li><strong>Dibuat Oleh:</strong> {{ $detailData['createdby'] }}</li>
    </ul>
@else
    <p>Data detail tidak ditemukan.</p>
@endif

<a href="{{ route('dashboard') }}">Kembali</a>
</body>
</html>
