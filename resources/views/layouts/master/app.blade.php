<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Title')</title>
    <!-- CSS atau JS global -->
</head>
<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Konten Utama -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>
</html>
