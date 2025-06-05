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
        </div>
    </div>
</div>
@endsection