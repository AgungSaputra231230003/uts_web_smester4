@extends('layouts.app')

@include('partials.header')

@section('content')
    <div class="container">
        <h2>Terima kasih {{ $donatur }}!</h2>
        <p>Anda telah membantu sekolah <strong>{{ $nama }}</strong> dengan bantuan: <em>{{ $bantuan }}</em>.
        </p>
        <a href="/sekolah">
            <button type="submit" class=" bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg">
                Kembali
            </button>
        </a>
    </div>
@endsection
