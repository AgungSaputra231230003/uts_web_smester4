@extends('layouts.app')

@include('partials.header')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8 animate-opacity">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Sekolah yang Membutuhkan Bantuan</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left font-semibold">Nama Sekolah</th>
                        <th class="py-3 px-4 text-left font-semibold">Lokasi</th>
                        <th class="py-3 px-4 text-left font-semibold">Kebutuhan Utama</th>
                        <th class="py-3 px-4 text-left font-semibold">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($sekolahs as $sekolah)
                        <tr class="hover:bg-gray-50">
                            <td class="py-4 px-4">{{ $sekolah['nama'] }}</td>
                            <td class="py-4 px-4">{{ $sekolah['lokasi'] }}</td>
                            <td class="py-4 px-4">{{ $sekolah['kebutuhan'] }}</td>
                            <td class="py-4 px-4">
                                <a href="{{ route('form-bantuan.create', ['nama' => $sekolah['nama']]) }}"
                                    class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition duration-200">
                                    Bantu Sekolah Ini
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
