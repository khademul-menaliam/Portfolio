@extends('layouts.app')
@section('content')
                {{-- <!-- hero -->
        <section class="project-hero text-white py-16 md:py-24">
            <div class="container mx-auto px-4">
                <a href="#" class="back-button inline-flex items-center text-white opacity-90 hover:opacity-100 mb-6 transition-opacity">
                    <i class="fas fa-arrow-left mr-2"></i>
                    <span>Back to Projects</span>
                </a>
                <h1 class="text-4xl md:text-5xl font-bold mb-4 animate-fade-in">E-Commerce Platform</h1>
                <p class="text-xl max-w-2xl opacity-90 animate-fade-in">A modern, responsive e-commerce solution with seamless user experience and robust functionality.</p>
            </div>
        </section>

        <!-- Project Details project for id ==1 -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <!-- Main Content -->
                    <div class="lg:col-span-2">
                        <!-- Project Image -->
                        <div class="rounded-xl overflow-hidden shadow-lg mb-8 project-image">
                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                 alt="E-Commerce Platform" class="w-full h-auto">
                        </div>

                        <!-- Project Description -->
                        <div class="mb-12">
                            <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-200">Project Overview</h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">
                                This e-commerce platform was designed to provide users with a seamless shopping experience.
                                The project involved creating an intuitive user interface, implementing secure payment processing,
                                and developing a robust admin dashboard for product management.
                            </p>
                            <p class="text-gray-600 dark:text-gray-300">
                                The platform features user authentication, product filtering and search, shopping cart functionality,
                                order tracking, and a responsive design that works flawlessly across all devices. Special attention
                                was given to performance optimization and accessibility standards.
                            </p>
                        </div>

                        <!-- Gallery -->
                        <div class="mb-12">
                            <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Project Gallery</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="rounded-lg overflow-hidden shadow-md gallery-item">
                                    <img src="https://images.unsplash.com/photo-1563014959-7aaa83350992?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                         alt="E-Commerce Dashboard" class="w-full h-48 object-cover">
                                </div>
                                <div class="rounded-lg overflow-hidden shadow-md gallery-item">
                                    <img src="https://images.unsplash.com/photo-1556155092-490a1ba16284?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                                         alt="Product Page" class="w-full h-48 object-cover">
                                </div>
                                <div class="rounded-lg overflow-hidden shadow-md gallery-item">
                                    <img src="https://images.unsplash.com/photo-1607083206968-13611e3d76db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1115&q=80"
                                         alt="Shopping Cart" class="w-full h-48 object-cover">
                                </div>
                                <div class="rounded-lg overflow-hidden shadow-md gallery-item">
                                    <img src="https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1065&q=80"
                                         alt="Checkout Process" class="w-full h-48 object-cover">
                                </div>
                            </div>
                        </div>

                        <!-- Challenges & Solutions -->
                        <div>
                            <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-200">Challenges & Solutions</h2>
                            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl">
                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-2 text-indigo-600 dark:text-indigo-400">Performance Optimization</h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        The initial load time was exceeding 5 seconds due to large image files and unoptimized code.
                                        I implemented lazy loading, image compression, and code splitting to reduce load time to under 2 seconds.
                                    </p>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold mb-2 text-indigo-600 dark:text-indigo-400">Payment Integration</h3>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        Integrating multiple payment gateways while maintaining security standards was challenging.
                                        I used a well-documented payment API and implemented proper encryption to handle sensitive data.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="lg:col-span-1">
                        <!-- Project Info -->
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md sticky top-24">
                            <h2 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">Project Details</h2>

                            <div class="mb-6">
                                <h3 class="font-semibold text-gray-700 dark:text-gray-300">Build For</h3>
                                <p class="text-gray-600 dark:text-gray-400">Own</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="font-semibold text-gray-700 dark:text-gray-300">Timeline</h3>
                                <p class="text-gray-600 dark:text-gray-400">January 2025 - June 2025</p>
                            </div>

                            <div class="mb-6">
                                <h3 class="font-semibold text-gray-700 dark:text-gray-300">My Role</h3>
                                <p class="text-gray-600 dark:text-gray-400">Full-Stack Developer</p>
                            </div>

                            <div class="mb-8">
                                <h3 class="font-semibold text-gray-700 dark:text-gray-300 mb-2">Technologies</h3>
                                <div class="flex flex-wrap gap-2">
                                    <span class="tech-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">React</span>
                                    <span class="tech-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Node.js</span>
                                    <span class="tech-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">MongoDB</span>
                                    <span class="tech-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Express</span>
                                    <span class="tech-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">TailwindCSS</span>
                                    <span class="tech-badge bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">Stripe API</span>
                                </div>
                            </div>

                            <div class="flex flex-col space-y-3">
                                <a href="#" class="bg-indigo-600 text-white text-center py-3 rounded-lg font-medium hover:bg-indigo-700 transition-colors">
                                    <i class="fas fa-external-link-alt mr-2"></i>Live Demo
                                </a>
                                <a href="#" class="border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-center py-3 rounded-lg font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
                                    <i class="fab fa-github mr-2"></i>View Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

   <!-- hero -->
    <section class="project-hero text-white py-16 md:py-24">
        <div class="container mx-auto px-4">
            <a href="{{ url('/') }}" class="back-button inline-flex items-center text-white opacity-90 hover:opacity-100 mb-6 transition-opacity">
                <i class="fas fa-arrow-left mr-2"></i>
                <span>Back to Projects</span>
            </a>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $project['title'] }}</h1>
            <p class="text-xl max-w-2xl opacity-90">{{ $project['subtitle'] }}</p>
        </div>
    </section>

    <!-- Project Details -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Project Image -->
                    <div class="rounded-xl overflow-hidden shadow-lg mb-8 project-image">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-auto">
                    </div>

                    <!-- Project Description -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold mb-4">Project Overview</h2>
                        @foreach($project['overview'] as $paragraph)
                            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $paragraph }}</p>
                        @endforeach
                    </div>

                    <!-- Gallery -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold mb-6">Project Gallery</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($project['gallery'] as $img)
                                <div class="rounded-lg overflow-hidden shadow-md gallery-item">
                                    <img src="{{ $img }}" class="w-full h-48 object-cover">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Challenges -->
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Challenges & Solutions</h2>
                        <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl">
                            @foreach($project['challenges'] as $challenge)
                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-2 text-indigo-600">{{ $challenge['title'] }}</h3>
                                    <p class="text-gray-600 dark:text-gray-300">{{ $challenge['content'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md sticky top-24">
                        <h2 class="text-xl font-bold mb-4">Project Details</h2>

                        <div class="mb-6">
                            <h3 class="font-semibold">Build For</h3>
                            <p>{{ $project['build_for'] }}</p>
                        </div>

                        <div class="mb-6">
                            <h3 class="font-semibold">Timeline</h3>
                            <p>{{ $project['timeline'] }}</p>
                        </div>

                        <div class="mb-6">
                            <h3 class="font-semibold">My Role</h3>
                            <p>{{ $project['role'] }}</p>
                        </div>

                        <div class="mb-8">
                            <h3 class="font-semibold mb-2">Technologies</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['technologies'] as $tech)
                                    <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 px-3 py-1 rounded-full text-sm">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex flex-col space-y-3">
                            <a href="{{ $project['live_demo'] }}" class="bg-indigo-600 text-white text-center py-3 rounded-lg font-medium hover:bg-indigo-700">
                                <i class="fas fa-external-link-alt mr-2"></i>Live Demo
                            </a>
                            <a href="{{ $project['code'] }}" class="border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 text-center py-3 rounded-lg font-medium hover:bg-gray-50 dark:hover:bg-gray-700">
                                <i class="fab fa-github mr-2"></i>View Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Call to Action -->
        <section class="py-16 bg-indigo-50 dark:bg-gray-800">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800 dark:text-gray-200">Interested in working together?</h2>
                <a href="#" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-lg font-medium hover:bg-indigo-700 transition-colors">
                    Get in Touch
                </a>
            </div>
        </section>

    <script>
        // Simple animation on page load
        document.addEventListener('DOMContentLoaded', function() {
            const projectTitle = document.querySelector('.project-hero h1');
            const projectDesc = document.querySelector('.project-hero p');

            // Add delay to description animation
            setTimeout(() => {
                projectDesc.classList.add('animate-fade-in');
            }, 300);
        });
    </script>
@endsection
