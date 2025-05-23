@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-6">Form Bantuan Sekolah</h1>

        <form action="{{ route('form-bantuan.store') }}" method="POST" class="max-w-lg mx-auto">
            @csrf

            <div class="mb-4">
                <label for="school_name" class="block text-gray-700 font-medium mb-2">Pilih Sekolah</label>
                <input type="text" name="school_name" id="school_name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="assistance_type" class="block text-gray-700 font-medium mb-2">Jenis Bantuan</label>
                <select name="assistance_type" id="assistance_type"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Pilih Jenis Bantuan</option>
                    <option value="Buku dan Alat Tulis">Buku dan Alat Tulis</option>
                    <option value="Seragam Sekolah">Seragam Sekolah</option>
                    <option value="Beasiswa Pendidikan">Beasiswa Pendidikan</option>
                    <option value="Perbaikan Infrastruktur">Perbaikan Infrastruktur</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="donor_name" class="block text-gray-700 font-medium mb-2">Nama Pemberi Bantuan</label>
                <input type="text" name="donor_name" id="donor_name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="donor_contact" class="block text-gray-700 font-medium mb-2">Kontak Pemberi Bantuan</label>
                <input type="text" name="donor_contact" id="donor_contact"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="notes" class="block text-gray-700 font-medium mb-2">Catatan (Opsional)</label>
                <textarea name="notes" id="notes" rows="3"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="flex justify-end">
                <a href="/form-bantuan"><button type="button" class="bg-blue-600 rounded-md mr-2 p-2 text-white hover:bg-blue-800">Kembali</button></a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection
