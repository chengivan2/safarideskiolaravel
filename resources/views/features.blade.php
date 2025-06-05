@extends('layouts.app')

@section('title', 'Features - SafariDesk Ticketing System')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#f9f9f8] to-[#f0f9f0] dark:from-[#0a0a0a] dark:to-[#071207] -z-10"></div>
        <div class="absolute inset-0 opacity-10 bg-grid-pattern -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6 py-24 md:py-32">
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] text-[#2E7D32] dark:text-[#7ED957] text-sm font-medium mb-6">
                    <span class="mr-2">🚀</span> Powerful features
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-[#1b1b18] dark:text-white">
                    Everything you need for <span class="text-[#7ED957]">exceptional support</span>
                </h1>
                <p class="text-lg md:text-xl text-[#706f6c] dark:text-[#a3a3a0] mb-8">
                    SafariDesk combines powerful features with an intuitive interface to help your team deliver outstanding customer service.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Why SafariDesk Section -->
    <section class="py-20 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-6 text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-[#1b1b18] dark:text-white">Why SafariDesk?</h2>
            <p class="text-lg md:text-xl text-[#706f6c] dark:text-[#a3a3a0] mb-4">SafariDesk is the all-in-one support solution your team needs—ticketing, built-in chat, asset management, internal tasking, and more—at just <span class="font-semibold text-[#7ED957]">$5 per agent/month</span> (or <span class="font-semibold text-[#FFA726]">$60 per agent/year</span>).</p>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
            <!-- All-in-One Ticketing -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="3" stroke="currentColor"/><path d="M7 7V5a5 5 0 0 1 10 0v2" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">All-in-One Ticketing</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Convert emails into tickets, track SLAs, and generate reports from one intuitive dashboard.</p>
            </div>
            <!-- Built-In Chat -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="6" width="20" height="14" rx="4" stroke="currentColor"/><path d="M8 10h8M8 14h4" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Built-In Chat</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Collaborate in real time with channels, direct messages, file sharing, and screenshare—no extra apps needed.</p>
            </div>
            <!-- Asset Management -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="3" stroke="currentColor"/><path d="M8 8h8v8H8z" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Asset Management</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Keep tabs on hardware and software assets, link them to tickets, and view asset history at a glance.</p>
            </div>
            <!-- Internal Tasking -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="3" stroke="currentColor"/><path d="M7 9h10M7 13h6" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Internal Tasking</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Assign, prioritize, and track tasks internally—set due dates and monitor progress without leaving SafariDesk.</p>
            </div>
            <!-- Smart Automations -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor"/><path d="M12 8v4l3 3" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Smart Automations</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Automate ticket routing, status updates, and alerts so nothing slips through the cracks.</p>
            </div>
            <!-- Scalable & User-Friendly -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 17v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2" stroke="currentColor"/><circle cx="12" cy="7" r="4" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Scalable & User-Friendly</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Whether you’re a 5-person startup or a 500-agent team, SafariDesk scales seamlessly with no added complexity.</p>
            </div>
            <!-- Secure & Affordable -->
            <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
                <div class="mb-4">
                    <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="11" width="16" height="9" rx="2" stroke="currentColor"/><path d="M8 11V7a4 4 0 0 1 8 0v4" stroke="currentColor"/></svg>
                </div>
                <h3 class="font-bold text-lg mb-2">Secure & Affordable</h3>
                <p class="text-[#706f6c] dark:text-[#a3a3a0]">Enterprise-grade encryption, SSO support, and transparent pricing—no hidden fees ever.</p>
            </div>
        </div>
        <div class="max-w-3xl mx-auto text-center mt-12">
            <p class="text-lg md:text-xl text-[#1b1b18] dark:text-white font-semibold">Try SafariDesk today and see how simple—and affordable—support can be.</p>
        </div>
    </section>

    <!-- Expounded Features Section -->
    <section class="py-20 bg-[#f9f9f8] dark:bg-[#0f0f0e]">
        <div class="max-w-6xl mx-auto px-6 space-y-16">
            <!-- All-in-One Ticketing -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-2 text-[#1b1b18] dark:text-white flex items-center gap-2">
                        <svg class="w-8 h-8 text-[#7ED957] inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="3" stroke="currentColor"/><path d="M7 7V5a5 5 0 0 1 10 0v2" stroke="currentColor"/></svg>
                        All-in-One Ticketing
                    </h3>
                    <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0] mb-2">Convert emails into tickets, track SLAs, and generate reports from one intuitive dashboard. Collect customer inquiries from multiple channels—email, web forms, chat, and social media—in one unified inbox. Automatically prioritize tickets based on urgency, customer tier, and other customizable factors. Access complete customer interaction history for context-aware support and personalized service.</p>
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg bg-white dark:bg-[#181818] border border-[#e3e3e0] dark:border-[#2e2e2b] aspect-w-16 aspect-h-10">
                    <img src="/images/safaridesk-ticketing-workspace.jpg" alt="SafariDesk Ticketing Workspace" class="object-cover w-full h-full">
                </div>
            </div>
            <!-- Built-In Chat (alternate) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="order-2 md:order-2">
                    <h3 class="text-2xl font-bold mb-2 text-[#1b1b18] dark:text-white flex items-center gap-2">
                        <svg class="w-8 h-8 text-[#7ED957] inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="2" y="6" width="20" height="14" rx="4" stroke="currentColor"/><path d="M8 10h8M8 14h4" stroke="currentColor"/></svg>
                        Built-In Chat
                    </h3>
                    <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0] mb-2">Collaborate in real time with channels, direct messages, file sharing, and screenshare—no extra apps needed. Instantly connect with your team and customers, share files, and resolve issues faster with integrated chat.</p>
                </div>
                <div class="order-1 md:order-1 rounded-xl overflow-hidden shadow-lg bg-white dark:bg-[#181818] border border-[#e3e3e0] dark:border-[#2e2e2b] aspect-w-16 aspect-h-10">
                    <img src="/images/safaridesk-chat-module.jpg" alt="SafariDesk Chat Module" class="object-cover w-full h-full">
                </div>
            </div>
            <!-- Asset Management -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-2 text-[#1b1b18] dark:text-white flex items-center gap-2">
                        <svg class="w-8 h-8 text-[#7ED957] inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="3" stroke="currentColor"/><path d="M8 8h8v8H8z" stroke="currentColor"/></svg>
                        Asset Management
                    </h3>
                    <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0] mb-2">Keep tabs on hardware and software assets, link them to tickets, and view asset history at a glance. Never lose track of your IT inventory—SafariDesk makes it easy to manage assets and tie them directly to support issues.</p>
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg bg-white dark:bg-[#181818] border border-[#e3e3e0] dark:border-[#2e2e2b] aspect-w-16 aspect-h-10">
                    <img src="/images/safaridesk-dashboard-support-overview.jpg" alt="SafariDesk Asset Management" class="object-cover w-full h-full">
                </div>
            </div>
            <!-- Internal Tasking (alternate) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <div class="order-2 md:order-2">
                    <h3 class="text-2xl font-bold mb-2 text-[#1b1b18] dark:text-white flex items-center gap-2">
                        <svg class="w-8 h-8 text-[#7ED957] inline" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="3" stroke="currentColor"/><path d="M7 9h10M7 13h6" stroke="currentColor"/></svg>
                        Internal Tasking
                    </h3>
                    <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0] mb-2">Assign, prioritize, and track tasks internally—set due dates and monitor progress without leaving SafariDesk. Streamline your team's workflow and ensure nothing falls through the cracks.</p>
                </div>
                <div class="order-1 md:order-1 rounded-xl overflow-hidden shadow-lg bg-white dark:bg-[#181818] border border-[#e3e3e0] dark:border-[#2e2e2b] aspect-w-16 aspect-h-10">
                    <img src="/images/safaridesk-tasks-workspace.jpg" alt="SafariDesk Internal Tasking" class="object-cover w-full h-full">
                </div>
            </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-[#1b1b18] text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to transform your customer support?</h2>
                <p class="text-lg text-[#a3a3a0] max-w-2xl mx-auto">
                    Join thousands of companies that use SafariDesk to deliver exceptional customer service.
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/register" class="px-8 py-4 rounded-lg bg-[#7ED957] text-[#1b1b18] font-semibold text-lg shadow-lg shadow-[#7ED957]/20 hover:bg-[#5bbf3a] transition min-w-[180px] text-center">Get Started</a>
                <a href="/pricing" class="px-8 py-4 rounded-lg border border-[#2e2e2b] text-white font-semibold text-lg hover:bg-white hover:text-[#1b1b18] transition min-w-[180px] text-center">View Pricing</a>
            </div>
        </div>
    </section>
@endsection
