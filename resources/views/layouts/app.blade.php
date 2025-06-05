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
                            class="flex items-center text-3xl font-bold bg-gradient-to-br from-green-500 via-lime-400 to-orange-400 bg-clip-text text-transparent select-none">
                            SafariDesk
                        </span>
                    </a>
                </div>

                <div class="flex items-center">
                    <nav class="hidden md:ml-8 md:flex md:space-x-8">
                        <a href="/" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Home</a>
                        <a href="/features" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Features</a>
                        <a href="/pricing" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">Pricing</a>
                        <a href="/about" class="inline-flex items-center px-1 pt-1 text-sm font-medium border-b-2 border-transparent hover:border-[#7ED957] text-[#706f6c] dark:text-[#a3a3a0] hover:text-[#1b1b18] dark:hover:text-white transition">About</a>
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
                        <a href="/register" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-[#1b1b18] bg-[#7ED957] hover:bg-[#5bbf3a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7ED957] transition">Get Started</a>
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
                            class="flex items-center text-3xl font-bold bg-gradient-to-br from-green-500 via-lime-400 to-orange-400 bg-clip-text text-transparent select-none">
                            SafariDesk
                        </span>
                    </a>
                    <p class="mt-4 text-sm text-[#a3a3a0]">
                        Streamline your customer support with our powerful ticketing system.
                    </p>
                    <div class="mt-6 flex space-x-6">
                        <a href="https://x.com/ticketing_sd?s=21&t=uSyZfTP9_xXnl9jl27mQLQ " class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">X</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href=" https://www.instagram.com/safaridesk.io?igsh=NjBpZ2RreWZhNWJ2&utm_source=qr " class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/safaridesk-ticketing/" class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/share/1ANmc3hGDM/?mibextid=wwXIfr" class="text-[#a3a3a0] hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.35C0 23.407.593 24 1.325 24h11.494V14.706h-3.12v-3.62h3.12V9.412c0-3.09 1.892-4.788 4.655-4.788 1.325 0 2.465.098 2.8.142v3.25l-1.925-.001c-1.51 0-1.8.718-1.8 1.77v2.32h3.6l-.47 3.62h-3.13V24h6.135c.73 0 1.323-.593 1.323-1.325V1.325C24 .593 23.407 0 22.675 0z" />
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
                            <a href="/compliance" class="text-sm text-[#a3a3a0] hover:text-white">Compliance & Security</a>
                        </li>
                    </ul>
                </div>

                <div class="col-span-1">
                    <h3 class="text-sm font-semibold text-white tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="/about" class="text-sm text-[#a3a3a0] hover:text-white">About</a>
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
                            <a href="/privacy" class="text-sm text-[#a3a3a0] hover:text-white">Privacy</a>
                        </li>
                        <li>
                            <a href="/terms" class="text-sm text-[#a3a3a0] hover:text-white">Terms</a>
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