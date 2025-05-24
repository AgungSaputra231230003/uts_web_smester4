<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SchoCare</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-50 min-h-screen flex flex-col">
    <!-- Content -->
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>
    @include('partials.footer')
</body>

</html>
