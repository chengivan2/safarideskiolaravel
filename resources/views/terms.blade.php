@extends('layouts.app')

@section('title', 'Terms and Conditions - SafariDesk')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="/images/safaridesk-terms-and-privacy-main-image.png" alt="Terms and Conditions" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Terms and Conditions</h1>
        </div>
    </section>
    
    <!-- Terms Content -->
    <section class="py-16 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-lg dark:prose-invert max-w-none">
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">1. Introduction</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Welcome to SafariDesk. These Terms and Conditions govern your use of our website and services. By accessing or using SafariDesk, you agree to be bound by these Terms. If you disagree with any part of the terms, you may not access the service.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">2. Use of Service</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk provides a ticketing system platform for customer support teams. You are responsible for maintaining the security of your account and for all activities that occur under your account. You must immediately notify SafariDesk of any unauthorized uses of your account or any other breaches of security.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">3. Privacy Policy</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Your privacy is important to us. It is SafariDesk's policy to respect your privacy regarding any information we may collect from you across our website. We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">4. Intellectual Property</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    The Service and its original content, features, and functionality are and will remain the exclusive property of SafariDesk and its licensors. The Service is protected by copyright, trademark, and other laws of both the United States and foreign countries. Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of SafariDesk.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">5. Termination</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    We may terminate or suspend your account and bar access to the Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of the Terms.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">6. Limitation of Liability</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    In no event shall SafariDesk, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your access to or use of or inability to access or use the Service.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">7. Changes to Terms</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
                </p>
                
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">8. Contact Us</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    If you have any questions about these Terms, please contact us at support@safaridesk.io.
                </p>
                
                <p class="text-sm text-[#706f6c] dark:text-[#a3a3a0] mt-12">
                    Last updated: June 5, 2025
                </p>
            </div>
        </div>
    </section>
@endsection
