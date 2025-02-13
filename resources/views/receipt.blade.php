<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Laundry</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm text-center">
        <h2 class="text-2xl font-bold text-blue-600">Struk Laundry</h2>
        
        <div class="text-left mt-4 space-y-2">
            <p><strong>Nama:</strong> {{ $datas->nama }}</p>
            <p><strong>No HP:</strong> {{ $datas->noHp }}</p>
            <p><strong>Total Berat:</strong> {{ $datas->total_berat }} kg</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($datas->total_harga, 0, ',', '.') }}</p>
            <p><strong>Status:</strong> 
                <span class="{{ $datas->status == 'Selesai' ? 'text-green-600' : 'text-red-600' }}">
                    {{ $datas->status }}
                </span>
            </p>
            <p><strong>Terakhir Diupdate:</strong> {{ $datas->updated_at->format('d M Y H:i') }}</p>
        </div>

        <a href="/" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
            Kembali
        </a>
    </div>

</body>
</html>
