<section id="home" class="min-h-screen flex items-center pt-20">

    <div class="container mx-auto px-6 py-12 md:py-24 relative z-10 flex flex-col md:flex-row items-center">
        {{-- <div class="container mx-auto px-6 py-12 md:py-24 flex flex-col md:flex-row items-center"> --}}
        <!-- Left side (Intro text) -->
        <div class="md:w-1/2 mb-12 md:mb-0 text-center md:text-left" data-aos="fade-up">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Hi, I'm <span class="text-primary-light dark:text-primary-dark">Khademul Islam</span>
            </h1>
            <h2 class="text-2xl md:text-3xl font-semibold mb-6">
                <span class="text-secondary-light dark:text-secondary-dark">Web</span> Developer
            </h2>
            <p class="text-lg mb-8 text-gray-700 dark:text-gray-300 max-w-lg mx-auto md:mx-0">
                I build exceptional digital experiences that are fast, accessible, and visually appealing.
            </p>
            <div class="flex justify-center md:justify-start space-x-4">
                <a href="#contact"
                    class="bg-primary-light dark:bg-primary-dark text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition duration-300">
                    Hire Me
                </a>
                <a href="#projects"
                    class="border-2 border-primary-light dark:border-primary-dark text-primary-light dark:text-primary-dark px-6 py-3 rounded-lg font-medium hover:bg-primary-light dark:hover:bg-primary-dark hover:bg-opacity-10 transition duration-300">
                    View Work
                </a>
            </div>
        </div>

        <!-- Right side (Floating profile image) -->
        <div class="md:w-1/2 flex justify-center" data-aos="fade-in">
            <div class="relative w-48 h-48 sm:w-64 sm:h-64 md:w-80 md:h-80 lg:w-96 lg:h-96">
                <!-- Pulsing circles -->
                <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute inset-4 bg-secondary-light dark:bg-secondary-dark rounded-full opacity-20 animate-pulse delay-300"></div>

                <!-- Profile image -->
                <div class="absolute inset-8 bg-white dark:bg-gray-800 rounded-full overflow-hidden border-4 sm:border-6 md:border-8 border-white dark:border-gray-800 shadow-xl">
                    <img src="{{ asset('assets/images/1756624740955.jpg') }}"
                            alt="Profile"
                            class="w-full h-full object-cover">
                </div>

                <!-- Floating code icon -->
                <div class="absolute -bottom-4 -right-4 bg-white dark:bg-gray-800 p-3 sm:p-4 rounded-full shadow-lg">
                    <div class="w-12 h-12 sm:w-16 sm:h-16 bg-primary-light dark:bg-primary-dark rounded-full flex items-center justify-center text-white">
                        <i class="fas fa-code text-xl sm:text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
