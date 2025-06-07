@extends('layouts.app')

@section('title', 'Contact Us - SafariDesk')

@section('content')
<div class="min-h-screen py-16 px-4 sm:px-6 lg:px-8 bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-[#1b1b18] dark:text-white mb-4">Contact SafariDesk</h1>
            <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0]">We're here to help! Reach out for support, sales, or general inquiries.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Form Card -->
            <div class="relative rounded-2xl shadow-xl border border-[#e3e3e0] dark:border-[#23272f] bg-white dark:bg-[#181c23] p-8 flex flex-col col-span-2">
                <div class="absolute inset-0 opacity-20 bg-grid-pattern pointer-events-none rounded-2xl"></div>
                <h2 class="text-2xl font-bold mb-4 text-[#1b1b18] dark:text-white z-10 relative">Send us a message</h2>
                <form class="space-y-5 z-10 relative" action="#" method="POST">
                    <div>
                        <label for="name" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Full Name</label>
                        <input id="name" name="name" type="text" required placeholder="Your Name" class="mt-1 block w-full px-4 py-2 rounded-md bg-[#f9f9f8] dark:bg-[#0f0f0e] text-[#1b1b18] dark:text-white border border-[#e3e3e0] dark:border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Email</label>
                        <input id="email" name="email" type="email" required placeholder="you@example.com" class="mt-1 block w-full px-4 py-2 rounded-md bg-[#f9f9f8] dark:bg-[#0f0f0e] text-[#1b1b18] dark:text-white border border-[#e3e3e0] dark:border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-[#1b1b18] dark:text-white">Message</label>
                        <textarea id="message" name="message" rows="4" required placeholder="How can we help you?" class="mt-1 block w-full px-4 py-2 rounded-md bg-[#f9f9f8] dark:bg-[#0f0f0e] text-[#1b1b18] dark:text-white border border-[#e3e3e0] dark:border-[#23272f] placeholder-[#a3a3a0] focus:ring-[#7ED957] focus:border-[#7ED957]"></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2 rounded-md font-medium bg-[#7ED957] hover:bg-[#5bbf3a] text-white shadow transition">Send Message</button>
                    </div>
                </form>
            </div>
            <!-- Info Card -->
            <div class="relative rounded-2xl shadow-xl border border-[#e3e3e0] dark:border-[#23272f] bg-white dark:bg-[#181c23] p-8 flex flex-col justify-between">
                <div class="absolute inset-0 opacity-20 bg-grid-pattern pointer-events-none rounded-2xl"></div>
                <div class="z-10 relative">
                    <h2 class="text-xl font-bold mb-3 text-[#1b1b18] dark:text-white">Contact Info</h2>
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <!-- Office/Building Icon -->
                            <svg class="w-5 h-5 text-[#7ED957] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21V7a2 2 0 012-2h14a2 2 0 012 2v14M9 21V9m6 12V9m-6 0V5a2 2 0 012-2h2a2 2 0 012 2v4" />
                            </svg>
                            <span class="text-[#1b1b18] dark:text-white">SafariDesk Inc.</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <!-- Mail Icon -->
                            <svg class="w-5 h-5 text-[#7ED957] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a3 3 0 003.22 0L22 8m-19 8V8a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                            </svg>
                            <span class="text-[#1b1b18] dark:text-white">support@safaridesk.io</span>
                        </div>
                        <div class="flex items-center">
                            <!-- Phone Icon -->
                            <svg class="w-5 h-5 text-[#7ED957] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V5zm0 14a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5a2 2 0 00-2 2v2zm14-14a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5a2 2 0 012-2h2zm0 14a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2h-2a2 2 0 00-2 2v2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 2v6a2 2 0 002 2h6" />
                            </svg>
                            <span class="text-[#1b1b18] dark:text-white">+1 (555) 123-4567</span>
                        </div>
                    </div>
                    <h2 class="text-xl font-bold mb-3 text-[#1b1b18] dark:text-white mt-6">Support</h2>
                    <ul class="space-y-2">
                        <li><a href="/features" class="text-[#7ED957] hover:text-[#5bbf3a] font-medium">Features</a></li>
                        <li><a href="/pricing" class="text-[#7ED957] hover:text-[#5bbf3a] font-medium">Pricing</a></li>
                        <li><a href="/privacy" class="text-[#7ED957] hover:text-[#5bbf3a] font-medium">Privacy Policy</a></li>
                        <li><a href="/about" class="text-[#7ED957] hover:text-[#5bbf3a] font-medium">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
