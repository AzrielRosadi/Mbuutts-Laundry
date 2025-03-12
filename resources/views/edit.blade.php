@extends('headers.headers')

@section('content')

<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold text-gray-700">Edit Order Input</h2>
    <hr class="my-4">

    <form action="{{ route('update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
            <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" type="text" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}" required>
        </div>

        <div class="mb-4">
            <label for="noHp" class="block text-sm font-medium text-gray-700">Nomor HP</label>
            <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" type="number" id="noHp" name="noHp" placeholder="Masukkan Nomor HP" value="{{ $data->noHp }}" required>
        </div>

        <div class="mb-4">
            <label for="totalBerat" class="block text-sm font-medium text-gray-700">Total Berat (KG)</label>
            <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" type="number" id="totalBerat" name="totalBerat" placeholder="Masukkan Total Berat" value="{{ $data->total_berat }}" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" name="status" required>
                <option value="Diterima" {{ $data->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                    <option value="Dicuci" {{ $data->status == 'Dicuci' ? 'selected' : '' }}>Dicuci</option>
                    <option value="Disetrika" {{ $data->status == 'Disetrika' ? 'selected' : '' }}>Disetrika</option>
                    <option value="Selesai" {{ $data->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="Belum Selesai" {{ $data->status == 'Belum Selesai' ? 'selected' : '' }}>Belum Selesai
                    </option>
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md shadow hover:bg-blue-700 transition">Simpan Perubahan</button>
        </div>
    </form>
</div>

@endsection
