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
        </div>
    </div>
</div>
@endsection