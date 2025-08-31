{{-- <header class="bg-gray-100 dark:bg-gray-800 p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">
            <!-- Link to home page -->
            <a href="{{ url('/') }}">{{ config('app.name', 'My Portfolio') }}</a>
        </h1>

        <!-- Navigation -->
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#about" class="hover:text-blue-500">About</a></li>
                <li><a href="#skills" class="hover:text-blue-500">Skills</a></li>
                <li><a href="#projects" class="hover:text-blue-500">Projects</a></li>
                <li><a href="#contact" class="hover:text-blue-500">Contact</a></li>
            </ul>
        </nav>

        <!-- Mode toggle buttons -->
        <div class="flex space-x-2">
            <button onclick="document.documentElement.classList.toggle('dark')" class="px-2 py-1 border rounded">Dark/Light</button>
            <button onclick="document.documentElement.classList.toggle('eye-comfort')" class="px-2 py-1 border rounded">Eye Comfort</button>
        </div>
    </div>
</header> --}}

    <!-- ==================== Header/Navigation ==================== -->
    <header class="fixed w-full z-50 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold text-primary-light dark:text-primary-dark">
                    <span class="text-secondary-light dark:text-secondary-dark">P</span>ortfolio
                </a>

                <div class="flex items-center space-x-6">
                    <nav class="hidden md:flex space-x-8">
                        <a href="/" class="nav-link active">Home</a>
                        <a href="/about" class="nav-link">About</a>
                        <a href="/skills" class="nav-link">Skills</a>
                        <a href="/projects" class="nav-link">Projects</a>
                        <a href="/contact" class="nav-link">Contact</a>
                    </nav>

                    <button id="theme-toggle" class="p-2 rounded-full focus:outline-none hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-200">
                        <i id="moon-icon" class="fas fa-moon text-gray-700 dark:text-yellow-300 hidden dark:block"></i>
                        <i id="sun-icon" class="fas fa-sun text-gray-700 dark:text-yellow-300 block dark:hidden"></i>
                    </button>

                   <button id="eye-comfort-toggle" class="px-2 py-1 border rounded hidden">
                    Eye Comfort
                    </button>




                    <button id="mobile-menu-button" class="md:hidden p-2 rounded-full focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 shadow-lg">
            <div class="container mx-auto px-6 py-4 flex flex-col space-y-4">
                <a href="/" class="nav-link active">Home</a>
                <a href="/about" class="nav-link">About</a>
                <a href="/skills" class="nav-link">Skills</a>
                <a href="/projects" class="nav-link">Projects</a>
                <a href="/contact" class="nav-link">Contact</a>
            </div>
        </div>

    {{-- <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-800 shadow-lg mt-16">
        <div class="container mx-auto px-6 py-4 flex flex-col space-y-4">
            <a href="/" class="nav-link active">Home</a>
            <a href="/about" class="nav-link">About</a>
            <a href="/skills" class="nav-link">Skills</a>
            <a href="/projects" class="nav-link">Projects</a>
            <a href="/contact" class="nav-link">Contact</a>
        </div>
    </div> --}}

    </header>
    <!-- ==================== End Header/Navigation ==================== -->

<script>
    document.querySelectorAll("nav a:not([href='/'])").forEach(link => {
        link.setAttribute("target", "_blank");
        link.setAttribute("rel", "noopener noreferrer");
    });
</script>
<script>
const html = document.documentElement;
const themeToggleBtn = document.getElementById('theme-toggle');
const moonIcon = document.getElementById('moon-icon');
const sunIcon = document.getElementById('sun-icon');
const eyeToggle = document.getElementById('eye-comfort-toggle');
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

// ---------------------- Theme Initialization ----------------------
function initializeTheme() {
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }

    // Show/hide Eye Comfort button
    updateEyeComfortVisibility();

    // Load Eye Comfort if light mode
    if (!html.classList.contains('dark') && localStorage.getItem('eye-comfort') === 'on') {
        html.classList.add('eye-comfort');
    }

    updateThemeIcons();
}

// ---------------------- Update Eye Comfort Visibility ----------------------
function updateEyeComfortVisibility() {
    if (html.classList.contains('dark')) {
        eyeToggle.classList.add('hidden');
        html.classList.remove('eye-comfort'); // remove if switching to dark
    } else {
        eyeToggle.classList.remove('hidden');
    }
}

// ---------------------- Update Theme Icons ----------------------
function updateThemeIcons() {
    if (html.classList.contains('dark')) {
        moonIcon.classList.remove('hidden');
        sunIcon.classList.add('hidden');
    } else {
        moonIcon.classList.add('hidden');
        sunIcon.classList.remove('hidden');
    }
}

// ---------------------- Theme Toggle ----------------------
themeToggleBtn.addEventListener('click', () => {
    html.classList.toggle('dark');
    localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');

    updateEyeComfortVisibility();
    updateThemeIcons();

    // Small click feedback
    themeToggleBtn.style.transform = 'scale(0.95)';
    setTimeout(() => themeToggleBtn.style.transform = 'scale(1)', 150);
});

// ---------------------- Eye Comfort Toggle ----------------------
eyeToggle.addEventListener('click', () => {
    if (!html.classList.contains('dark')) { // only works in light mode
        html.classList.toggle('eye-comfort');
        localStorage.setItem('eye-comfort', html.classList.contains('eye-comfort') ? 'on' : 'off');
    }
});

// ---------------------- System Preference Listener ----------------------
window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
    if (!localStorage.getItem('theme')) {
        if (e.matches) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }
        updateEyeComfortVisibility();
        updateThemeIcons();
    }
});

// ---------------------- Navbar Active Link ----------------------
function updateActiveNavLink() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        link.classList.remove('active');
        const linkPath = link.getAttribute('href');
        if (currentPath === '/' && linkPath === '/') {
            link.classList.add('active');
        } else if (currentPath === linkPath) {
            link.classList.add('active');
        }
    });
}

// ---------------------- Mobile Menu Toggle ----------------------
mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Close mobile menu on link click
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => mobileMenu.classList.add('hidden'));
});

// ---------------------- Initialization ----------------------
document.addEventListener('DOMContentLoaded', () => {
    initializeTheme();
    updateActiveNavLink();
});

// Run immediately if DOM is already loaded
if (document.readyState !== 'loading') {
    initializeTheme();
    updateActiveNavLink();
}
</script>




