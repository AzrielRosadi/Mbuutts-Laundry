@extends('headers.headers')

@section('content')

    <div class="container mx-auto p-6">
        <div class="text-2xl font-bold mb-4">All Order Laundry</div>
        <hr class="my-4">
        
        <div class="flex justify-between items-center mb-4">
            <div class="text-lg font-semibold">
                @if (isset($resultDate))
                    <span>TOTAL : {{ count($resultDate) }}</span>
                @else
                    <span>TOTAL : {{ count($datas) }}</span>
                @endif
            </div>
            <form action="{{ route('search.date') }}" method="GET" class="flex items-center">
                <input type="date" name="date" id="date" class="px-3 py-2 border rounded-md">
                <button type="submit" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    <span class="material-symbols-outlined">search</span>
                </button>
            </form>
        </div>

        <div class="overflow-x-auto shadow-md rounded-lg bg-white">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Nama Pemesan</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Nomor Telepon</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Total Berat (KG)</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Total Harga</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Tanggal</th>
                        <th class="px-4 py-2 text-sm font-semibold text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($resultDate))
                        @if(count($resultDate) == 0)
                            <tr>
                                <td colspan="6" class="text-center py-4">Data Tidak Ditemukan</td>
                            </tr>
                        @else
                            @foreach ($resultDate as $data)
                                <tr class="border-t border-gray-200">
                                    <td class="px-4 py-2 text-sm">{{ $data->nama }}</td>
                                    <td class="px-4 py-2 text-sm">+62 {{ $data->noHp }}</td>
                                    <td class="px-4 py-2 text-sm">{{ $data->total_berat }} KG</td>
                                    <td class="px-4 py-2 text-sm">Rp {{ number_format($data->total_harga, 0, ',' , '.') }}</td>
                                    <td class="px-4 py-2 text-sm">{{ $data->created_at->format('d-m-y') }}</td>
                                    <td class="px-4 py-2 text-sm">{{ $data->status }}</td>
                                </tr>
                            @endforeach
                        @endif
                    @else
                        @foreach ($datas as $data)
                            <tr class="border-t border-gray-200">
                                <td class="px-4 py-2 text-sm">{{ $data->nama }}</td>
                                <td class="px-4 py-2 text-sm">+62 {{ $data->noHp }}</td>
                                <td class="px-4 py-2 text-sm">{{ $data->total_berat }} KG</td>
                                <td class="px-4 py-2 text-sm">Rp {{ number_format($data->total_harga, 0, ',' , '.') }}</td>
                                <td class="px-4 py-2 text-sm">{{ $data->created_at->format('d-m-y') }}</td>
                                <td class="px-4 py-2 text-sm">{{ $data->status }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
