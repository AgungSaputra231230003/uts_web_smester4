@extends('layouts.app')

@include('partials.header')

@section('content')

    <body class="bg-gray-100 text-gray-800">
        <!-- Header 2-->
        <header class="bg-blue-700 text-white py-6 shadow-2xl shadow-black rounded-2xl">
            <div class="max-w-4xl mx-auto px-4">
                <h1 class="text-3xl font-bold">Bantu Sekolah Butuh Bantuan</h1>
                <p class="text-sm mt-2">Memberdayakan Pendidikan, Membangun Masa Depan</p>
            </div>
        </header>

        <!-- Konten -->
        <main class="max-w-4xl mx-auto px-4 py-10">
            <div class="bg-white rounded shadow p-6">
                <h2 class="text-xl font-semibold mb-4 text-teal-700">Tentang Kami</h2>
                <p class="mb-4">
                    <strong>SchoCare</strong> adalah gerakan sosial untuk membantu sekolah-sekolah di daerah
                    terpencil
                    dengan menyediakan fasilitas pendidikan yang layak.
                </p>
                <p class="mb-4">
                    Kami bekerja sama dengan relawan untuk memberikan bantuan berupa alat tulis, buku,
                    perbaikan bangunan, dan kebutuhan lainnya.
                </p>
                <p>
                    Mari bergandengan tangan demi masa depan generasi penerus bangsa!
                </p>
            </div>
        </main>
    </body>
@endsection
