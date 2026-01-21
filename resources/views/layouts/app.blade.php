<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel Portfolio') - Full Stack Developer</title>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" type="image/x-icon">
    <!-- Replace the CSS link with CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">
    <!-- Toast Notification -->
    <div id="toast" class="fixed top-24 right-4 z-50 transform translate-x-full transition-transform duration-300 hidden">
        <div class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg max-w-sm">
            <div class="flex items-center gap-3">
                <i class="fas fa-check-circle"></i>
                <span id="toastMessage"></span>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-md shadow-sm z-40">
        <div class="container mx-auto px-4">
            <nav class="flex items-center justify-between py-4">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 text-2xl font-bold text-blue-600">
                    <i class="fas fa-code"></i>
                    <span>Portfolio</span>
                    <span class="px-3 py-1 bg-gradient-to-r from-red-500 to-orange-500 text-white text-sm rounded-full font-semibold">Laravel</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">About</a>
                    <a href="#skills" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Skills</a>
                    <a href="#projects" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Projects</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Contact</a>
                    <a href="https://github.com" target="_blank" 
                       class="px-6 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors font-medium">
                        <i class="fab fa-github mr-2"></i>GitHub
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" class="md:hidden text-gray-700 hover:text-blue-600 text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>

            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="md:hidden mt-4 hidden">
                <div class="flex flex-col gap-4 py-4 border-t border-gray-200">
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">About</a>
                    <a href="#skills" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Skills</a>
                    <a href="#projects" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Projects</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium transition-colors py-2">Contact</a>
                    <a href="https://github.com" target="_blank" 
                       class="px-6 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors font-medium text-center">
                        <i class="fab fa-github mr-2"></i>GitHub
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center gap-3 mb-4">
                        <i class="fas fa-code text-2xl text-blue-400"></i>
                        <span class="text-2xl font-bold">Laravel Portfolio</span>
                    </div>
                    <p class="text-gray-400">Full-Stack Laravel Developer</p>
                </div>
                
                <div class="flex flex-col items-center md:items-end">
                    <div class="flex gap-6 mb-6">
                        <a href="https://github.com" target="_blank" class="text-gray-400 hover:text-white text-2xl transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="text-gray-400 hover:text-white text-2xl transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-gray-400 hover:text-white text-2xl transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="mailto:contact@example.com" class="text-gray-400 hover:text-white text-2xl transition-colors">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                    <p class="text-gray-400 text-sm">&copy; <span id="currentYear"></span> Laravel Portfolio. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>