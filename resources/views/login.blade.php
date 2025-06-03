@extends('layouts.app')

@section('title', 'Sign In - SafariDesk Ticketing System')

@section('content')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-[#FDFDFC] dark:bg-[#0a0a0a]">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <a href="/" class="inline-block">
                    <img src="/images/safaridesk-logo-no-bg.png" alt="SafariDesk Logo" class="h-12 mx-auto">
                </a>
                <h2 class="mt-6 text-3xl font-bold text-[#1b1b18] dark:text-white">Sign in to your account</h2>
                <p class="mt-2 text-sm text-[#706f6c] dark:text-[#a3a3a0]">
                    Or <a href="/register" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">create a new account</a>
                </p>
            </div>
            
            <div class="mt-8 bg-white dark:bg-[#1b1b18] py-8 px-4 shadow-xl sm:rounded-lg sm:px-10 border border-[#e3e3e0] dark:border-[#2e2e2b]">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="you@example.com">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#2e2e2b] rounded-md shadow-sm placeholder-[#a3a3a0] focus:outline-none focus:ring-[#7ED957] focus:border-[#7ED957] dark:bg-[#0f0f0e] dark:text-white sm:text-sm" placeholder="••••••••">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-[#7ED957] focus:ring-[#7ED957] border-[#e3e3e0] dark:border-[#2e2e2b] rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-[#706f6c] dark:text-[#a3a3a0]">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-[#7ED957] hover:text-[#5bbf3a]">Forgot your password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-[#1b1b18] bg-[#7ED957] hover:bg-[#5bbf3a] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#7ED957] transition">
                            Sign in
                        </button>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-[#e3e3e0] dark:border-[#2e2e2b]"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white dark:bg-[#1b1b18] text-[#706f6c] dark:text-[#a3a3a0]">Or continue with</span>
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
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
