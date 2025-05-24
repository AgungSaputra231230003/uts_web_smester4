@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md my-24">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Login To Account</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/login" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm">Email</label>
                <input type="email" name="email" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm">Password</label>
                <input type="password" name="password" required
                    class="w-full mt-1 px-4 py-2 border rounded focus:ring-2 focus:ring-blue-400 focus:outline-none">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                Masuk
            </button>
            <a href="/register">
                <button type="button"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                    Register
                </button>
            </a>
        </form>
    </div>
@endsection
