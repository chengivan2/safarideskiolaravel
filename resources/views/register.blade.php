@extends('layouts.app')

@section('title', 'Sign Up - SafariDesk Ticketing System')

@section('content')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-[#FDFDFC] dark:bg-[#0a0a0a]">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <a href="/" class="inline-block">
                    <img src="/images/safaridesk-logo-no-bg.png" alt="SafariDesk Logo" class="h-12 mx-auto">
                </a>
                <h2 class="mt-6 text-3xl font-bold text-[#1b1b18] dark:text-white">Create your account</h2>
                <p class="mt-2 text-sm text-[#706f6c] dark:text-[#a3a3a0]">
                    Already have an account? <a href="/login" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">Sign in</a>
                </p>
            </div>
            
            <div class="mt-8 bg-white dark:bg-[#1b1b18] py-8 px-4 shadow-xl sm:rounded-lg sm:px-10 border border-[#e3e3e0] dark:border-[#2e2e2b]">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="name" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Full name</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" autocomplete="name" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="John Doe">
                        </div>
                    </div>
                    
                    <div>
                        <label for="company" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Company name</label>
                        <div class="mt-1">
                            <input id="company" name="company" type="text" autocomplete="organization" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="Your Company, Inc.">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="you@example.com">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="••••••••">
                        </div>
                    </div>
                    
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Confirm password</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="••••••••">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 text-[#7ED957] focus:ring-[#7ED957] border-[#e3e3e0] dark:border-[#2e2e2b] rounded">
                        <label for="terms" class="ml-2 block text-sm text-[#706f6c] dark:text-[#a3a3a0]">
                            I agree to the <a href="#" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">Terms of Service</a> and <a href="#" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">Privacy Policy</a>
                        </label>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-[#1b1b18] bg-[#7ED957] hover:bg-[#5bbf3a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7ED957] transition">
                            Create account
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-[#e3e3e0] dark:border-[#2e2e2b]"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-[#1b1b18] text-[#706f6c] dark:text-[#a3a3a0]">Or sign up with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm bg-white dark:bg-[#1b1b18] text-sm font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:bg-gray-50 dark:hover:bg-[#2e2e2b] transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm bg-white dark:bg-[#1b1b18] text-sm font-medium text-[#706f6c] dark:text-[#a3a3a0] hover:bg-gray-50 dark:hover:bg-[#2e2e2b] transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
