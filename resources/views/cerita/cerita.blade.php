@extends('layouts.app')

@include('partials.header')

@section('content')
    <div class="max-w-5xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold mb-10 text-center text-blue-700">Cerita & Dampak</h1>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Testimoni 1 -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center">
                <img src="{{ asset('image/amal.jpeg') }}" alt="Foto Saya" class="w-32 h-32 rounded-xl object-cover mr-6">
                <div>
                    <h2 class="text-lg font-semibold">PAK AMAL – Kepala Sekolah</h2>
                    <p class="text-gray-600 mt-2 text-sm">"Berkat bantuan dari platform ini, sekolah kami di pedalaman
                        Kapuas Hulu kini memiliki buku-buku baru. Anak-anak jadi lebih semangat belajar."</p>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center">
                <img src="{{ asset('image/adetio.jpeg') }}" alt="Foto Saya"
                    class="w-32 h-32 rounded-xl object-cover mr-6">

                <div>
                    <h2 class="text-lg font-semibold">PAK ADE – Guru Sukarela</h2>
                    <p class="text-gray-600 mt-2 text-sm">"Saya merasa bangga bisa mengajar anak-anak di Kabupaten
                        Ketapang. Bantuan dari masyarakat membuat kegiatan belajar kami jadi jauh lebih baik."</p>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center">
                <img src="{{ asset('image/satria11.jpeg') }}" alt="Foto Saya"
                    class="w-32 h-32 rounded-xl object-cover mr-6">
                <div>
                    <h2 class="text-lg font-semibold">SATRIA – Siswa Kelas 11</h2>
                    <p class="text-gray-600 mt-2 text-sm">"Saya senang sekali mendapatkan bantuan ini. Terima kasih
                        sudah bantu sekolah saya."</p>
                </div>
            </div>

            <!-- Testimoni 4 -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center">
                <img src="{{ asset('image/ik.jpeg') }}" alt="Foto Saya" class="w-32 h-32 rounded-xl object-cover mr-6">
                <div>
                    <h2 class="text-lg font-semibold">IKHSAN – Mahasiswa Semester 11</h2>
                    <p class="text-gray-600 mt-2 text-sm">"Saya menjadi senang sekali mengajar di sekolah terpencil ini.
                        Terima kasih sudah bantu sekolah ini."</p>
                </div>
            </div>

            <!-- Testimoni 5 -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center">
                <img src="{{ asset('image/ag.jpeg') }}" alt="Foto Saya" class="w-32 h-32 rounded-xl object-cover mr-6">
                <div>
                    <h2 class="text-lg font-semibold">AGUNG – Siswa Kelas 10 </h2>
                    <p class="text-gray-600 mt-2 text-sm">"Saya senang sekali mendapatkan banyak buku gratis. Terima
                        kasih sudah bantu sekolah saya saya akan belajar lebih rajin."</p>
                </div>
            </div>

            <!-- Testimoni 6 -->
            <div class="bg-white rounded-2xl shadow p-6 flex flex-col md:flex-row items-center">
                <img src="{{ asset('image/marel.jpeg') }}" alt="Foto Saya" class="w-32 h-32 rounded-xl object-cover mr-6">
                <div>
                    <h2 class="text-lg font-semibold">MAREL – Mahasisiwa Semester 7</h2>
                    <p class="text-gray-600 mt-2 text-sm">"Saya sebagai mahasiswa magang yang mengajar di desa terpencil
                        tanpa listrik yang stabil. Tapi semangat belajar murid-murid tidak pernah padam. Bantuan berupa
                        lampu tenaga surya dan perlengkapan belajar membuat proses mengajar lebih mudah dan
                        menyenangkan."</p>
                </div>
            </div>
        </div>
    </div>
@endsection
