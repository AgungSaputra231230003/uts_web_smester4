@extends('layouts.app')

@include('partials.header')
@section('content')
    <div class="container mx-auto px-4 animate-opacity">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Bantuan Sekolah</h1>
            <a href="{{ route('form-bantuan.create') }}"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-yellow-300">
                Tambah Data Baru
            </a>
        </div>

        @if (session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sekolah
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis
                            Bantuan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pemberi
                            Bantuan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catatan
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($assistanceList as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->school_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->assistance_type }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->donor_name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->donor_contact }}</td>
                            <td class="px-6 py-4">{{ $item->notes ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
