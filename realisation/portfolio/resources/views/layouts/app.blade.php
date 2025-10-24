<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aymane El Achiri - Creative Web Developer')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6B6B',
                        orange: '#FFB800',
                        purple: '#6C63FF',
                        lightBlue: '#F0F4FF',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    @yield('styles')
</head>
<body class="font-poppins bg-lightBlue @yield('body-class')">

    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-sm">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <img src="{{ asset('assets/logo.png') }}" alt="Aymane El Achiri" class="h-12 w-auto">
                </a>

                <!-- Desktop Menu -->
                <ul class="hidden lg:flex items-center space-x-8">
                    <li><a href="{{ route('home') }}" class="@if(Route::is('home')) text-orange font-semibold @else text-gray-700 hover:text-orange @endif transition-colors">Home</a></li>
                    <li><a href="{{ route('about') }}" class="@if(Route::is('about')) text-orange font-semibold @else text-gray-700 hover:text-orange @endif transition-colors">About</a></li>
                    <li><a href="{{ route('portfolio') }}" class="@if(Route::is('portfolio') || Route::is('project.detail')) text-orange font-semibold @else text-gray-700 hover:text-orange @endif transition-colors">Portfolio</a></li>
                </ul>

                <!-- Contact Button -->
                <a href="#contact" class="hidden lg:block bg-orange hover:bg-yellow-500 text-white px-8 py-3 rounded-full font-semibold transition-all shadow-lg">
                    Contact
                </a>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()" class="lg:hidden text-2xl text-gray-800">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4">
                <ul class="flex flex-col space-y-3">
                    <li><a href="{{ route('home') }}" class="@if(Route::is('home')) text-orange font-semibold @else text-gray-700 @endif">Home</a></li>
                    <li><a href="{{ route('about') }}" class="@if(Route::is('about')) text-orange font-semibold @else text-gray-700 @endif">About</a></li>
                    <li><a href="{{ route('portfolio') }}" class="@if(Route::is('portfolio') || Route::is('project.detail')) text-orange font-semibold @else text-gray-700 @endif">Portfolio</a></li>
                    <li><a href="#contact" class="bg-orange text-white px-6 py-2 rounded-full inline-block">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <a href="{{ route('home') }}" class="inline-block mb-4">
                        <img src="{{ asset('assets/logo.png') }}" alt="Aymane El Achiri" class="h-10 w-auto brightness-0 invert">
                    </a>
                    <p class="text-gray-400">Creative Web Developer & UI/UX Designer based in Morocco.</p>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-orange transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-orange transition-colors">About</a></li>
                        <li><a href="{{ route('portfolio') }}" class="hover:text-orange transition-colors">Portfolio</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Tangier, Morocco</li>
                        <li>satayman41@gmail.com</li>
                        <li>+212 707 40 74 25</li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-4">Follow Me</h4>
                    <div class="flex gap-4">
                        <a href="https://www.linkedin.com/in/mohamed-aymane-el-achiri-65383b300/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple transition-all">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com/elachiriiii/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-orange transition-all">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://github.com" target="_blank" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple transition-all">
                            <i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>Copyright © 2025 Aymane El Achiri | All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
    </script>

    @yield('scripts')
</body>
</html>
