
    <!-- ==================== About Section ==================== -->
    <section id="about" class="py-20 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">About <span class="text-primary-light dark:text-primary-dark">Me</span></h2>
                <div class="w-20 h-1 bg-secondary-light dark:bg-secondary-dark mx-auto"></div>
            </div>

            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                    <div class="relative w-64 h-64 rounded-full overflow-hidden border-4 border-primary-light dark:border-primary-dark shadow-lg">
                        <img src="assets/images/about.jpg" alt="About Me"  class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="md:w-2/3 md:pl-12">
                    <h3 class="text-2xl font-semibold mb-4">Who am I?</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        I’m <strong>Khademul islam</strong>, a junior web developer with a foundation in
                        <strong>PHP, Laravel and MySQL</strong> .<br>
                        I’ve built hands-on projects like <strong>portfolio sites, task management apps, dashboards and attendance systems</strong>, gaining experience in
                        <strong>backend development, database design, and authentication</strong>.<br>
                        I’m eager to contribute to real-world projects and grow as a <strong>full-stack developer</strong>.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <h4 class="font-semibold mb-2 flex items-center">
                                <i class="fas fa-user mr-2 text-primary-light dark:text-primary-dark"></i>
                                Personal Info
                            </h4>
                            <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                                <li><span class="font-medium">Name:</span> Md Khademul islam</li>
                                <li><span class="font-medium">Email:</span> khademulislam1080@gmail.com</li>
                                <li><span class="font-medium">Phone:</span> +18801641305021</li>
                                <li><span class="font-medium">Address:</span> 40 Feet Road, Mohammadpur Dhaka, Bangladesh</li>
                                <li><span class="bg-green-300 text-black-800 px-2 py-1 rounded text-sm font-medium">Open for Full-Time</span></li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-semibold mb-2 flex items-center">
                                <i class="fas fa-briefcase mr-2 text-primary-light dark:text-primary-dark"></i>
                                Certifications & Training
                            </h4>
                            <ul class="text-gray-600 dark:text-gray-300 space-y-2">
                                <li class="flex justify-between items-start md:items-center border-l-4 border-primary-light dark:border-primary-dark pl-4 py-2">
                                    <span class="font-medium text-gray-800 dark:text-gray-100">Professional Web Developer</span>
                                    <span class="text-gray-600 dark:text-gray-300 text-right">Industrial Training, Creative IT Institute</span>
                                </li>
                                <li class="flex justify-between items-start md:items-center border-l-4 border-primary-light dark:border-primary-dark pl-4 py-2">
                                    <span class="font-medium text-gray-800 dark:text-gray-100">B.Sc. in Computer Science & Engineering</span>
                                    <span class="text-gray-600 dark:text-gray-300 text-right">Dhaka International University, 2025</span>
                                </li>
                                <li class="flex justify-between items-start md:items-center border-l-4 border-primary-light dark:border-primary-dark pl-4 py-2">
                                    <span class="font-medium text-gray-800 dark:text-gray-100">Diploma in Computer Technology</span>
                                    <span class="text-gray-600 dark:text-gray-300 text-right">Cox's Bazar Polytechnic Institute</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://github.com/khademul-menaliam" class="flex items-center px-4 py-2 bg-gray-400 dark:bg-gray-700 rounded-lg">
                            <i class="fab fa-github mr-2"></i> GitHub
                        </a>
                        <a href="https://www.linkedin.com/in/khademul-islam-a46915233/" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg">
                            <i class="fab fa-linkedin mr-2"></i> LinkedIn
                        </a>
                        <a href="https://x.com/" class="flex items-center px-4 py-2 bg-blue-400 text-white rounded-lg">
                            <i class="fab fa-twitter mr-2"></i> Twitter
                        </a>
                        <a href="https://www.instagram.com/" class="flex items-center px-4 py-2 bg-blue-400 text-white rounded-lg">
                            <i class="fab fa-instagram mr-2"></i> Instagram
                        </a>
                        <a href="{{ asset('cv.pdf') }}" download="CV_Khademul_Islam.pdf"
                        class="flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-800 transition">
                            <i class="fas fa-download mr-2"></i> Download CV
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End About Section ==================== -->

    <!-- ==================== Skills Section ==================== -->
    <section id="skills" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">My <span class="text-primary-light dark:text-primary-dark">Skills</span></h2>
                <div class="w-20 h-1 bg-secondary-light dark:bg-secondary-dark mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 gap-12">
                {{-- <div class="space-y-6"> --}}
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Technical Skills</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Skill Item -->
                    <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold text-gray-800 dark:text-gray-100">HTML/CSS</span>
                        <span class="text-gray-600 dark:text-gray-300">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-400 to-blue-500 h-3 rounded-full transition-all duration-1000 ease-in-out" style="width: 75%;"></div>
                    </div>
                    </div>

                    <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold text-gray-800 dark:text-gray-100">PHP</span>
                        <span class="text-gray-600 dark:text-gray-300">70%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-3 rounded-full transition-all duration-1000 ease-in-out" style="width: 70%;"></div>
                    </div>
                    </div>

                    <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold text-gray-800 dark:text-gray-100">Laravel</span>
                        <span class="text-gray-600 dark:text-gray-300">65%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-3 rounded-full transition-all duration-1000 ease-in-out" style="width: 65%;"></div>
                    </div>
                    </div>

                    <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold text-gray-800 dark:text-gray-100">MySQL</span>
                        <span class="text-gray-600 dark:text-gray-300">65%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-400 to-purple-500 h-3 rounded-full transition-all duration-1000 ease-in-out" style="width: 65%;"></div>
                    </div>
                    </div>

                    <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold text-gray-800 dark:text-gray-100">C</span>
                        <span class="text-gray-600 dark:text-gray-300">80%</span>
                    </div>
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-teal-500 h-3 rounded-full transition-all duration-1000 ease-in-out" style="width: 80%;"></div>
                    </div>
                    </div>
                    </div>


                </div>
{{--
                <div>
                    <h3 class="text-2xl font-semibold mb-6">Professional Skills</h3>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                            <div class="w-12 h-12 bg-primary-light dark:bg-primary-dark bg-opacity-10 dark:bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-comments text-primary-light dark:text-primary-dark text-xl"></i>
                            </div>
                            <h4 class="font-semibold mb-2">Communication</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                Effective communication with team members and clients.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                            <div class="w-12 h-12 bg-secondary-light dark:bg-secondary-dark bg-opacity-10 dark:bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-users text-secondary-light dark:text-secondary-dark text-xl"></i>
                            </div>
                            <h4 class="font-semibold mb-2">Team Work</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                Collaborative approach to problem solving.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                            <div class="w-12 h-12 bg-primary-light dark:bg-primary-dark bg-opacity-10 dark:bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-lightbulb text-primary-light dark:text-primary-dark text-xl"></i>
                            </div>
                            <h4 class="font-semibold mb-2">Creativity</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                Innovative solutions to complex problems.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                            <div class="w-12 h-12 bg-secondary-light dark:bg-secondary-dark bg-opacity-10 dark:bg-opacity-20 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-project-diagram text-secondary-light dark:text-secondary-dark text-xl"></i>
                            </div>
                            <h4 class="font-semibold mb-2">Project Management</h4>
                            <p class="text-gray-600 dark:text-gray-300 text-sm">
                                Organizing and managing projects efficiently.
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="mt-16">
                <h3 class="text-2xl font-semibold mb-6 text-center">Tools & Technologies</h3>

                <div class="flex flex-wrap justify-center gap-6">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-html5 text-3xl text-orange-500"></i>
                        </div>
                        <span class="text-sm">HTML5</span>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-css3-alt text-3xl text-blue-500"></i>
                        </div>
                        <span class="text-sm">CSS3</span>
                    </div>
                    <!-- MySQL -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fas fa-database text-3xl text-blue-600"></i>
                        </div>
                        <span class="text-sm">MySQL</span>
                    </div>

                    <!-- XAMPP -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <img src="https://www.apachefriends.org/images/xampp-logo-ac950edf.svg" alt="XAMPP" class="w-8 h-8">
                        </div>
                        <span class="text-sm">XAMPP</span>
                    </div>
                    <!-- VS Code -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" alt="VS Code" class="w-8 h-8">
                        </div>
                        <span class="text-sm">VS Code</span>
                    </div>
                    <!-- PhpStorm -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <img src="https://resources.jetbrains.com/storage/products/phpstorm/img/meta/phpstorm_logo_300x300.png" alt="PhpStorm" class="w-8 h-8">
                        </div>
                        <span class="text-sm">PhpStorm</span>
                    </div>
                    <!-- GitHub -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-github text-3xl text-gray-700 dark:text-white"></i>
                        </div>
                        <span class="text-sm">GitHub</span>
                    </div>

                      <!-- git bash -->
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-git-alt text-3xl text-orange-600"></i>
                        </div>
                        <span class="text-sm">Git</span>
                    </div>


                    {{-- <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-js text-3xl text-yellow-400"></i>
                        </div>
                        <span class="text-sm">JavaScript</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-react text-3xl text-blue-400"></i>
                        </div>
                        <span class="text-sm">React</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-node-js text-3xl text-green-500"></i>
                        </div>
                        <span class="text-sm">Node.js</span>
                    </div>



                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fas fa-database text-3xl text-blue-600"></i>
                        </div>
                        <span class="text-sm">MongoDB</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-white dark:bg-gray-800 rounded-full shadow-md flex items-center justify-center mb-2">
                            <i class="fab fa-aws text-3xl text-orange-400"></i>
                        </div>
                        <span class="text-sm">AWS</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== End Skills Section ==================== -->
