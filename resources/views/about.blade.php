@extends('layouts.app')

@section('title', 'About Us - SafariDesk')

@section('content')
<!-- Hero Section with fixed background -->
<section class="relative h-[60vh] flex flex-col justify-center items-center text-center overflow-hidden">
    <div class="absolute inset-0 bg-[#7ED957]/80 bg-[url('/images/safaridesk-hero-image-illustration.png')] bg-cover bg-center bg-fixed z-0"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full w-full">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">A GREAT SOFTWARE STARTS WITH A GREAT TEAM</h1>
        <p class="text-xl text-white/90 mb-2">Discover What Makes SafariDesk Unique</p>
    </div>
</section>

<!-- Product Intro Section with overlayed background and stronger overlay -->
<section class="relative h-[40vh] flex flex-col justify-center items-center text-center overflow-hidden">
    <div class="absolute inset-0 bg-black/20 z-10"></div>
    <div class="absolute inset-0 bg-[url('/images/courier-software-img.jpg')] bg-cover bg-center bg-fixed z-0"></div>
    <div class="relative z-20 flex flex-col items-center justify-center h-full w-full">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">SafariDesk is a product of SafariDesk, Inc.</h2>
        <p class="text-lg text-white/80 max-w-2xl mx-auto">SafariDesk is a software company that focuses on delivering exceptional help desk software that empowers businesses to focus on what matters most.</p>
    </div>
</section>

<!-- Why SafariDesk Section -->
<section class="py-20 bg-white dark:bg-[#0f0f0e]">
    <div class="max-w-4xl mx-auto px-6 text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold mb-4 text-[#1b1b18] dark:text-white">Why SafariDesk?</h2>
        <p class="text-lg md:text-xl text-[#706f6c] dark:text-[#a3a3a0] mb-4">SafariDesk is the all-in-one support solution your team needs—ticketing, built-in chat, asset management, internal tasking, and more—at just <span class="font-semibold text-[#7ED957]">$5 per agent/month</span> (or <span class="font-semibold text-[#FFA726]">$60 per agent/year</span>). Literally the cheapest cloud-hosted help desk you'll find.</p>
    </div>
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
        <!-- All-in-One Ticketing -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="7" width="18" height="13" rx="3" stroke="currentColor" />
                    <path d="M7 7V5a5 5 0 0 1 10 0v2" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">All-in-One Ticketing</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Convert emails into tickets, track SLAs, and generate reports from one intuitive dashboard.</p>
        </div>
        <!-- Built-In Chat -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="2" y="6" width="20" height="14" rx="4" stroke="currentColor" />
                    <path d="M8 10h8M8 14h4" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Built-In Chat</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Collaborate in real time with channels, direct messages, file sharing, and screenshare—no extra apps needed.</p>
        </div>
        <!-- Asset Management -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="4" y="4" width="16" height="16" rx="3" stroke="currentColor" />
                    <path d="M8 8h8v8H8z" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Asset Management</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Keep tabs on hardware and software assets, link them to tickets, and view asset history at a glance.</p>
        </div>
        <!-- Internal Tasking -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="5" width="18" height="14" rx="3" stroke="currentColor" />
                    <path d="M7 9h10M7 13h6" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Internal Tasking</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Assign, prioritize, and track tasks internally—set due dates and monitor progress without leaving SafariDesk.</p>
        </div>
        <!-- Smart Automations -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" />
                    <path d="M12 8v4l3 3" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Smart Automations</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Automate ticket routing, status updates, and alerts so nothing slips through the cracks.</p>
        </div>
        <!-- Scalable & User-Friendly -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 17v-2a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v2" stroke="currentColor" />
                    <circle cx="12" cy="7" r="4" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Scalable & User-Friendly</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Whether you’re a 5-person startup or a 500-agent team, SafariDesk scales seamlessly with no added complexity.</p>
        </div>
        <!-- Secure & Affordable -->
        <div class="bg-[#f8fafc] dark:bg-[#181818] rounded-xl shadow p-6 flex flex-col items-center text-center">
            <div class="mb-4">
                <svg class="w-10 h-10 text-[#7ED957]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="4" y="11" width="16" height="9" rx="2" stroke="currentColor" />
                    <path d="M8 11V7a4 4 0 0 1 8 0v4" stroke="currentColor" />
                </svg>
            </div>
            <h3 class="font-bold text-lg mb-2">Secure & Affordable</h3>
            <p class="text-[#706f6c] dark:text-[#a3a3a0]">Enterprise-grade encryption, SSO support, and transparent pricing—no hidden fees ever.</p>
        </div>
    </div>
    <div class="max-w-3xl mx-auto text-center mt-12">
        <p class="text-lg md:text-xl text-[#1b1b18] dark:text-white font-semibold">Try SafariDesk today and see how simple—and affordable—support can be.</p>
    </div>
</section>

<!-- Mission & Vision Section with gradient background -->
<section class="py-20 bg-gradient-to-br from-green-500 via-lime-400 to-orange-400 text-[#1b1b18]">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-3xl font-bold mb-4">MISSION</h2>
            <p class="text-lg">SafariDesk’s mission is to help businesses <span class="font-semibold">Build Better Customer Relationships</span> by providing a simple yet elegant platform to efficiently route, track, prioritize and solve customer support tickets.</p>
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4">VISION</h2>
            <p class="text-lg">SafariDesk’s vision is to bring accountability and transparency to customer support by providing a robust platform that transforms the way businesses streamline and deliver quality customer support.</p>
        </div>
    </div>
</section>

<!-- CEO/Contact Section -->
<section class="py-20 bg-[#232323] text-white">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
        <div class="flex flex-col items-center md:items-start">
            <img src="/images/safaridesk-ceo.jpg" alt="CEO Photo" class="w-32 h-32 rounded-full object-cover object-top shadow-lg mb-4">
            <h3 class="text-2xl font-bold mb-1">Enock Kipchumba</h3>
            <div class="text-[#7ED957] font-semibold mb-2">Founder & CEO</div>
            <div class="flex gap-4 mb-4">
                <a title="Enock Kipchumba on LinkedIn" href="https://www.linkedin.com/in/ruto-ke?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app " class="flex items-center gap-1 text-[#a3a3a0] hover:text-[#7ED957] transition" target="_blank" rel="noopener">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="3" stroke="#7ED957" />
                        <path d="M7 10v6" stroke="#7ED957" />
                        <circle cx="7" cy="7" r="1.5" stroke="#7ED957" />
                        <path d="M11 10v6m0-6h2.5a2.5 2.5 0 0 1 2.5 2.5V16" stroke="#7ED957" />
                    </svg>
                </a>
                <a title="Email Enock Kipchumba" href="mailto:Ruto.e@safaridesk.io" class="flex items-center gap-1 text-[#a3a3a0] hover:text-[#7ED957] transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="3" y="5" width="18" height="14" rx="2" stroke="#7ED957" />
                        <path d="M3 7l9 6 9-6" stroke="#7ED957" />
                    </svg>
                </a>
            </div>
        </div>
        <div>
            <h4 class="text-2xl font-bold mb-4">Message from CEO</h4>
            <p class="text-[#a3a3a0] mb-2">I'm Enock, founder of SafariDesk When we started building SafariDesk, we weren't trying to compete with the giants — we were solving a problem we faced ourselves: support systems that were overpriced, bloated, or just too complicated for small teams. So we built SafariDesk for real teams — the kind juggling tickets, emails, and internal tasks without a dedicated IT department.
                We kept it simple, affordable, and powerful enough to scale. Let's connect on <a title="Enock Kipchumba on LinkedIn"" href=" https://www.linkedin.com/in/ruto-ke?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" rel="noopener" class="text-[#7ED957] hover:underline">LinkedIn</a> and be friends as we grow this together 😊and hey, if you're still not convinced, l'll personally pay you to use our system (okay.. maybe just with coffee)☕ .</p>
            <div class="text-[#7ED957] font-semibold mt-4">— Enock Kipchumba, CEO</div>
        </div>
    </div>
</section>
@endsection