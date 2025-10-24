@extends('layouts.app')

@section('title', 'Aymane El Achiri - Creative Web Developer')

@section('body-class', 'overflow-x-hidden')

@section('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes float-delayed {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    .animate-float-delayed {
        animation: float-delayed 3s ease-in-out infinite;
        animation-delay: 0.5s;
    }

    .animate-spin-slow {
        animation: spin-slow 10s linear infinite;
    }
</style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center pt-24 pb-12 overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="relative z-10">
                    <p class="text-lg text-gray-600 mb-4 font-medium">Hello, I Am</p>
                    <h1 class="text-5xl lg:text-7xl font-bold mb-6 leading-tight">
                        <span class="bg-gradient-to-r from-purple to-blue-600 bg-clip-text text-transparent">
                            {{ $developer->getNomComplet() }}
                        </span>
                    </h1>
                    <p class="text-gray-600 text-lg mb-8 max-w-lg leading-relaxed">
                        {{ $developer->bio }}
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4 mb-8">
                        <a href="#contact" class="bg-orange hover:bg-yellow-500 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg inline-flex items-center gap-2">
                            Hire Me
                        </a>
                        <a href="{{ route('portfolio') }}" class="text-purple font-semibold border-b-2 border-purple hover:text-blue-600 hover:border-blue-600 transition-colors py-4">
                            See My Work
                        </a>
                    </div>
                </div>

                <!-- Right Content - Profile Image -->
                <div class="relative">
                    <!-- Purple Blob Background -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px]">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <path fill="#6C63FF" d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.6,90,-16.3,88.5,-0.9C87,14.6,81.4,29.2,73.1,42.8C64.8,56.4,53.8,69,40.1,76.8C26.4,84.6,10,87.6,-5.8,87.1C-21.6,86.6,-36.8,82.6,-49.7,74.5C-62.6,66.4,-73.2,54.2,-79.8,39.8C-86.4,25.4,-89,8.8,-87.1,-7.2C-85.2,-23.2,-78.8,-38.6,-68.7,-50.8C-58.6,-63,-44.8,-71.9,-30.2,-78.8C-15.6,-85.7,-0.2,-90.6,14.5,-89.1C29.2,-87.6,30.6,-83.6,44.7,-76.4Z" transform="translate(100 100)" />
                        </svg>
                    </div>

                    <!-- Profile Image -->
                    <div class="relative z-10 flex justify-center">
                        <img src="{{ asset($developer->photoProfile) }}" alt="{{ $developer->getNomComplet() }}" class="w-full max-w-md relative z-10">
                    </div>

                    <!-- Best Design Award Badge -->
                    <div class="absolute top-1/4 left-0 lg:left-10 bg-white rounded-2xl shadow-xl p-4 z-20 animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple rounded-full flex items-center justify-center">
                                <i class="bi bi-trophy-fill text-white"></i>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Fastest Service</p>
                                <p class="text-sm text-gray-600">Award</p>
                            </div>
                        </div>
                    </div>

                    <!-- Happy Customers Badge -->
                    <div class="absolute top-1/3 right-0 lg:right-10 bg-white rounded-2xl shadow-xl p-4 z-20 animate-float-delayed">
                        <div class="text-center">
                            <p class="text-3xl font-bold text-purple">200+</p>
                            <p class="text-sm text-gray-600">Happy<br>Customers</p>
                        </div>
                    </div>

                    <!-- Decorative Elements -->
                    <div class="absolute top-10 right-20 w-12 h-12 bg-orange rounded-full opacity-60 animate-bounce"></div>
                    <div class="absolute bottom-20 right-10 w-8 h-8 bg-purple rounded-lg opacity-60 rotate-45 animate-spin-slow"></div>
                    <div class="absolute top-32 left-10 w-6 h-6 bg-pink-400 rounded-full opacity-60"></div>
                    <div class="absolute bottom-32 left-20 w-10 h-10 border-4 border-orange rounded-full opacity-60"></div>
                </div>
            </div>
        </div>

        <!-- Background Decorative Circles -->
        <div class="absolute top-20 right-1/4 w-32 h-32 bg-purple/5 rounded-full blur-2xl"></div>
        <div class="absolute bottom-20 left-1/4 w-40 h-40 bg-orange/5 rounded-full blur-3xl"></div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-4 text-gray-800">
                    <span class="text-purple">Get In</span> Touch
                </h2>
                <p class="text-gray-600 text-lg mb-12">
                    Ready to start your project? Let's talk about how I can help bring your ideas to life.
                </p>
                
                <div class="grid md:grid-cols-2 gap-8 max-w-2xl mx-auto">
                    <!-- Email -->
                    <a href="mailto:{{ $developer->email }}" class="group bg-gradient-to-br from-purple/10 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all">
                        <div class="w-16 h-16 bg-purple rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="bi bi-envelope-fill text-2xl text-white"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Email Me</h3>
                        <p class="text-purple font-semibold break-all">{{ $developer->email }}</p>
                    </a>

                    <!-- Phone -->
                    <a href="tel:{{ str_replace(' ', '', $developer->numeroTelephone) }}" class="group bg-gradient-to-br from-orange/10 to-yellow-50 rounded-2xl p-8 hover:shadow-xl transition-all">
                        <div class="w-16 h-16 bg-orange rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                            <i class="bi bi-telephone-fill text-2xl text-white"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2 text-lg">Call Me</h3>
                        <p class="text-orange font-semibold">{{ $developer->numeroTelephone }}</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
