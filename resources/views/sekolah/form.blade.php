@extends('layouts.app')

@include('partials.header')

@section('content')
    <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Bantu Sekolah: {{ $nama }}</h2>

        <form method="POST" action="{{ route('sekolah.kirim') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="nama" value="{{ $nama }}">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Anda</label>
                <input type="text" name="donatur"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                    required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Bantuan</label>
                <input type="text" name="bantuan"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-200">
                Kirim Bantuan
            </button>
        </form>
    </div>
@endsection
