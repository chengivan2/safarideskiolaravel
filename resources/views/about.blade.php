@extends('layouts.app')

@section('title', 'About Us - SafariDesk')

@section('content')
<!-- Hero Section with fixed background -->
<section class="relative h-[60vh] flex flex-col justify-center items-center text-center overflow-hidden">
    <div class="absolute inset-0 bg-[#7ED957]/80 bg-[url('/images/safaridesk-hero-image-illustration.png')] bg-cover bg-center bg-fixed z-0"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full w-full">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">About SafariDesk</h1>
        <p class="text-xl text-white/90 mb-2">Hands down the best help desk</p>
    </div>
</section>

<!-- Mission & Vision Section with gradient background -->
<section class="py-20 bg-gradient-to-br from-green-500 via-lime-400 to-orange-400 text-[#1b1b18]">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-3xl font-bold mb-4">MISSION</h2>
            <p class="text-lg">SafariDesk’s mission is to help support teams of any size build stronger customer relationships by offering a simple, affordable platform that organizes and resolves support tickets—turning customer chaos into clear, manageable tasks.</p>
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-4">VISION</h2>
            <p class="text-lg">SafariDesk envisions a world where customer support is seamless and intuitive, enabling every user to provide outstanding experiences, enjoy our user-friendly software, and feel connected as part of the SafariDesk community.</p>
        </div>
    </div>
</section>

<!-- CEO/Contact Section -->
<section class="py-20 bg-[#232323] text-white">
    <div class="max-w-2xl mx-auto px-6 flex flex-col items-center text-center">
        <h4 class="text-2xl font-bold mb-4">Message from CEO</h4>
        <p class="text-[#a3a3a0] mb-6">I'm Enock, founder of SafariDesk. When we started building SafariDesk, we weren't trying to compete with the giants — we were solving a problem we faced ourselves: support systems that were overpriced, bloated, or just too complicated for small teams. So we built SafariDesk for real teams — the kind juggling tickets, emails, and internal tasks without a dedicated IT department. We kept it simple, affordable, and powerful enough to scale. Let's connect on <a title="Enock Ruto on LinkedIn" href="https://www.linkedin.com/in/ruto-ke?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" rel="noopener" class="text-[#7ED957] hover:underline">LinkedIn</a> and be friends as we grow this together 😊 and hey, if you're still not convinced, I'll personally pay you to use our system (okay.. maybe just with coffee)☕ .</p>
        <img src="/images/safaridesk-ceo.jpg" alt="CEO Photo" class="w-32 h-32 rounded-full object-cover object-top shadow-lg mb-4">
        <h3 class="text-2xl font-bold mb-1">Enock Ruto</h3>
        <div class="text-[#7ED957] font-semibold mb-2">Founder & CEO</div>
        <div class="flex gap-4 justify-center mb-4">
            <a title="Enock Ruto on LinkedIn" href="https://www.linkedin.com/in/ruto-ke?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="flex items-center gap-1 text-[#a3a3a0] hover:text-[#7ED957] transition" target="_blank" rel="noopener">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="2" y="2" width="20" height="20" rx="3" stroke="#7ED957" />
                    <path d="M7 10v6" stroke="#7ED957" />
                    <circle cx="7" cy="7" r="1.5" stroke="#7ED957" />
                    <path d="M11 10v6m0-6h2.5a2.5 2.5 0 0 1 2.5 2.5V16" stroke="#7ED957" />
                </svg>
            </a>
            <a title="Email Enock Ruto" href="mailto:Ruto.e@safaridesk.io" class="flex items-center gap-1 text-[#a3a3a0] hover:text-[#7ED957] transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="5" width="18" height="14" rx="2" stroke="#7ED957" />
                    <path d="M3 7l9 6 9-6" stroke="#7ED957" />
                </svg>
            </a>
        </div>
        <div class="text-[#7ED957] font-semibold mt-2">— Enock Ruto, CEO</div>
    </div>
</section>
@endsection