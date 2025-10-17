<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - {{ $developer['name'] ?? 'Développeur' }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex flex-col bg-gray-50 text-gray-900">

    <header class="bg-blue-700 text-white text-center py-4 text-2xl font-semibold">
        Mon Portfolio
    </header>

    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-3">
        © 2025 - Portfolio de {{ $developer['name'] ?? '' }}
    </footer>

</body>
</html>
