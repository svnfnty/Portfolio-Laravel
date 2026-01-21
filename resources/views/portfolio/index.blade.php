@extends('layouts.app')

@section('title', 'Laravel Portfolio - Full Stack Developer')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-purple-50 py-24">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="container mx-auto px-4 relative">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Hero Content -->
                <div class="lg:w-1/2">
                    <div class="inline-flex items-center gap-3 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-full mb-6 shadow-sm">
                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                        <span class="text-sm font-medium text-gray-700">Available for projects</span>
                    </div>
                    
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Laravel
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                            Developer
                        </span>
                    </h1>
                    
                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                        I build scalable, high-performance web applications using Laravel, Vue.js, and modern technologies. 
                        Specializing in clean architecture, API development, and seamless user experiences.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 mb-10">
                        <a href="#contact" 
                           class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 font-semibold text-lg flex items-center gap-3">
                            <i class="fas fa-paper-plane"></i>
                            Contact Me
                        </a>
                        <a href="#projects" 
                           class="px-8 py-4 bg-white text-blue-600 border-2 border-blue-200 rounded-xl hover:bg-blue-50 transition-all duration-300 font-semibold text-lg flex items-center gap-3">
                            <i class="fas fa-code"></i>
                            View Projects
                        </a>
                    </div>
                    
                    <!-- Tech Stack Badges -->
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-red-500/10 text-red-700 rounded-lg font-medium flex items-center gap-2">
                            <i class="fab fa-laravel"></i>
                            Laravel
                        </span>
                        <span class="px-4 py-2 bg-blue-500/10 text-blue-700 rounded-lg font-medium flex items-center gap-2">
                            <i class="fab fa-php"></i>
                            PHP 8.2+
                        </span>
                        <span class="px-4 py-2 bg-yellow-500/10 text-yellow-700 rounded-lg font-medium flex items-center gap-2">
                            <i class="fab fa-js"></i>
                            JavaScript
                        </span>
                        <span class="px-4 py-2 bg-green-500/10 text-green-700 rounded-lg font-medium flex items-center gap-2">
                            <i class="fas fa-database"></i>
                            MySQL
                        </span>
                        <span class="px-4 py-2 bg-purple-500/10 text-purple-700 rounded-lg font-medium flex items-center gap-2">
                            <i class="fab fa-vuejs"></i>
                            Vue.js
                        </span>
                    </div>
                </div>
                
                <!-- Hero Code Snippet -->
                <div class="lg:w-1/2">
                    <div class="bg-gray-900 rounded-2xl p-6 shadow-2xl">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="flex gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <span class="text-gray-400 text-sm font-mono">laravel/app/Http/Controllers/ProjectController.php</span>
                        </div>
                        
                        <pre class="text-sm font-mono text-gray-300 overflow-x-auto">
<code><span class="text-blue-400">namespace</span> App\Http\Controllers;

<span class="text-blue-400">use</span> App\Models\Project;
<span class="text-blue-400">use</span> Illuminate\Http\Request;

<span class="text-blue-400">class</span> <span class="text-yellow-400">ProjectController</span> <span class="text-blue-400">extends</span> Controller
{
    <span class="text-blue-400">public</span> <span class="text-blue-400">function</span> <span class="text-yellow-400">index</span>()
    {
        <span class="text-blue-400">return</span> <span class="text-emerald-400">Project</span>::with(<span class="text-orange-400">'technologies'</span>)
            ->where(<span class="text-orange-400">'featured'</span>, <span class="text-blue-400">true</span>)
            ->orderBy(<span class="text-orange-400">'created_at'</span>, <span class="text-orange-400">'desc'</span>)
            ->paginate(<span class="text-purple-400">10</span>);
    }

    <span class="text-blue-400">public</span> <span class="text-blue-400">function</span> <span class="text-yellow-400">store</span>(Request <span class="text-gray-400">$request</span>)
    {
        <span class="text-gray-500">// API-driven development with Laravel Sanctum</span>
        <span class="text-blue-400">$validated</span> = <span class="text-gray-400">$request</span>->validate([
            <span class="text-orange-400">'title'</span> => <span class="text-orange-400">'required|string|max:255'</span>,
            <span class="text-orange-400">'description'</span> => <span class="text-orange-400">'required|string'</span>,
            <span class="text-orange-400">'technologies'</span> => <span class="text-orange-400">'required|array'</span>
        ]);

        <span class="text-blue-400">$project</span> = Project::create(<span class="text-blue-400">$validated</span>);

        <span class="text-blue-400">return</span> response()->json([
            <span class="text-orange-400">'success'</span> => <span class="text-blue-400">true</span>,
            <span class="text-orange-400">'data'</span> => <span class="text-blue-400">$project</span>
        ], <span class="text-purple-400">201</span>);
    }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold text-sm mb-4">
                        ABOUT ME
                    </span>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Crafting Digital Solutions with Laravel</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        I specialize in building robust, scalable applications using the Laravel ecosystem. 
                        With a focus on clean code, performance optimization, and user-centered design.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-1 mb-8">
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div class="aspect-video rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                                         alt="Developer Workspace" 
                                         class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-6">Expertise in Modern Web Development</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Secure & Scalable Architecture</h4>
                                    <p class="text-gray-600">
                                        Implementing Laravel's security features, including authentication, 
                                        authorization, and protection against common vulnerabilities.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-bolt text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Performance Optimization</h4>
                                    <p class="text-gray-600">
                                        Leveraging Laravel's caching, queue system, and database optimization 
                                        techniques for high-performance applications.
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-code-branch text-purple-600 text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">RESTful API Development</h4>
                                    <p class="text-gray-600">
                                        Building clean, documented APIs using Laravel Sanctum/Passport with 
                                        proper versioning and authentication.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-10 pt-8 border-t border-gray-200">
                            <a href="#contact" class="inline-flex items-center gap-3 text-blue-600 hover:text-blue-700 font-semibold text-lg">
                                Let's Build Something Amazing
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold text-sm mb-4">
                    TECH STACK
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Laravel & Modern Web Technologies</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive expertise across the Laravel ecosystem and complementary technologies
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Laravel Expertise -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fab fa-laravel text-red-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Laravel Framework</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Eloquent ORM & Migrations</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Blade Templates</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Queue & Job Scheduling</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Laravel Sanctum/Passport</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Testing (PHPUnit)</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Backend Development -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-server text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Backend Development</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>RESTful API Design</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>MySQL / PostgreSQL</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Redis Caching</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Docker & CI/CD</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>AWS / DigitalOcean</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Frontend Development -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-code text-yellow-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Frontend Development</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Vue.js / React</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Tailwind CSS</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>JavaScript ES6+</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Webpack / Vite</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Responsive Design</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Tools & DevOps -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-tools text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Tools & DevOps</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Git & GitHub Actions</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Docker & Docker Compose</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Nginx Configuration</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Composer & npm</span>
                        </li>
                        <li class="flex items-center gap-3 text-gray-700">
                            <i class="fas fa-check text-green-500"></i>
                            <span>Testing & Deployment</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold text-sm mb-4">
                    FEATURED PROJECTS
                </span>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Laravel-Powered Applications</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Real-world projects showcasing Laravel's capabilities in different domains
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="{{ $project->image_url }}" 
                             alt="{{ $project->title }}" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-red-500 text-white text-xs font-semibold rounded-full">
                                Laravel
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $project->title }}</h3>
                        <p class="text-gray-600 mb-6">{{ $project->description }}</p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            @if(is_array($project->technologies))
                                @foreach($project->technologies as $tech)
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            @endif
                        </div>
                        
                        <div class="flex gap-4">
                            @if($project->live_url)
                            <a href="{{ $project->live_url }}" 
                               target="_blank"
                               class="flex-1 px-4 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-center font-semibold flex items-center justify-center gap-2">
                                <i class="fas fa-external-link-alt"></i>
                                Live Demo
                            </a>
                            @endif
                            
                            @if($project->github_url)
                            <a href="{{ $project->github_url }}" 
                               target="_blank"
                               class="flex-1 px-4 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors text-center font-semibold flex items-center justify-center gap-2">
                                <i class="fab fa-github"></i>
                                Code
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-gray-900 to-blue-900">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <span class="inline-block px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full font-semibold text-sm mb-4">
                        GET IN TOUCH
                    </span>
                    <h2 class="text-4xl font-bold text-white mb-6">Let's Build Your Next Project</h2>
                    <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                        Have an idea? Let's discuss how we can turn it into a successful Laravel application
                    </p>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white rounded-2xl p-8 shadow-2xl">
                        <h3 class="text-2xl font-bold text-gray-900 mb-8">Send a Message</h3>
                        
                        <form id="contactForm" class="space-y-6">
                            @csrf
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                        Your Name *
                                    </label>
                                    <input type="text" 
                                           id="name" 
                                           name="name"
                                           required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                        Email Address *
                                    </label>
                                    <input type="email" 
                                           id="email" 
                                           name="email"
                                           required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                                    Subject *
                                </label>
                                <input type="text" 
                                       id="subject" 
                                       name="subject"
                                       required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                                    Your Message *
                                </label>
                                <textarea id="message" 
                                          name="message"
                                          rows="5"
                                          required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"></textarea>
                            </div>
                            
                            <button type="submit" 
                                    class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300 font-semibold text-lg flex items-center justify-center gap-3">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                        </form>
                    </div>
                    
                    <!-- Contact Info & Social -->
                    <div class="space-y-8">
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-white mb-6">Contact Information</h3>
                            
                            <div class="space-y-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-envelope text-blue-300 text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-300 text-sm">Email</p>
                                        <p class="text-white font-semibold">contact@laravelportfolio.dev</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-globe text-green-300 text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-300 text-sm">Website</p>
                                        <p class="text-white font-semibold">laravelportfolio.dev</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-map-marker-alt text-purple-300 text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-300 text-sm">Location</p>
                                        <p class="text-white font-semibold">Remote / Worldwide</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-white mb-6">Connect With Me</h3>
                            
                            <div class="flex gap-4">
                                <a href="https://github.com" 
                                   target="_blank"
                                   class="flex-1 px-6 py-4 bg-gray-800 hover:bg-gray-700 text-white rounded-xl transition-colors font-semibold flex items-center justify-center gap-3">
                                    <i class="fab fa-github"></i>
                                    GitHub
                                </a>
                                
                                <a href="https://linkedin.com" 
                                   target="_blank"
                                   class="flex-1 px-6 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl transition-colors font-semibold flex items-center justify-center gap-3">
                                    <i class="fab fa-linkedin"></i>
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                        
                        <!-- Availability Status -->
                        <div class="bg-gradient-to-r from-green-500/20 to-emerald-500/20 backdrop-blur-sm rounded-2xl p-8 border border-green-500/30">
                            <div class="flex items-center gap-4 mb-4">
                                <div class="w-4 h-4 bg-green-400 rounded-full animate-pulse"></div>
                                <span class="text-green-300 font-semibold">Currently Available</span>
                            </div>
                            <p class="text-gray-300">
                                I'm currently accepting new projects and would love to hear about your ideas.
                                Response time: Within 24 hours
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    .bg-grid-pattern {
        background-image: 
            linear-gradient(to right, #3b82f620 1px, transparent 1px),
            linear-gradient(to bottom, #3b82f620 1px, transparent 1px);
        background-size: 40px 40px;
    }
    
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-card:hover {
        transform: translateY(-8px);
    }
</style>
@endpush

@push('scripts')
<script>
class PortfolioApp {
    constructor() {
        this.csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        this.init();
    }
    
    init() {
        this.initMobileMenu();
        this.initSmoothScroll();
        this.initContactForm();
        this.initCurrentYear();
    }
    
    initMobileMenu() {
        const menuButton = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (menuButton && mobileMenu) {
            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                const icon = menuButton.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!menuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    menuButton.querySelector('i').classList.add('fa-bars');
                    menuButton.querySelector('i').classList.remove('fa-times');
                }
            });
        }
    }
    
    initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    initContactForm() {
        const form = document.getElementById('contactForm');
        if (!form) return;
        
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitButton.disabled = true;
            
            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': this.csrfToken,
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(Object.fromEntries(formData))
                });
                
                const data = await response.json();
                
                if (data.success) {
                    this.showToast(data.message);
                    form.reset();
                } else {
                    throw new Error(data.message || 'Something went wrong');
                }
            } catch (error) {
                this.showToast(error.message, 'error');
            } finally {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }
    
    initCurrentYear() {
        const yearElement = document.getElementById('currentYear');
        if (yearElement) {
            yearElement.textContent = new Date().getFullYear();
        }
    }
    
    showToast(message, type = 'success') {
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');
        
        if (!toast || !toastMessage) return;
        
        toastMessage.textContent = message;
        
        // Set color based on type
        const toastContent = toast.querySelector('div');
        if (type === 'error') {
            toastContent.className = 'bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg max-w-sm';
            toastContent.querySelector('i').className = 'fas fa-exclamation-circle';
        } else {
            toastContent.className = 'bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg max-w-sm';
            toastContent.querySelector('i').className = 'fas fa-check-circle';
        }
        
        // Show toast
        toast.classList.remove('hidden');
        toast.classList.remove('translate-x-full');
        
        // Hide after 5 seconds
        setTimeout(() => {
            toast.classList.add('translate-x-full');
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 300);
        }, 5000);
    }
}

// Initialize app
document.addEventListener('DOMContentLoaded', () => {
    new PortfolioApp();
});
</script>
@endpush