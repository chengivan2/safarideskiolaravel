@extends('layouts.app')

@section('title', 'Pricing - SafariDesk Ticketing System')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-[#f9f9f8] to-[#f0f9f0] dark:from-[#0a0a0a] dark:to-[#071207] -z-10"></div>
    <div class="absolute inset-0 opacity-10 bg-grid-pattern -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 py-24 md:py-32">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-[#E6F7E6] dark:bg-[#0F3D0F] text-[#2E7D32] dark:text-[#7ED957] text-sm font-medium mb-6">
                <span class="mr-2">💰</span> Simple, transparent pricing
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight text-[#1b1b18] dark:text-white">
                SafariDesk Ticketing System - Pricing & Features
            </h1>
            <p class="text-lg md:text-xl text-[#706f6c] dark:text-[#a3a3a0] mb-8">
                All users receive full access to features, no hidden tiers. Designed for ease of use, fast setup, and scalability.
            </p>
        </div>
    </div>
</section>

<!-- Pricing Toggle -->
<section class="py-8 bg-white dark:bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-center items-center space-x-4">
            <span class="text-lg font-medium text-[#1b1b18] dark:text-white">Monthly</span>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer" id="pricing-toggle">
                <div class="w-14 h-7 bg-[#e3e3e0] dark:bg-[#2e2e2b] peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[4px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-[#7ED957]"></div>
            </label>
            <span class="text-lg font-medium text-[#1b1b18] dark:text-white">Annual</span>
        </div>
    </div>
</section>

<!-- Single Pricing Plan -->
<section class="py-16 bg-white dark:bg-[#0a0a0a]">
    <div class="container mx-auto px-4">
        <div class="max-w-xl mx-auto">
            <div class="relative rounded-xl overflow-hidden border-[#7ED957] shadow-lg shadow-green-500/10 border-2 hover:shadow-xl transition-all duration-300 group bg-gradient-to-br from-green-100/60 via-white/40 to-green-200/60 dark:from-gray-800/60 dark:via-gray-900/40 dark:to-green-900/60 backdrop-blur-xl backdrop-saturate-150">
                <div class="p-8 relative z-10 h-full flex flex-col">
                    <h3 class="text-2xl font-bold mb-2 text-[#1b1b18] dark:text-white">Basic</h3>

                    <div class="monthly-price">
                        <div class="mt-2 flex items-baseline gap-4">
                            <span class="text-3xl font-extrabold text-[#7ED957] dark:text-[#7ED957]">$5</span>
                            <span class="text-lg text-gray-600 dark:text-gray-400">per agent / month (billed monthly)</span>
                        </div>
                    </div>

                    <div class="annual-price hidden">
                        <div class="mt-2 flex items-baseline gap-4">
                            <span class="text-3xl font-extrabold text-[#7ED957] dark:text-[#7ED957]">$60</span>
                            <span class="text-lg text-gray-600 dark:text-gray-400">per agent / year (billed annually)</span>
                        </div>
                    </div>

                    <p class="mt-4 font-bold bg-gradient-to-r from-[#7ED957] via-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        <span>
                            <svg class="inline-block mr-2 text-[#7ED957]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#7ED957" fill-opacity="0.2" stroke="#7ED957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 12L11 15L16 10" stroke="#7ED957" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            2 Agents for free
                        </span>
                    </p>

                    <ul class="mt-6 space-y-3 flex-grow text-gray-700 dark:text-gray-200">
                        <!-- Core Ticketing -->
                        <li class="flex items-start">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="12" r="8" fill="#7ED957" />
                                <text x="10" y="16" text-anchor="middle" font-size="12" fill="white" font-family="Arial" font-weight="bold">1</text>
                            </svg>
                            <span class="font-bold">Core Ticketing</span>
                        </li>
                        <li class="flex items-start ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Unified Inbox: Email → ticket conversion</span>
                        </li>
                        <li class="flex items-start ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>SLAs & Priorities: Set response targets and escalation rules</span>
                        </li>
                        <li class="flex items-start ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Customer Satisfaction (CSAT): Collect ratings after each ticket</span>
                        </li>
                        <li class="flex items-start ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Multiple Ticket Forms: Custom fields and workflows</span>
                        </li>
                        <!-- Chat & Collaboration -->
                        <li class="flex items-start mt-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="12" r="8" fill="#7ED957" />
                                <text x="10" y="16" text-anchor="middle" font-size="12" fill="white" font-family="Arial" font-weight="bold">2</text>
                            </svg>
                            <span class="font-bold">Chat & Collaboration</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>SafariChat Built-In: Channels, direct messages, file sharing</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Asset Tracking: Link hardware/software to tickets; view history and status</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Internal Tasking: Create, assign, and track back-office tasks directly in the platform</span>
                        </li>
                        <!-- Automation & Analytics -->
                        <li class="flex items-start mt-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="12" r="8" fill="#7ED957" />
                                <text x="10" y="16" text-anchor="middle" font-size="12" fill="white" font-family="Arial" font-weight="bold">3</text>
                            </svg>
                            <span class="font-bold">Automation & Analytics</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Triggers & Automations: Auto-route tickets, send reminders, update statuses</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Prebuilt Dashboards: Ticket volumes, SLA compliance, agent performance</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Custom Reports: Filter by priority, channel, status, or custom field</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Real-Time Alerts: Instant notifications for high-priority tickets</span>
                        </li>
                        <!-- Security & Reliability -->
                        <li class="flex items-start mt-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="12" r="8" fill="#7ED957" />
                                <text x="10" y="16" text-anchor="middle" font-size="12" fill="white" font-family="Arial" font-weight="bold">4</text>
                            </svg>
                            <span class="font-bold">Security & Reliability</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Enterprise-Grade Encryption: Data encrypted in transit & at rest</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Role-Based Access: Granular permissions for admins and agents</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>SSO Support (SAML/OAuth): One-click login for your team</span>
                        </li>
                        <li class="flex items-start mt-3 ml-10">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 10.5L9 14L15 7" stroke="#7ED957" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span>Daily Backups & Redundancy: Guaranteed uptime and data protection</span>
                        </li>
                        <!-- Coming Soon -->
                        <li class="flex items-start mt-3">
                            <svg class="flex-shrink-0 w-5 h-5 text-[#7ED957] mt-1 mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10" cy="12" r="8" fill="#7ED957" />
                                <text x="10" y="16" text-anchor="middle" font-size="12" fill="white" font-family="Arial" font-weight="bold">5</text>
                            </svg>
                            <span class="font-bold">Coming Soon</span>
                        </li>
                        <ul class="list-disc ml-12 space-y-1">
                            <li>Automation & AI</li>
                        </ul>
                    </ul>
                    <div class="mt-8">
                        <a href="/register">
                            <button class="cursor-pointer w-full px-6 py-3 rounded-md font-medium bg-[#7ED957] hover:bg-[#5bbf3a] text-white transition-colors">
                                Start Your Safari
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-20 text-center">
            <h2 class="text-2xl font-bold mb-4 text-[#1b1b18] dark:text-white">
                Ready to Go on a Ticketing Safari?
            </h2>
            <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-2xl mx-auto">
                Contact our sales team to discuss your specific requirements and get a tailored quote.
            </p>
            <a href="/contact">
                <button class="px-6 py-3 text-gray-700 dark:text-gray-200 bg-white/70 dark:bg-gray-800/70 hover:bg-white dark:hover:bg-gray-700 border border-gray-300 dark:border-gray-700 rounded-md font-medium transition-colors">
                    Contact Sales
                </button>
            </a>
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
            <a href="#" class="px-8 py-4 rounded-lg border border-[#2e2e2b] text-white font-semibold text-lg hover:bg-white hover:text-[#1b1b18] transition min-w-[180px] text-center">Contact Sales</a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script src="/js/pricing.js"></script>
@endsection