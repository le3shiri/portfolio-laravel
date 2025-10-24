@extends('layouts.app')

@section('title', $projet->titre . ' - Aymane El Achiri')

@section('content')
    <!-- Project Header -->
    <section class="pt-32 pb-12 bg-gradient-to-br from-purple/10 to-orange/10">
        <div class="container mx-auto px-4 lg:px-8">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-purple hover:text-orange transition-colors mb-6">
                <i class="bi bi-arrow-left"></i> Back to Portfolio
            </a>
            <div class="max-w-4xl">
                <span class="bg-orange text-white px-4 py-2 rounded-full text-sm font-semibold inline-block mb-4">
                    Featured Project
                </span>
                <h1 class="text-5xl lg:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-purple to-blue-600 bg-clip-text text-transparent">
                        {{ $projet->titre }}
                    </span>
                </h1>
                <p class="text-gray-600 text-xl leading-relaxed mb-6">
                    {{ $projet->description }}
                </p>
                <div class="flex flex-wrap gap-6 text-sm">
                    <div>
                        <p class="text-gray-500 mb-1">Duration</p>
                        <p class="font-semibold text-gray-800">{{ $projet->dateDebut }} - {{ $projet->dateFin }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Image -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="rounded-3xl overflow-hidden shadow-2xl">
                <img src="{{ asset($projet->image) }}" alt="{{ $projet->titre }}" class="w-full">
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="py-20">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                
                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-12">
                    
                    <!-- Overview -->
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-gray-800">
                            <span class="text-purple">Project</span> Overview
                        </h2>
                        <p class="text-gray-600 leading-relaxed text-lg">
                            {{ $projet->description }}
                        </p>
                    </div>

                    <!-- Technologies Used -->
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-gray-800">
                            <span class="text-purple">Technologies</span> Used
                        </h2>
                        <div class="flex flex-wrap gap-3">
                            @foreach($projet->getTechnologies() as $tech)
                            <span class="bg-gradient-to-r from-purple to-blue-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                                {{ $tech->nom }}
                            </span>
                            @endforeach
                        </div>
                    </div>

                    <!-- Key Features -->
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-gray-800">
                            <span class="text-purple">Key</span> Features
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-purple">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-purple/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="bi bi-check-circle-fill text-2xl text-purple"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-800 mb-2">Modern Design</h3>
                                        <p class="text-gray-600 text-sm">Clean and professional interface with attention to detail</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-orange">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-orange/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="bi bi-phone-fill text-2xl text-orange"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-800 mb-2">Responsive Layout</h3>
                                        <p class="text-gray-600 text-sm">Optimized for all devices and screen sizes</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-purple">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-purple/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="bi bi-speedometer2 text-2xl text-purple"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-800 mb-2">High Performance</h3>
                                        <p class="text-gray-600 text-sm">Fast loading times and optimized code</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-2xl p-6 shadow-lg border-l-4 border-orange">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 bg-orange/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="bi bi-shield-check text-2xl text-orange"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-gray-800 mb-2">Secure & Reliable</h3>
                                        <p class="text-gray-600 text-sm">Built with security best practices in mind</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    
                    <!-- Project Info Card -->
                    <div class="bg-white rounded-2xl p-8 shadow-xl sticky top-24">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800">Project Info</h3>
                        
                        <div class="space-y-6">
                            <div>
                                <p class="text-gray-500 text-sm mb-2">Start Date</p>
                                <p class="font-semibold text-gray-800">{{ $projet->dateDebut }}</p>
                            </div>
                            
                            <div class="border-t pt-6">
                                <p class="text-gray-500 text-sm mb-2">End Date</p>
                                <p class="font-semibold text-gray-800">{{ $projet->dateFin }}</p>
                            </div>
                            
                            <div class="border-t pt-6">
                                <p class="text-gray-500 text-sm mb-2">Technologies</p>
                                <div class="flex flex-wrap gap-2 mt-2">
                                    @foreach($projet->getTechnologies() as $tech)
                                    <span class="text-xs bg-purple/10 text-purple px-3 py-1 rounded-full font-semibold">
                                        {{ $tech->nom }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t">
                            <a href="{{ route('portfolio') }}" class="block w-full bg-purple hover:bg-blue-600 text-white text-center px-6 py-4 rounded-full font-semibold transition-all shadow-lg">
                                View More Projects
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="py-20 bg-gradient-to-r from-purple to-blue-600">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Interested in Working Together?</h2>
            <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                I'm always open to discussing new projects and creative ideas. Let's create something amazing together!
            </p>
            <a href="#contact" class="bg-orange hover:bg-yellow-500 text-white px-10 py-4 rounded-full font-semibold transition-all shadow-lg inline-flex items-center gap-2">
                Get In Touch
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
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
