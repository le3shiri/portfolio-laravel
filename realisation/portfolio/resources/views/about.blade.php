@extends('layouts.app')

@section('title', 'About - Aymane El Achiri')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-12 bg-gradient-to-br from-purple/10 to-orange/10">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h1 class="text-5xl lg:text-6xl font-bold mb-4">
                <span class="bg-gradient-to-r from-purple to-blue-600 bg-clip-text text-transparent">About Me</span>
            </h1>
            <p class="text-gray-600 text-lg">Get to know more about who I am and what I do</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-20">
        <div class="container mx-auto px-4 lg:px-8">
            
            <!-- Profile Section -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple/20 rounded-full blur-3xl"></div>
                    <img src="{{ asset($developer->photoProfile) }}" alt="{{ $developer->getNomComplet() }}" class="relative z-10 w-full">
                </div>

                <div>
                    <p class="text-orange font-semibold mb-2 text-lg">Who I Am</p>
                    <h2 class="text-4xl font-bold mb-6 text-gray-800">
                        <span class="text-purple">{{ $developer->prenom }}</span> {{ $developer->nom }}
                    </h2>
                    <p class="text-xl font-semibold text-gray-700 mb-6">{{ $developer->role }}</p>
                    
                    <div class="space-y-4 text-gray-600 leading-relaxed mb-8">
                        <p>{{ $developer->bio }}</p>
                        <p>
                            When I'm not coding, you'll find me sharing tech tips in Darija on social media, helping others just like I did when I started from scratch with nothing. I'm passionate about making technology accessible to everyone and empowering the next generation of developers.
                        </p>
                        <p>
                            My journey in web development has been driven by curiosity and determination. I believe in continuous learning and staying updated with the latest technologies to deliver modern, efficient solutions to my clients.
                        </p>
                    </div>

                    <div class="flex gap-4">
                        <a href="#contact" class="bg-orange hover:bg-yellow-500 text-white px-8 py-4 rounded-full font-semibold transition-all shadow-lg inline-flex items-center gap-2">
                            Get In Touch
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="{{ route('portfolio') }}" class="border-2 border-purple hover:bg-purple hover:text-white text-purple px-8 py-4 rounded-full font-semibold transition-all">
                            View Projects
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Information Cards -->
            <div class="mb-20">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Contact Information</h3>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Email -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-14 h-14 bg-purple/10 rounded-full flex items-center justify-center mb-4">
                            <i class="bi bi-envelope-fill text-2xl text-purple"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Email</h4>
                        <a href="mailto:{{ $developer->email }}" class="text-gray-600 hover:text-purple transition-colors break-all">
                            {{ $developer->email }}
                        </a>
                    </div>

                    <!-- Phone -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-14 h-14 bg-orange/10 rounded-full flex items-center justify-center mb-4">
                            <i class="bi bi-telephone-fill text-2xl text-orange"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Phone</h4>
                        <a href="tel:{{ str_replace(' ', '', $developer->numeroTelephone) }}" class="text-gray-600 hover:text-orange transition-colors">
                            {{ $developer->numeroTelephone }}
                        </a>
                    </div>

                    <!-- Location -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-14 h-14 bg-purple/10 rounded-full flex items-center justify-center mb-4">
                            <i class="bi bi-geo-alt-fill text-2xl text-purple"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Location</h4>
                        <p class="text-gray-600">{{ $developer->localisation }}</p>
                    </div>

                    <!-- Availability -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                        <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <i class="bi bi-check-circle-fill text-2xl text-green-600"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Availability</h4>
                        <p class="text-green-600 font-semibold">
                            Available for Freelance
                        </p>
                    </div>
                </div>
            </div>

            <!-- Experience Timeline -->
            <div class="mb-20">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Work Experience</h3>
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-8">
                        
                        <!-- Experience 1 -->
                        <div class="relative pl-8 border-l-4 border-purple">
                            <div class="absolute -left-3 top-0 w-6 h-6 bg-purple rounded-full"></div>
                            <span class="text-orange font-semibold">2025 - Present</span>
                            <h4 class="text-xl font-bold text-gray-800 mt-2">Founder & Owner</h4>
                            <p class="text-purple font-semibold">Inovafy</p>
                            <p class="text-gray-600 mt-2">Leading innovative web development projects and building digital solutions for businesses.</p>
                        </div>

                        <!-- Experience 2 -->
                        <div class="relative pl-8 border-l-4 border-orange">
                            <div class="absolute -left-3 top-0 w-6 h-6 bg-orange rounded-full"></div>
                            <span class="text-orange font-semibold">2024</span>
                            <h4 class="text-xl font-bold text-gray-800 mt-2">Web Developer</h4>
                            <p class="text-purple font-semibold">Quartinno</p>
                            <p class="text-gray-600 mt-2">Developed responsive websites and web applications using modern technologies.</p>
                        </div>

                        <!-- Experience 3 -->
                        <div class="relative pl-8 border-l-4 border-purple">
                            <div class="absolute -left-3 top-0 w-6 h-6 bg-purple rounded-full"></div>
                            <span class="text-orange font-semibold">2024</span>
                            <h4 class="text-xl font-bold text-gray-800 mt-2">Freelance Developer</h4>
                            <p class="text-purple font-semibold">Fiverr</p>
                            <p class="text-gray-600 mt-2">Successfully completed 25+ projects for international clients, specializing in WordPress and custom web development.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="mb-20">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Education & Learning</h3>
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-8">
                        
                        <!-- Education 1 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg">
                            <span class="text-orange font-semibold">2024</span>
                            <h4 class="text-xl font-bold text-gray-800 mt-2">Advanced Web Development & UI/UX Design</h4>
                            <p class="text-purple font-semibold">Solicode Program</p>
                            <p class="text-gray-600 mt-2">Intensive training in modern web technologies, design principles, and best practices.</p>
                        </div>

                        <!-- Education 2 -->
                        <div class="bg-white rounded-2xl p-8 shadow-lg">
                            <span class="text-orange font-semibold">2023 - Present</span>
                            <h4 class="text-xl font-bold text-gray-800 mt-2">Self-Taught Developer</h4>
                            <p class="text-purple font-semibold">Online Learning</p>
                            <p class="text-gray-600 mt-2">Mastered HTML, CSS, JavaScript, React, PHP, and WordPress through online courses, documentation, and hands-on projects.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technologies Section -->
            <div>
                <h3 class="text-3xl font-bold text-center mb-4 text-gray-800">Technologies I Work With</h3>
                <p class="text-center text-gray-600 mb-12">Tools and technologies I use to bring ideas to life</p>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Tech 1 -->
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition-all hover:-translate-y-2">
                        <div class="text-5xl mb-4">⚡</div>
                        <h4 class="font-bold text-gray-800 mb-2">JavaScript</h4>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-purple h-3 rounded-full" style="width: 98%"></div>
                        </div>
                        <p class="text-sm text-gray-600">98% Proficiency</p>
                    </div>

                    <!-- Tech 2 -->
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition-all hover:-translate-y-2">
                        <div class="text-5xl mb-4">🎨</div>
                        <h4 class="font-bold text-gray-800 mb-2">WordPress</h4>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-orange h-3 rounded-full" style="width: 95%"></div>
                        </div>
                        <p class="text-sm text-gray-600">95% Proficiency</p>
                    </div>

                    <!-- Tech 3 -->
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition-all hover:-translate-y-2">
                        <div class="text-5xl mb-4">⚛️</div>
                        <h4 class="font-bold text-gray-800 mb-2">React JS</h4>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-purple h-3 rounded-full" style="width: 88%"></div>
                        </div>
                        <p class="text-sm text-gray-600">88% Proficiency</p>
                    </div>

                    <!-- Tech 4 -->
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg hover:shadow-xl transition-all hover:-translate-y-2">
                        <div class="text-5xl mb-4">🐘</div>
                        <h4 class="font-bold text-gray-800 mb-2">PHP</h4>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-orange h-3 rounded-full" style="width: 85%"></div>
                        </div>
                        <p class="text-sm text-gray-600">85% Proficiency</p>
                    </div>
                </div>
            </div>
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

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple to-blue-600">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Let's Work Together!</h2>
            <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                I'm currently available for freelance work. If you have a project that you want to get started, think you need my help, or just want to say hey, then get in touch.
            </p>
            <a href="#contact" class="bg-orange hover:bg-yellow-500 text-white px-10 py-4 rounded-full font-semibold transition-all shadow-lg inline-flex items-center gap-2">
                Start a Project
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>
@endsection
