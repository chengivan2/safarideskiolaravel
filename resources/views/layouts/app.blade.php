<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SafariDesk - Ticketing System')</title>
    
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body class="antialiased bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-white min-h-screen flex flex-col">
    <!-- Header -->
    <header class="sticky top-0 z-50 w-full backdrop-blur-md bg-white/80 dark:bg-[#0a0a0a]/80 border-b border-[#e3e3e0] dark:border-[#2e2e2b]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex flex-row gap-md items-center">
                        <img class="h-14 w-auto" src="/images/safaridesk-logo-no-bg.png" alt="SafariDesk Logo">
                        <span
                            class="flex items-center text-3xl font-bold bg-gradient-to-br from-green-500 via-lime-400 to-orange-400 bg-clip-text text-transparent select-none"
                        >
                            SafariDesk
                        </span>
                    </a>
                    <nav class="hidden md:ml-8 md:flex md:space-x-8">
                        <a href="/" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Home</a>
                        <a href="/features" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Features</a>
                        <a href="/pricing" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Pricing</a>
                    </nav>
                </div>
                <div class="flex items-center">
                    <button id="darkModeToggle" class="dark-mode-toggle p-2 rounded-full text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white focus:outline-none mr-2">
                        <svg class="sun-icon hidden w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <svg class="moon-icon w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </button>
                    <div class="hidden md:flex md:items-center md:space-x-4">
                        <a href="/login" class="text-sm font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Sign in</a>
                        <a href="/register" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-[#1b1b18] bg-[#7ED957] hover:bg-[#5bbf3a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7ED957] transition">Sign up</a>
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="flex items-center md:hidden">
                        <button type="button" id="mobileMenuButton" class="inline-flex items-center justify-center p-2 rounded-md text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state -->
        <div class="hidden md:hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1 border-t border-[#e3e3e0] dark:border-[#2e2e2b]">
                <a href="/" class="block pl-3 pr-4 py-2 text-base font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1b1b18] transition">Home</a>
                <a href="/features" class="block pl-3 pr-4 py-2 text-base font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1b1b18] transition">Features</a>
                <a href="/pricing" class="block pl-3 pr-4 py-2 text-base font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1b1b18] transition">Pricing</a>
                <a href="/login" class="block pl-3 pr-4 py-2 text-base font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white hover:bg-gray-50 dark:hover:bg-[#1b1b18] transition">Sign in</a>
                <a href="/register" class="block pl-3 pr-4 py-2 text-base font-medium text-[#7ED957] hover:text-[#5bbf3a] transition">Sign up</a>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-[#1b1b18] text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-1">
<a href="/" class="flex flex-row gap-md items-center">
                        <img class="h-14 w-auto" src="/images/safaridesk-logo-no-bg.png" alt="SafariDesk Logo">
                        <span
                            class="flex items-center text-3xl font-bold bg-gradient-to-br from-green-500 via-lime-400 to-orange-400 bg-clip-text text-transparent select-none"
                        >
                            SafariDesk
                        </span>
                    </a>                    <p class="mt-4 text-sm text-[#a3a3a0]">
                        Streamline your customer support with our powerful ticketing system.
                    </p>
                    <div class="mt-6 flex space-x-6">
                        <a href="#" class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Product</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="/features" class="text-sm text-[#a3a3a0] hover:text-white">Features</a>
                        </li>
                        <li>
                            <a href="/pricing" class="text-sm text-[#a3a3a0] hover:text-white">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Security</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Integrations</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">About</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Contact</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Legal</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Privacy</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Terms</a>
                        </li>
                        <li>
                            <a href="#" class="text-sm text-[#a3a3a0] hover:text-white">Cookie Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-12 border-t border-[#2e2e2b] pt-8">
                <p class="text-sm text-[#a3a3a0]">
                    &copy; 2025 SafariDesk, Inc. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    
    <!-- Dark Mode Script -->
    <script src="/js/darkMode.js"></script>
    
    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobile-menu');
            const openIcon = mobileMenuButton.querySelector('svg:first-child');
            const closeIcon = mobileMenuButton.querySelector('svg:last-child');
            
            mobileMenuButton.addEventListener('click', function() {
                const isOpen = mobileMenu.classList.toggle('hidden');
                
                if (isOpen) {
                    openIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                } else {
                    openIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                }
            });
        });
    </script>
    
    <!-- Page-specific scripts -->
    @yield('scripts')
</body>
</html>
