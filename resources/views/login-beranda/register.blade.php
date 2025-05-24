@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Register</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/register" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm">Nama</label>
                <input type="text" name="name" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    value="{{ old('name') }}">
            </div>

            <div>
                <label class="block text-sm">Email</label>
                <input type="email" name="email" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none"
                    value="{{ old('email') }}">
            </div>

            <div>
                <label class="block text-sm">Password</label>
                <input type="password" name="password" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                Daftar
            </button>

            <div class="text-center text-sm">
                Sudah punya akun? <a href="/" class="text-blue-600 hover:underline">Login disini</a>
            </div>
        </form>
    </div>
@endsection
