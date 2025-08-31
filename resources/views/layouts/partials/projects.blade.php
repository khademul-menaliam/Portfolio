    <!-- ==================== Projects Section ==================== -->
    <section id="projects" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">My <span class="text-primary-light dark:text-primary-dark">Projects</span></h2>
                <div class="w-20 h-1 bg-secondary-light dark:bg-secondary-dark mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                alt="Project 1"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <a href="{{ route('projects.show', ['id' => 1]) }}" class="text-white text-lg font-medium px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-primary-light dark:hover:text-primary-dark transition duration-300">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="{{ route('projects.show', ['id' => 1]) }}" class="hover:underline">
                               E-commerce Platform
                            </a>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            A full-featured online store with cart functionality, user authentication, and payment processing.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">React</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Node.js</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">MongoDB</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Stripe</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1415&q=80"
                                alt="Project 2"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <a href="{{ route('projects.show', ['id' => 2]) }}" class="text-white text-lg font-medium px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-primary-light dark:hover:text-primary-dark transition duration-300">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="{{ route('projects.show', ['id' => 2]) }}" class="hover:underline">
                               Analytics Dashboard
                            </a>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Interactive data visualization dashboard with real-time updates and custom reporting.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">React</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">D3.js</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Express</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">WebSockets</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                alt="Project 3"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <a href="{{ route('projects.show', ['id' => 3]) }}" class="text-white text-lg font-medium px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-primary-light dark:hover:text-primary-dark transition duration-300">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="{{ route('projects.show', ['id' => 3]) }}" class="hover:underline">
                                Task Management App
                            </a>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Collaborative task management system with drag-and-drop interface and team features.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Vue.js</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Firebase</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Real-time DB</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Auth</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="project-card bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                alt="Project 4"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <a href="{{ route('projects.show', ['id' => 4]) }}" class="text-white text-lg font-medium px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-primary-light dark:hover:text-primary-dark transition duration-300">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">
                                <a href="{{ route('projects.show', ['id' => 4]) }}" class="hover:underline">
                                    Portfolio Website Platform
                                </a>
                            </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Niche social network with content sharing, messaging, and community features.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">React Native</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">GraphQL</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Node.js</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="project-card bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                alt="Project 5"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <a href="{{ route('projects.show', ['id' => 5]) }}" class="text-white text-lg font-medium px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-primary-light dark:hover:text-primary-dark transition duration-300">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="{{ route('projects.show', ['id' => 5]) }}" class="hover:underline">
                                CRM System
                            </a>
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            Custom customer relationship management solution for small businesses.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Angular</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">NestJS</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">PostgreSQL</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Docker</span>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="project-card bg-white dark:bg-gray-700 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                alt="Project 6"
                                class="w-full h-full object-cover transition duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-primary-light dark:bg-primary-dark bg-opacity-80 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                            <a href="{{ route('projects.show', ['id' => 6]) }}" class="text-white text-lg font-medium px-4 py-2 border-2 border-white rounded-lg hover:bg-white hover:text-primary-light dark:hover:text-primary-dark transition duration-300">
                                View Project
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">
                            <a href="{{ route('projects.show', ['id' => 6]) }}" class="hover:underline">
                                Attendance Management System
                            </a>
                        </h3>

                        <p class="text-gray-600 dark:text-gray-300 mb-4">
                            All-in-one solution for remote teams with video, chat, and document collaboration.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">React</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">WebRTC</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Node.js</span>
                            <span class="text-xs px-3 py-1 bg-gray-100 dark:bg-gray-600 rounded-full">Redis</span>
                        </div>
                    </div>
                </div>
            </div>

            <div  id="view-projects-btn"  class="text-center mt-12">
                <a href="/projects" class="inline-block px-6 py-3 bg-primary-light dark:bg-primary-dark text-white rounded-lg font-medium hover:bg-opacity-90 transition duration-300">
                    View All Projects
                </a>
            </div>
        </div>
    </section>
    <!-- ==================== End Projects Section ==================== -->
<script>
function updateViewProjectsVisibility() {
    const viewProjects = document.getElementById('view-projects-btn');
    const currentPath = window.location.pathname;

    // Show only if Home page is active (assuming "/" is Home)
    if (currentPath === '/') {
        viewProjects.classList.remove('hidden');
    } else {
        viewProjects.classList.add('hidden');
    }
}

// Call this on page load
document.addEventListener('DOMContentLoaded', updateViewProjectsVisibility);

// Optional: run immediately if DOM is already loaded
if (document.readyState !== 'loading') {
    updateViewProjectsVisibility();
}
</script>
