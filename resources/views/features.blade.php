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
    
    <!-- Feature Categories -->
    <section class="py-16 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <a href="#ticketing" class="group bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-sm border border-[#e3e3e0] dark:border-[#2e2e2b] p-6 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-[#1b1b18] dark:text-white group-hover:text-[#7ED957] transition">Ticketing System</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">Streamlined ticket management for efficient customer support.</p>
                </a>
                
                <a href="#automation" class="group bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-sm border border-[#e3e3e0] dark:border-[#2e2e2b] p-6 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L14.5 9H21L16 14L18 21L12 17.5L6 21L8 14L3 9H9.5L12 2Z" stroke="#2E7D32" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-[#1b1b18] dark:text-white group-hover:text-[#7ED957] transition">Automation</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">Save time with powerful automation tools and workflows.</p>
                </a>
                
                <a href="#collaboration" class="group bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-sm border border-[#e3e3e0] dark:border-[#2e2e2b] p-6 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="#2E7D32" stroke-width="2"/>
                            <path d="M23 21V19C22.9986 17.1771 21.765 15.5857 20 15.13" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M16 3.13C17.7699 3.58317 19.0078 5.17799 19.0078 7.005C19.0078 8.83201 17.7699 10.4268 16 10.88" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-[#1b1b18] dark:text-white group-hover:text-[#7ED957] transition">Collaboration</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">Work together seamlessly with your entire support team.</p>
                </a>
                
                <a href="#reporting" class="group bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-sm border border-[#e3e3e0] dark:border-[#2e2e2b] p-6 hover:shadow-md transition">
                    <div class="w-12 h-12 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21H3V3" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M21 9L15 15L9 9L3 15" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2 text-[#1b1b18] dark:text-white group-hover:text-[#7ED957] transition">Reporting & Analytics</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">Gain insights with comprehensive reporting and analytics.</p>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Ticketing System Section -->
    <section id="ticketing" class="py-24 bg-[#f9f9f8] dark:bg-[#0f0f0e]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] text-[#2E7D32] dark:text-[#7ED957] text-sm font-medium mb-6">
                        Ticketing System
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#1b1b18] dark:text-white">
                        Streamlined ticket management
                    </h2>
                    <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0] mb-8">
                        Our intuitive ticketing system helps you organize, prioritize, and resolve customer inquiries efficiently.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mr-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L10 17L20 7" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-[#1b1b18] dark:text-white">Unified Inbox</h3>
                                <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                                    Collect customer inquiries from multiple channels - email, web forms, chat, and social media - in one unified inbox.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mr-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L10 17L20 7" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-[#1b1b18] dark:text-white">Smart Prioritization</h3>
                                <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                                    Automatically prioritize tickets based on urgency, customer tier, and other customizable factors.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mr-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L10 17L20 7" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-[#1b1b18] dark:text-white">Customer History</h3>
                                <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                                    Access complete customer interaction history for context-aware support and personalized service.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#7ED957] to-[#5bbf3a] rounded-2xl blur opacity-30 dark:opacity-40"></div>
                    <div class="relative bg-white dark:bg-[#1b1b18] rounded-xl shadow-xl overflow-hidden border border-[#e3e3e0] dark:border-[#2e2e2b]">
                        <div class="aspect-w-16 aspect-h-12 bg-[#e3e3e0] dark:bg-[#2e2e2b]"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Automation Section -->
    <section id="automation" class="py-24 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-[#7ED957] to-[#5bbf3a] rounded-2xl blur opacity-30 dark:opacity-40"></div>
                    <div class="relative bg-white dark:bg-[#1b1b18] rounded-xl shadow-xl overflow-hidden border border-[#e3e3e0] dark:border-[#2e2e2b]">
                        <div class="aspect-w-16 aspect-h-12 bg-[#e3e3e0] dark:bg-[#2e2e2b]"></div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] text-[#2E7D32] dark:text-[#7ED957] text-sm font-medium mb-6">
                        Automation
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#1b1b18] dark:text-white">
                        Save time with powerful automation
                    </h2>
                    <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0] mb-8">
                        Automate routine tasks and workflows to increase efficiency and provide faster responses to your customers.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mr-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L10 17L20 7" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-[#1b1b18] dark:text-white">Ticket Routing</h3>
                                <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                                    Automatically assign tickets to the right team members based on expertise, workload, and availability.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mr-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L10 17L20 7" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-[#1b1b18] dark:text-white">Canned Responses</h3>
                                <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                                    Create and use pre-written responses for common inquiries to ensure consistency and save time.
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mr-4">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 12L10 17L20 7" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2 text-[#1b1b18] dark:text-white">Workflow Automation</h3>
                                <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                                    Create custom workflows to automate repetitive tasks and ensure consistent processes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
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
