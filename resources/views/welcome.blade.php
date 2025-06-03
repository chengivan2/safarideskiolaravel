@extends('layouts.app')

@section('title', 'SafariDesk - Modern Ticketing System')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#f9f9f8] to-[#f0f9f0] dark:from-[#0a0a0a] dark:to-[#071207] -z-10"></div>
        <div class="absolute inset-0 opacity-10 bg-grid-pattern -z-10"></div>
        
        <div class="max-w-7xl mx-auto px-6 py-24 md:py-32">
            <div class="flex flex-col gap-12 items-center">
                <div class="text-center w-full h-[50vh]">
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight text-[#1b1b18] dark:text-white">
                        Ticketing System Built for <span id="type-animation" class="font-semibold text-[#7ED957]"></span>
             
                    </h1>
                    <p class="text-lg md:text-xl text-[#706f6c] dark:text-[#a3a3a0] mb-8">
                        Ticketing systems for customer support teams
                    </p>
                    
                </div>
                <div class="relative">
                    <div class="relative bg-white dark:bg-[#1b1b18] rounded-xl shadow-xl overflow-hidden border border-[#e3e3e0] dark:border-[#2e2e2b]">
                                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-white/80 dark:via-black/50 dark:to-black/80 pointer-events-none"></div>

                        <img src="/images/safari-desk-sign-up-page.jpg" alt="SafariDesk Dashboard" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="py-24 bg-white dark:bg-[#0f0f0e]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#1b1b18] dark:text-white">
                    Everything you need for exceptional support
                </h2>
                <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk combines powerful features with an intuitive interface to help your team deliver outstanding customer service.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-lg border border-[#e3e3e0] dark:border-[#2e2e2b] p-8">
                    <div class="w-14 h-14 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 8V12L15 15" stroke="#2E7D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="12" r="9" stroke="#2E7D32" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#1b1b18] dark:text-white">Streamlined Ticketing</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                        Organize, prioritize, and resolve customer inquiries efficiently with our intuitive ticketing system.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-lg border border-[#e3e3e0] dark:border-[#2e2e2b] p-8">
                    <div class="w-14 h-14 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#2E7D32" stroke-width="2"/>
                            <path d="M8 14C8 14 9.5 16 12 16C14.5 16 16 14 16 14" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 9H9.01" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M15 9H15.01" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#1b1b18] dark:text-white">Automation</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                        Save time with automated workflows, ticket routing, and responses to common customer inquiries.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-lg border border-[#e3e3e0] dark:border-[#2e2e2b] p-8">
                    <div class="w-14 h-14 rounded-xl bg-[#E6F7E6] dark:bg-[#0F3D0F] flex items-center justify-center mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21V19C17 16.7909 15.2091 15 13 15H5C2.79086 15 1 16.7909 1 19V21" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="#2E7D32" stroke-width="2"/>
                            <path d="M23 21V19C22.9986 17.1771 21.765 15.5857 20 15.13" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                            <path d="M16 3.13C17.7699 3.58317 19.0078 5.17799 19.0078 7.005C19.0078 8.83201 17.7699 10.4268 16 10.88" stroke="#2E7D32" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-[#1b1b18] dark:text-white">Team Collaboration</h3>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0]">
                        Work together seamlessly with internal notes, assignments, and shared ticket visibility.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- How It Works Section -->
    <section class="py-24 bg-[#f9f9f8] dark:bg-[#0f0f0e]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#1b1b18] dark:text-white">
                    How SafariDesk works
                </h2>
                <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0]">
                    A simple, powerful workflow to transform your customer support experience.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="relative">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#7ED957] text-[#1b1b18] font-bold flex items-center justify-center">1</div>
                        <div class="ml-4 text-xl font-bold text-[#1b1b18] dark:text-white">Capture</div>
                    </div>
                    <div class="ml-14">
                        <p class="text-[#706f6c] dark:text-[#a3a3a0] mb-4">
                            Collect customer inquiries from multiple channels - email, web forms, chat, and social media - in one unified inbox.
                        </p>
                    </div>
                    <div class="hidden md:block absolute top-14 right-0 transform translate-x-1/2">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#7ED957]">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative">
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#7ED957] text-[#1b1b18] font-bold flex items-center justify-center">2</div>
                        <div class="ml-4 text-xl font-bold text-[#1b1b18] dark:text-white">Organize</div>
                    </div>
                    <div class="ml-14">
                        <p class="text-[#706f6c] dark:text-[#a3a3a0] mb-4">
                            Automatically categorize, prioritize, and assign tickets to the right team members based on rules you define.
                        </p>
                    </div>
                    <div class="hidden md:block absolute top-14 right-0 transform translate-x-1/2">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-[#7ED957]">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-[#7ED957] text-[#1b1b18] font-bold flex items-center justify-center">3</div>
                        <div class="ml-4 text-xl font-bold text-[#1b1b18] dark:text-white">Resolve</div>
                    </div>
                    <div class="ml-14">
                        <p class="text-[#706f6c] dark:text-[#a3a3a0] mb-4">
                            Collaborate with your team to quickly resolve issues and provide timely, helpful responses to your customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section (Simplified) -->
    <section class="py-24 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-[#1b1b18] dark:text-white">
                    Trusted by teams worldwide
                </h2>
                <p class="text-lg text-[#706f6c] dark:text-[#a3a3a0]">
                    See what our customers have to say about SafariDesk.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-lg border border-[#e3e3e0] dark:border-[#2e2e2b] p-8">
                    <div class="flex items-center mb-6">
                        <div class="text-[#7ED957]">★★★★★</div>
                    </div>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0] mb-6">
                        "SafariDesk has transformed our customer support process. Our team is more efficient, and our customers are happier with the quick responses."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-[#e3e3e0] dark:bg-[#2e2e2b]"></div>
                        <div class="ml-3">
                            <div class="font-medium text-[#1b1b18] dark:text-white">Sarah Johnson</div>
                            <div class="text-sm text-[#706f6c] dark:text-[#a3a3a0]">Support Manager, Acme Inc.</div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-lg border border-[#e3e3e0] dark:border-[#2e2e2b] p-8">
                    <div class="flex items-center mb-6">
                        <div class="text-[#7ED957]">★★★★★</div>
                    </div>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0] mb-6">
                        "The automation features in SafariDesk have saved us countless hours. We can now focus on solving complex issues while routine tasks are handled automatically."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-[#e3e3e0] dark:bg-[#2e2e2b]"></div>
                        <div class="ml-3">
                            <div class="font-medium text-[#1b1b18] dark:text-white">Michael Chen</div>
                            <div class="text-sm text-[#706f6c] dark:text-[#a3a3a0]">CTO, TechStart</div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-[#FDFDFC] dark:bg-[#1b1b18] rounded-xl shadow-lg border border-[#e3e3e0] dark:border-[#2e2e2b] p-8">
                    <div class="flex items-center mb-6">
                        <div class="text-[#7ED957]">★★★★★</div>
                    </div>
                    <p class="text-[#706f6c] dark:text-[#a3a3a0] mb-6">
                        "Since implementing SafariDesk, our customer satisfaction scores have increased by 35%. The platform is intuitive and our agents love using it."
                    </p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-[#e3e3e0] dark:bg-[#2e2e2b]"></div>
                        <div class="ml-3">
                            <div class="font-medium text-[#1b1b18] dark:text-white">Emily Rodriguez</div>
                            <div class="text-sm text-[#706f6c] dark:text-[#a3a3a0]">Customer Experience Director, GlobalTech</div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const container = document.getElementById('type-animation');
            if (container) {
                const words = ['schools', 'SMBs', 'healthcare', 'real estate', 'logistics', 'and so much more'];
                let i = 0;
                let char = 0;
                let typing = true;
                function type() {
                    if (typing) {
                        if (char < words[i].length) {
                            container.textContent += words[i][char];
                            char++;
                            setTimeout(type, 80);
                        } else {
                            typing = false;
                            setTimeout(type, 2000);
                        }
                    } else {
                        if (char > 0) {
                            container.textContent = words[i].slice(0, char - 1);
                            char--;
                            setTimeout(type, 40);
                        } else {
                            typing = true;
                            i = (i + 1) % words.length;
                            setTimeout(type, 300);
                        }
                    }
                }
                type();
            }
        });
    </script>
@endsection

