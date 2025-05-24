@extends('layouts.app')

@include('partials.header')
@section('content')
    {{-- <div class="text-center">
        <h2 class="text-3xl font-bold text-blue-700 mb-4">Bantu Sekolah, Bantu Masa Depan</h2>
        <p class="text-gray-600 mb-6">Jembatani kebaikan untuk sekolah yang membutuhkan di seluruh Indonesia.</p>
        <a href="/sekolah" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Lihat Sekolah</a>
    </div> --}}
    <div class="text-center animate-grow">
        <!-- Judul dan deskripsi -->
        <h2 class="text-3xl font-bold text-blue-700 mb-4">Bantu Sekolah, Bantu Masa Depan</h2>
        <p class="text-gray-600 mb-6">Jembatan kebaikan untuk sekolah yang membutuhkan di seluruh Indonesia.</p>

        <!-- Gambar ilustrasi -->
        <div class="max-w-2xl mx-auto mb-8">
            <img src="{{ asset('image/anakAnakSekolah.webp') }}" alt="Anak-anak sekolah sedang belajar"
                class="rounded-lg shadow-2xl w-full h-auto shadow-blue-700">
            <p class="text-sm text-gray-500 mt-2">Ilustrasi anak-anak di sekolah yang membutuhkan bantuan</p>
        </div>

        <!-- Tombol aksi -->
        {{-- <a href="/sekolah" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Lihat Sekolah</a> --}}
    </div>
@endsection
