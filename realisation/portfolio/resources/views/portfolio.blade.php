@extends('layouts.app')

@section('title', 'Portfolio - Aymane El Achiri')

@section('styles')
<style>
    .filter-btn {
        background: white;
        color: #6B7280;
    }
    
    .filter-btn.active {
        background: #FFB800;
        color: white;
        box-shadow: 0 4px 6px -1px rgba(255, 184, 0, 0.3);
    }
    
    .filter-btn:hover {
        background: #FFB800;
        color: white;
    }
    
    .project-card {
        animation: fadeIn 0.5s ease-in;
    }
    
    .project-card.hidden {
        display: none;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-12 bg-gradient-to-br from-purple/10 to-orange/10">
        <div class="container mx-auto px-4 lg:px-8 text-center">
            <h1 class="text-5xl lg:text-6xl font-bold mb-4">
                <span class="bg-gradient-to-r from-purple to-blue-600 bg-clip-text text-transparent">My Portfolio</span>
            </h1>
            <p class="text-gray-600 text-lg">Explore my recent projects and creative works</p>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-20">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($projets as $projet)
                <div class="project-card">
                    <div class="group relative overflow-hidden rounded-3xl shadow-xl bg-white">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ asset($projet->image) }}" alt="{{ $projet->titre }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-purple via-purple/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <span class="bg-orange text-white px-3 py-1 rounded-full text-sm font-semibold">Project</span>
                                <h3 class="text-white text-2xl font-bold mt-3 mb-2">{{ $projet->titre }}</h3>
                                <p class="text-white/90 text-sm mb-4">{{ Str::limit($projet->description, 60) }}</p>
                                <a href="{{ route('project.detail', $projet->id) }}" class="inline-flex items-center gap-2 text-white hover:text-orange transition-colors font-semibold">
                                    View Details <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-orange text-sm font-semibold">{{ $projet->dateDebut }} - {{ $projet->dateFin }}</span>
                            <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">{{ $projet->titre }}</h3>
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($projet->description, 50) }}</p>
                            <div class="flex flex-wrap gap-2">
                                @foreach($projet->getTechnologies() as $tech)
                                <span class="text-xs bg-purple/10 text-purple px-3 py-1 rounded-full">{{ $tech->nom }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

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
            <h2 class="text-4xl font-bold text-white mb-6">Like What You See?</h2>
            <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
                Let's collaborate and create something amazing together. I'm always excited to work on new and challenging projects.
            </p>
            <a href="#contact" class="bg-orange hover:bg-yellow-500 text-white px-10 py-4 rounded-full font-semibold transition-all shadow-lg inline-flex items-center gap-2">
                Start a Project
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </section>
@endsection
