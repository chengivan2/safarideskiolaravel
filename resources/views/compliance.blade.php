@extends('layouts.app')

@section('title', 'Compliance & Security - SafariDesk')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="/images/safaridesk-terms-and-privacy-main-image.png" alt="Compliance & Security" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>
        </div>
        <!-- Content -->
        <div class="relative z-10 text-center px-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Compliance & Security</h1>
        </div>
    </section>
    <!-- Compliance Content -->
    <section class="py-16 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-lg dark:prose-invert max-w-none">
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">1. Overview</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    The security of our customers’ data is critically important to us. SafariDesk is committed to protecting our customers’ personal and sensitive information. This notice describes our data security and compliance statement.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">2. Compliance</h2>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">2.1 Credit Card Data Storage (PCI Compliant)</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk does not capture, transit or store any credit card information. All credit card data is captured and stored securely by our PCI compliant payment gateway provider, Stripe, which is certified to PCI Service Provider Level 1.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">2.2 Datacenters Certification</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk runs on leased servers provided by Linode in two different datacenter locations.
                </p>
                <ul class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    <li>Dallas, TX – SOC2 security certified</li>
                    <li>London, UK – ISO9001 security certified</li>
                </ul>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">Certificates are available upon request.</p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">3. Data Security</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Security is of paramount importance to us. We focus on providing a secure environment that goes above and beyond industry security standards and guidelines. The following is an overview of the steps we take to secure our customers’ private information.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.1 Secure Server Access</h3>
                <ul class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    <li>SafariDesk network is set up securely with minimal access to outside networks. All communication with servers (outside of public HTTP/HTTPS access) is over encrypted secure shell (SSH) with authentication only available via public/private key (PKI).</li>
                    <li>Server administration is performed over VPN connection.</li>
                    <li>SSH password-based authentication is disabled.</li>
                    <li>Firewalls on all servers are set to default-reject.</li>
                    <li>Database connections are only accepted from authorized servers on the internal private subnet.</li>
                </ul>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.2 Software Updates and Security Patches</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk facilitates secured patching and software updates of all our server infrastructure systems, including actively monitoring numerous online resources for the latest vulnerabilities. It’s our policy to apply security patches as soon as they are made available.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.3 Access and Activity Logging</h3>
                <ul class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    <li>All access and activities by our employees on our servers are logged, monitored and observed.</li>
                    <li>Restricted role-based access to servers and data.</li>
                    <li>Documented Change Management Process – All changes to the infrastructure for both network and software are documented and peer-reviewed.</li>
                    <li>Server access logs for auditing are kept for 28 days.</li>
                    <li>Our SafariDesk customers’ access to their account is logged and available for review by account administrator. IP whitelisting is also available for SafariDesk customers, which can dramatically reduce the exposure of our customers’ accounts.</li>
                </ul>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.4 Password Hashing</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    User account passwords are salted and hashed using a slow hash function to increase security. SafariDesk employees cannot recover original passwords.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.5 Siloed Databases</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk customer’s data is siloed to individual databases with restricted access to ensure optimum availability while ensuring complete customer privacy and data segregation. We do not co-mingle multiple accounts on the same database tables.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.6 On Disk Encryption</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk databases are encrypted on disk with AES-256. Decryption keys are stored securely on separate machines.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.7 Encrypted Offsite Backups</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Backups are performed nightly, encrypted and stored offsite.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">4. Reliability</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk infrastructure has been architected to provide one of the most flexible and secure environments available. Our network operations team considers reliability to be of the greatest operational concern, they like to sleep at night!
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">4.1 Infrastructure Redundancy</h3>
                <ul class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    <li>SafariDesk infrastructure is built with high availability and redundancy in mind. We’ve also gone to great lengths to remove all single points of failure.</li>
                    <li>Redundant front-end proxy web servers</li>
                    <li>Application servers are redundant and load balanced.</li>
                    <li>Clustered database servers — multiple masters (no failover time).</li>
                    <li>Highly available and scalable DNS.</li>
                    <li>Redundant messaging infrastructure for the monitoring system</li>
                </ul>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">4.2 Infrastructure Monitoring</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk infrastructure is monitored 24/7. Any critical incident triggers SMS alerts to the entire network operations team.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">4.3 Disaster Recovery</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    We make routine backups of our server configurations and database data to be used in the unexpected event of data loss or corruption.
                </p>
                <p class="text-sm text-[#706f6c] dark:text-[#a3a3a0] mt-12">
                    Last updated: June 5, 2025
                </p>
            </div>
        </div>
    </section>
@endsection
