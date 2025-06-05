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
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold text-white mb-4">Terms and Conditions</h1>
        </div>
    </section>
    
    <!-- Terms Content -->
    <section class="py-16 bg-white dark:bg-[#0a0a0a]">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-lg dark:prose-invert max-w-none">
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">1. Introduction</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    The following terms and conditions govern all use of the safaridesk.io website and all content (“SafariDesk”), services and products available at or through the website, including, but not limited to, help desk hosting service (“Hosting Service”), (taken together, the Service). The Service is owned and operated by SafariDesk (“SafariDesk”). The Service is offered subject to your acceptance without modification of all of the terms and conditions contained herein and all other operating rules, policies (including, without limitation, SafariDesk’s Privacy Policy) and procedures that may be published from time to time on this website by SafariDesk (collectively, the “Agreement”).
                </p>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Please read this Agreement carefully before accessing or using the Service. By accessing or using any part of the web site, you agree to become bound by the terms and conditions of this agreement. If you do not agree to all the terms and conditions of this agreement, then you may not access the Service or use any services. If these terms and conditions are considered an offer by SafariDesk, acceptance is expressly limited to these terms. The Service is available only to individuals who are at least 13 years old.
                </p>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Don't abuse or use Service to spam or do anything else illegal. Violation will result in termination of your SafariDesk account.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">2. SafariDesk Account Terms</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    If you create an account on the Service, you are responsible for maintaining the security of your account and you are fully responsible for all activities and content that occur under the account and any other actions taken in connection with the account. You must immediately notify SafariDesk of any unauthorized uses of your account or any other breaches of security. SafariDesk will not be liable for any acts or omissions by You, including any damages of any kind incurred as a result of such acts or omissions.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">3. Subscription Terms</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk is offered as a Service as a Subscription (SaaS) model with access to the help desk billed per agent. An agent is anyone having access to the Staff Control Panel. At least one Full-Time Agent is required to maintain an active account. Agents are restricted to two concurrent access sessions, regardless of the type of the agent.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.1 Full-Time Agent</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Full-Time Agents are billed for the entire subscription period. Adding or removing Full-Time agents in the middle of a subscription period will incur a respective prorated charge or credit for that agent for the subscription period to your account.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">3.2 Occasional Agent</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Occasional Agents have access to your help desk on a per-day basis. Day Passes are required for Occasional Agents to access your help desk for a period of 24-hours from initial log-in. Occasional Agents can access the help desk an unlimited number of times within the 24-hour period. Day Passes are required for each new 24-hour access period and can be purchased with a minimum of 10 passes per purchase. At any time in your subscription period, Occasional Agents can be converted into Full-Time Agents. You will be charged the prorated amount for the converted agent for the remainder of the subscription period. If you would like to convert a Full-Time Agent to an Occasional Agent, you will be credited for the remainder of the subscription period for the Full-Time Agent. The Agent will not be renewed for the next subscription period and will require Day Passes to log-in immediately after changing Agent type.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">4. Payment and Renewal</h2>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">4.1 General Terms</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    By Subscribing to Service you agree to pay SafariDesk the monthly, quarterly, semi-annual or annual subscription fees indicated for that service. Payments will be charged on a pre-pay basis on the day you sign up for Service and will cover the use of that service for the selected subscription period as indicated.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">4.2 Renewal and Cancellation</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Unless you cancel the Service before the end of the applicable subscription period, your subscription will automatically renew and you authorize us to collect the then-applicable subscription fee (as well as any taxes) using any credit card or other payment mechanism we have on record for you. Service subscription can be canceled at any time in the Account Panel of your account. Email or phone requests to cancel your Service will not be accepted. Upon service cancellation, fees are not refundable.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">4.3 Failed Payments</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    If the card on file is declined for any reason, you should update your payment information to avoid an interruption in service to your clients and agents. Failure to update your payment information will cause your help desk to be aged out, and you will lose access to your data. In order to reinstate your account, all outstanding invoices must be reconciled.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">5. Data Retention and Deletion</h2>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">5.1 Data Export Request</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    Accounts in good standing can request a complete Data export once a year or upon Account Cancelation. SafariDesk will comply with such requests as soon as reasonably practicable.
                </p>
                <h3 class="text-xl font-bold mb-4 text-[#1b1b18] dark:text-white">5.2 Data Retention and Deletion</h3>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    On account Cancelation or failure to pay (Section 4.3), SafariDesk will delete all Data (including backups) from safaridesk.io servers after a recovery period of up to 30 days following such event and within a maximum period of 180 days, unless otherwise requested in writing or required by law.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">6. Intellectual Property</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    This Agreement does not transfer from SafariDesk to you any safaridesk.io or third party intellectual property, and all right, title and interest in and to such property will remain (as between the parties) solely with SafariDesk. SafariDesk, osTicket, safaridesk.io logo, and all other trademarks, service marks, graphics and logos used in connection with safaridesk.io, or the Service are trademarks or registered trademarks of SafariDesk or SafariDesk’s licensors. Other trademarks, service marks, graphics and logos used in connection with the Service may be the trademarks of other third parties. Your use of the Service grants you no right or license to reproduce or otherwise use any SafariDesk or third-party trademarks.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">7. Attribution</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk may use Customer’s name and logo in client listings. SafariDesk may issue a press release announcing the relationship contemplated hereby; Customer shall have the right to approve such press release prior to publication, which approval shall not unreasonably be withheld. Further, Customer’s help desk(s) hosted on the Hosting Services will contain a “Powered by SafariDesk” logo (or similar attribution).
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">8. Changes</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk reserves the right, at its sole discretion, to modify or replace any part of this Agreement. It is your responsibility to check this Agreement periodically for changes. Your continued use of or access to the Service following the posting of any changes to this Agreement constitutes acceptance of those changes. SafariDesk may also, in the future, offer new services and/or features through the Service (including, the release of new tools and resources). Such new features and/or services shall be subject to the terms and conditions of this Agreement.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">9. Termination</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    SafariDesk may terminate your access to all or any part of the Service at any time, with or without cause, with or without notice, effective immediately. If you wish to terminate this Agreement or your safaridesk.io account (if you have one), you may simply discontinue using the Service. All provisions of this Agreement which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">10. Disclaimer of Warranties</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    The Service is provided “as is". SafariDesk and its suppliers and licensors hereby disclaim all warranties of any kind, express or implied, including, without limitation, the warranties of merchantability, fitness for a particular purpose and non-infringement. Neither SafariDesk nor its suppliers and licensors, makes any warranty that the Service will be error free or that access thereto will be continuous or uninterrupted.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">11. Limitation of Liability</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    In no event will SafariDesk, or its suppliers or licensors, be liable with respect to any subject matter of this agreement under any contract, negligence, strict liability or other legal or equitable theory for: (i) any special, incidental or consequential damages; (ii) the cost of procurement for substitute products or services; (iii) for interruption of use or loss or corruption of data; or (iv) for any amounts that exceed the fees paid by you to SafariDesk under this agreement during the twelve (12) month period prior to the cause of action. SafariDesk shall have no liability for any failure or delay due to matters beyond their reasonable control. The foregoing shall not apply to the extent prohibited by applicable law.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">12. General Representation and Warranty</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    You represent and warrant that (i) your use of the Service will be in strict accordance with the SafariDesk Privacy Policy, with this Agreement and with all applicable laws and regulations (including without limitation any local laws or regulations in your country, state, city, or other governmental area, regarding online conduct and acceptable content, and including all applicable laws regarding the transmission of technical data exported from the United States or the country in which you reside) and (ii) your use of the Service will not infringe or misappropriate the intellectual property rights of any third party.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">13. Indemnification</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    You agree to indemnify and hold harmless SafariDesk, its contractors, and its licensors, and their respective directors, officers, employees and agents from and against any and all claims and expenses, including attorneys’ fees, arising out of your use of the Service, including but not limited to your violation of this Agreement.
                </p>
                <h2 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-white">14. Miscellaneous</h2>
                <p class="mb-6 text-[#706f6c] dark:text-[#a3a3a0]">
                    This Agreement constitutes the entire agreement between SafariDesk and you concerning the subject matter hereof, and they may only be modified by a written amendment signed by an authorized executive of SafariDesk, or by the posting by safaridesk.io of a revised version. Except to the extent applicable law, if any, provides otherwise, this Agreement, any access to or use of the Service will be governed by the laws of the state of Louisiana, U.S.A., excluding its conflict of law provisions, and the proper venue for any disputes arising out of or relating to any of the same shall be brought exclusively in the courts of the State of Louisiana, and you consent to the exercise of personal jurisdiction over you by these courts in all such actions. If any part of this Agreement is held invalid or unenforceable, that part will be construed to reflect the parties’ original intent, and the remaining portions will remain in full force and effect. A waiver by either party of any term or condition of this Agreement or any breach thereof, in any one instance, will not waive such term or condition or any subsequent breach thereof. You may assign your rights under this Agreement to any party that consents to, and agrees to be bound by, its terms and conditions; SafariDesk may assign its rights under this Agreement without condition. This Agreement will be binding upon and will inure to the benefit of the parties, their successors and permitted assigns.
                </p>
                <p class="text-sm text-[#706f6c] dark:text-[#a3a3a0] mt-12">
                    Last updated: June 5, 2025
                </p>
            </div>
        </div>
    </section>
@endsection
