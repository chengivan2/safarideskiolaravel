@extends('layouts.app')

@section('title', 'Sign Up - SafariDesk Ticketing System')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <div class="max-w-md w-full space-y-8">
        <div class="text-center">
            <img src="/images/safaridesk-logo-no-bg.png" alt="SafariDesk Logo" class="h-12 mx-auto mb-2">
            <h2 class="mt-2 text-3xl font-bold text-[#1b1b18] dark:text-white">Create an account</h2>
            <p class="mt-2 text-base text-[#706f6c] dark:text-[#a3a3a0]">Enter your information to get started with SafariDesk</p>
        </div>
        <div class="mt-8 bg-white dark:bg-[#1b1b18] py-8 px-6 shadow-xl rounded-lg border border-[#e3e3e0] dark:border-[#2e2e2b]">
            <form class="space-y-5" action="#" method="POST">
                <div>
                    <label for="name" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Full Name</label>
                    <div class="mt-1 relative">
                        <span class="absolute left-3 top-2.5 text-[#7ED957]">
                            <!-- User Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#7ED957" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <input id="name" name="name" type="text" required placeholder="John Doe" class="block w-full pl-10 pr-3 py-2 rounded-md dark:bg-[#0f0f0e] text-white border border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                    </div>
                </div>
                <div>
                    <label for="company" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Company Name</label>
                    <div class="mt-1 relative">
                        <span class="absolute left-3 top-2.5 text-[#7ED957]">
                            <!-- Building Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#7ED957" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21V7a2 2 0 012-2h14a2 2 0 012 2v14M9 21V9m6 12V9m-6 0V5a2 2 0 012-2h2a2 2 0 012 2v4" />
                            </svg>
                        </span>
                        <input id="company" name="company" type="text" required placeholder="SafariDesk Inc." class="block w-full pl-10 pr-3 py-2 rounded-md dark:bg-[#0f0f0e] text-white border border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                    </div>
                </div>
                <div>
                    <label for="subdomain" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Subdomain</label>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <div class="relative flex-grow">
                            <span class="absolute left-3 top-2.5 text-[#7ED957]">
                                <!-- Globe Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#7ED957" stroke-width="2">
                                    <circle cx="12" cy="12" r="9" stroke="#7ED957" stroke-width="2" fill="none" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.05 12h19.9M12 2.05c3.9 3.9 3.9 15.05 0 19.9M12 2.05c-3.9 3.9-3.9 15.05 0 19.9" />
                                </svg>
                            </span>
                            <input id="subdomain" name="subdomain" type="text" required placeholder="your-company" class="block w-full pl-10 pr-3 py-2 rounded-l-md dark:bg-[#0f0f0e] text-white border border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                        </div>
                        <span class="inline-flex items-center px-3 rounded-r-md border border-l-0 border-[#23272f] bg-[#23272f] text-[#a3a3a0] text-sm">.safaridesk.io</span>
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Work Email</label>
                    <div class="mt-1 relative">
                        <span class="absolute left-3 top-2.5 text-[#7ED957]">
                            <!-- Mail Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#7ED957" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a3 3 0 003.22 0L22 8m-19 8V8a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            </svg>
                        </span>
                        <input id="email" name="email" type="email" required placeholder="name@company.com" class="block w-full pl-10 pr-3 py-2 rounded-md dark:bg-[#0f0f0e] text-white border border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Password</label>
                    <div class="mt-1 relative">
                        <span class="absolute left-3 top-2.5 text-[#7ED957]">
                            <!-- Lock Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#7ED957" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm6-10V7a4 4 0 10-8 0v2" />
                            </svg>
                        </span>
                        <input id="password" name="password" type="password" required placeholder="••••••••" class="block w-full pl-10 pr-10 py-2 rounded-md dark:bg-[#0f0f0e] text-white border border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                        <button type="button" tabindex="-1" class="absolute right-3 top-2.5 text-[#a3a3a0] focus:outline-none" onclick="togglePasswordVisibility('password', this)">
                            <!-- Eye Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Confirm Password</label>
                    <div class="mt-1 relative">
                        <span class="absolute left-3 top-2.5 text-[#7ED957]">
                            <!-- Lock Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#7ED957" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm6-10V7a4 4 0 10-8 0v2" />
                            </svg>
                        </span>
                        <input id="password_confirmation" name="password_confirmation" type="password" required placeholder="••••••••" class="block w-full pl-10 pr-10 py-2 rounded-md dark:bg-[#0f0f0e] text-white border border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                        <button type="button" tabindex="-1" class="absolute right-3 top-2.5 text-[#a3a3a0] focus:outline-none" onclick="togglePasswordVisibility('password_confirmation', this)">
                            <!-- Eye Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center mt-2">
                    <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-[#7ED957] focus:ring-[#7ED957] border-[#23272f] rounded">
                    <label for="terms" class="ml-2 block text-sm text-[#706f6c] dark:text-[#a3a3a0]">
                        I agree to the <a href="/terms" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">Terms of Service</a> and <a href="/privacy" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">Privacy Policy</a>
                    </label>
                </div>
                <div class="flex items-center mt-6">
                    <span class="text-orange-400 font-handwritten text-lg mr-2" style="font-family: 'Caveat', cursive;">Your safari starts here &rarr;</span>
                    <button type="submit" class="ml-auto px-6 py-2 rounded-md font-medium bg-[#00e060] hover:bg-[#00b84a] text-white text-base shadow transition">
                        Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function togglePasswordVisibility(fieldId, btn) {
        const input = document.getElementById(fieldId);
        if (input.type === 'password') {
            input.type = 'text';
            btn.innerHTML = `<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.042-3.338m3.087-2.872A9.956 9.956 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.132 5.225M15 12a3 3 0 11-6 0 3 3 0 016 0z' /><path stroke-linecap='round' stroke-linejoin='round' d='M3 3l18 18' /></svg>`;
        } else {
            input.type = 'password';
            btn.innerHTML = `<svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z' /><path stroke-linecap='round' stroke-linejoin='round' d='M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z' /></svg>`;
        }
    }
</script>
@endsection