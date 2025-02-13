@extends('headers.headers')

@section('content')

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="text-2xl font-bold mb-4">Dashboard Admin</div>
        <hr class="border-gray-300 mb-6">
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white table-auto rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Nama Pemesan</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Nomor Telepon</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Total Berat (KG)</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Total Harga</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Tanggal</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Status</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $data->nama }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">+62 {{ $data->noHp }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $data->total_berat }} KG</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Rp {{ number_format($data->total_harga, 0, ',' , '.') }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $data->created_at->format('d-m-y') }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700">{{ $data->status }}</td>
                        <td class="px-4 py-2 text-sm">
                            <a href="{{ route('edit', $data->id) }}" class="btn btn-outline-primary px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Edit</a>
                            <form action="{{ route('delete', $data->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger ms-1 px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
