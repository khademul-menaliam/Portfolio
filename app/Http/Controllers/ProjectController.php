<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projects = [
        1 => [
            'id' => 1,
            'title' => 'E-Commerce Platform',
            'subtitle' => 'A modern, responsive e-commerce solution with seamless UX and robust functionality.',
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?...',
            'overview' => [
                "This e-commerce platform was designed to provide users with a seamless shopping experience.",
                "The platform features user authentication, product filtering, shopping cart, order tracking, and a responsive design."
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1563014959-7aaa83350992?...',
                'https://images.unsplash.com/photo-1556155092-490a1ba16284?...',
                'https://images.unsplash.com/photo-1607083206968-13611e3d76db?...',
                'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?...',
            ],
            'challenges' => [
                [
                    'title' => 'Performance Optimization',
                    'content' => 'Initial load time exceeded 5s. Implemented lazy loading, compression, code splitting → now < 2s.'
                ],
                [
                    'title' => 'Payment Integration',
                    'content' => 'Integrated multiple payment gateways with secure encryption using Stripe API.'
                ]
            ],
            'build_for' => 'Own',
            'timeline' => 'January 2025 - June 2025',
            'role' => 'Full-Stack Developer',
            'technologies' => ['React', 'Node.js', 'MongoDB', 'Express', 'TailwindCSS', 'Stripe API'],
            'live_demo' => '#',
            'code' => '#',
        ],

        4 => [
            'id' => 2,
            'title' => 'Portfolio Website',
            'subtitle' => 'A personal portfolio to showcase projects and skills.',
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?...',
            'overview' => [
                "Built a clean portfolio site with Laravel and Tailwind.",
                "Features dark mode, responsive design, and dynamic project pages."
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1563014959-7aaa83350992?...',
                'https://images.unsplash.com/photo-1556155092-490a1ba16284?...',
            ],
            'challenges' => [
                [
                    'title' => 'Dynamic Routing',
                    'content' => 'Solved project duplication by using Laravel controllers + Blade partials.'
                ],
                                [
                    'title' => 'Dynamic Routing',
                    'content' => 'Solved project duplication by using Laravel controllers + Blade partials.'
                ]
            ],
            'build_for' => 'Own',
            'timeline' => '2025',
            'role' => 'Frontend + Backend Developer',
            'technologies' => ['Laravel', 'Blade', 'TailwindCSS'],
            'live_demo' => '#',
            'code' => '#',
        ],
        3 => [
            'id' => 3,
            'title' => 'Task Management Web App',
            'subtitle' => 'A productivity app for creating, organizing, and tracking tasks efficiently.',
            'image' => 'https://images.unsplash.com/photo-1581090700227-4c4f50b3c87f?w=800&auto=format&fit=crop&q=60',
            'overview' => [
                "Developed a task management web application with Laravel and TailwindCSS.",
                "Implemented authentication, role-based access, and user-specific task boards.",
                "Features include task creation, deadlines, categories, and progress tracking.",
                "Added search and filter functionality for quick task management."
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1556155092-490a1ba16284?w=800&auto=format&fit=crop&q=60',
                'https://images.unsplash.com/photo-1556740749-887f6717d7e4?w=800&auto=format&fit=crop&q=60',
                'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&auto=format&fit=crop&q=60'
            ],
            'challenges' => [
                [
                    'title' => 'Task Status Updates',
                    'content' => 'Implemented dynamic status updates (To-Do, In Progress, Completed) using AJAX without page reload.'
                ],
                [
                    'title' => 'User Authentication & Roles',
                    'content' => 'Configured Laravel Breeze for authentication and added role-based permissions (admin, user).'
                ],
                [
                    'title' => 'Data Persistence',
                    'content' => 'Designed efficient database schema to handle tasks, categories, and user relationships.'
                ]
            ],
            'build_for' => 'Own / Learning Project',
            'timeline' => '2025',
            'role' => 'Full-Stack Developer',
            'technologies' => ['Laravel', 'Blade', 'TailwindCSS', 'MySQL', 'AJAX'],
            'live_demo' => 'https://your-taskapp-demo.com',
            'code' => 'https://github.com/yourusername/task-management-app',
        ],
        2 => [
            'id' => 4,
            'title' => 'Admin Dashboard',
            'subtitle' => 'A role-based dashboard for managing users, content, and analytics.',
            'image' => 'https://images.unsplash.com/photo-1605902711622-cfb43c4437d7?w=800&auto=format&fit=crop&q=60',
            'overview' => [
                "Developed a responsive admin dashboard with Laravel, TailwindCSS, and Blade templates.",
                "Implemented role-based access control using Spatie Permission package.",
                "Dashboard includes user management, content CRUD, and analytics charts.",
                "Added reusable components such as sidebar, navbar, and dynamic tables."
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1605902711622-cfb43c4437d7?w=800&auto=format&fit=crop&q=60',
                'https://images.unsplash.com/photo-1556155092-490a1ba16284?w=800&auto=format&fit=crop&q=60',
                'https://images.unsplash.com/photo-1603570417033-1f3d64fbb83f?w=800&auto=format&fit=crop&q=60'
            ],
            'challenges' => [
                [
                    'title' => 'Role-Based Access',
                    'content' => 'Configured user roles (Admin, Editor, Viewer) with permissions to control access to menu items and pages.'
                ],
                [
                    'title' => 'Dynamic Sidebar Navigation',
                    'content' => 'Sidebar items are dynamically generated based on user permissions using Spatie.'
                ],
                [
                    'title' => 'Data Visualization',
                    'content' => 'Integrated chart libraries to display real-time user activity and statistics.'
                ]
            ],
            'build_for' => 'Practice / Admin Panel Development',
            'timeline' => '2025',
            'role' => 'Full-Stack Developer',
            'technologies' => ['Laravel', 'Blade', 'TailwindCSS', 'Spatie Permission', 'Chart.js'],
            'live_demo' => 'https://your-dashboard-demo.com',
            'code' => 'https://github.com/yourusername/admin-dashboard',
        ],
        6 => [
            'id' => 5,
            'title' => 'Attendance Management System',
            'subtitle' => 'A web-based solution for tracking student and employee attendance.',
            'image' => 'https://images.unsplash.com/photo-1584697964198-9c049f27a1f0?w=800&auto=format&fit=crop&q=60',
            'overview' => [
                "Built a web-based attendance system using Laravel and TailwindCSS.",
                "Implemented authentication and role-based access for Admin, Teacher, and Student/Employee.",
                "Features include daily attendance marking, leave requests, and attendance reports.",
                "Integrated export functionality for attendance records (Excel/PDF)."
            ],
            'gallery' => [
                'https://images.unsplash.com/photo-1584697964198-9c049f27a1f0?w=800&auto=format&fit=crop&q=60',
                'https://images.unsplash.com/photo-1556740749-887f6717d7e4?w=800&auto=format&fit=crop&q=60',
                'https://images.unsplash.com/photo-1563986768609-322da13575f3?w=800&auto=format&fit=crop&q=60'
            ],
            'challenges' => [
                [
                    'title' => 'Role Management',
                    'content' => 'Configured multiple user roles (Admin, Teacher, Student/Employee) with different permissions.'
                ],
                [
                    'title' => 'Date-Based Tracking',
                    'content' => 'Ensured accurate daily attendance logging with unique constraints to avoid duplicate entries.'
                ],
                [
                    'title' => 'Reports & Export',
                    'content' => 'Generated detailed attendance reports and export options (Excel, PDF) for admins.'
                ]
            ],
            'build_for' => 'Practice / Academic Project',
            'timeline' => '2025',
            'role' => 'Full-Stack Developer',
            'technologies' => ['Laravel', 'Blade', 'TailwindCSS', 'MySQL', 'Laravel Excel'],
            'live_demo' => 'https://your-attendance-system-demo.com',
            'code' => 'https://github.com/yourusername/attendance-system',
        ]




    ];

    public function show($id)
    {
        $project = $this->projects[$id] ?? null;

        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('layouts.partials.view', compact('project'));
    }
}
