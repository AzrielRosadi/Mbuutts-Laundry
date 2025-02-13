@extends('headers.headers')

@section('content')
    <div class="container mx-auto p-6">
        <div class="text-2xl font-bold mb-6">Order Input</div>
        <hr class="border-gray-300 mb-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6">
                    <!-- Nama Field -->
                    <div class="flex items-center space-x-4">
                        <label for="nama" class="w-1/4 text-lg font-medium text-gray-700">Nama</label>
                        <input class="form-input w-full p-2 border border-gray-300 rounded-md" type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>

                    <!-- Nomor HP Field -->
                    <div class="flex items-center space-x-4">
                        <label for="noHp" class="w-1/4 text-lg font-medium text-gray-700">Nomor HP</label>
                        <input class="form-input w-full p-2 border border-gray-300 rounded-md" type="number" id="noHp" name="noHp" placeholder="Masukkan Nomor HP" required>
                    </div>

                    <!-- Total Berat Field -->
                    <div class="flex items-center space-x-4">
                        <label for="totalBerat" class="w-1/4 text-lg font-medium text-gray-700">Total Berat (KG)</label>
                        <input class="form-input w-full p-2 border border-gray-300 rounded-md" type="number" id="totalBerat" name="totalBerat" placeholder="Masukkan Total Berat" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600 transition duration-200">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
