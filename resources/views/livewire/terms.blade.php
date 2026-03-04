@php
    $sections = [
        ['title' => 'Cookies', 'body' => 'We employ the use of cookies. By accessing Sea Pour Marine Enterprises, you agreed to use cookies in agreement with the Sea Pour Marine Enterprises Privacy Policy. Most interactive websites use cookies to let us retrieve the user details for each visit. Some of our affiliate/advertising partners may also use cookies.'],
        ['title' => 'License', 'body' => 'Unless otherwise stated, Sea Pour Marine Enterprises and/or its licensors own the intellectual property rights for all material on Sea Pour Marine Enterprises. All intellectual property rights are reserved. You may access this for your own personal use. You must not republish, sell, reproduce, or redistribute content from Sea Pour Marine Enterprises.'],
        ['title' => 'Comments', 'body' => 'Sea Pour Marine Enterprises does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views of Sea Pour Marine Enterprises. We reserve the right to monitor all Comments and to remove any that can be considered inappropriate, offensive, or in breach of these Terms.'],
        ['title' => 'Hyperlinking to our Content', 'body' => 'Government agencies, search engines, news organizations, and online directory distributors may link to our Website without prior written approval. We may consider other link requests from commonly known consumer and business information sources, associations, and educational institutions.'],
        ['title' => 'iFrames', 'body' => 'Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.'],
        ['title' => 'Content Liability', 'body' => 'We shall not be held responsible for any content that appears on your Website. You agree to protect and defend us against all claims arising from your Website. No links should appear that may be interpreted as libelous, obscene, or criminal.'],
        ['title' => 'Reservation of Rights', 'body' => 'We reserve the right to request that you remove all links or any particular link to our Website. We also reserve the right to amend these terms and conditions and its linking policy at any time.'],
        ['title' => 'Disclaimer', 'body' => 'To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website. Nothing in this disclaimer will limit liability for death or personal injury, fraud, or fraudulent misrepresentation.'],
    ];
@endphp

<div>
    <section class="bg-slate-950 py-14 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(34,211,238,0.12),transparent_60%)]"></div>
        <div class="relative mx-auto max-w-4xl px-4">
            <p class="text-xs font-semibold uppercase tracking-[0.3em] text-cyan-400">Legal</p>
            <h1 class="mt-4 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Terms &amp; Conditions</h1>
            <p class="mt-4 text-sm text-slate-400">Sea Pour Marine Enterprises &nbsp;·&nbsp; seapourmarineenterprises.com</p>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto max-w-4xl px-4">
            <div class="mb-10 rounded-2xl bg-cyan-50 border border-cyan-100 p-6 text-sm text-slate-700 leading-relaxed">
                <p class="font-semibold text-slate-900 mb-2">Welcome to Sea Pour Marine Enterprises!</p>
                <p>These terms and conditions outline the rules and regulations for the use of Sea Pour Marine Enterprises website, located at <a href="http://www.seapourmarineenterprises.com/" class="text-cyan-700 hover:underline">seapourmarineenterprises.com</a>.</p>
                <p class="mt-3">By accessing this website we assume you accept these terms and conditions. Do not continue to use our website if you do not agree to all of the terms stated on this page.</p>
            </div>

            <div class="space-y-8">
                @foreach($sections as $i => $section)
                    <div class="border-b border-slate-100 pb-8 last:border-0">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-8 h-8 rounded-full bg-cyan-600 text-white text-xs font-bold flex items-center justify-center mt-0.5">
                                {{ $i + 1 }}
                            </div>
                            <div>
                                <h2 class="text-base font-semibold text-slate-900 mb-2">{{ $section['title'] }}</h2>
                                <p class="text-sm text-slate-600 leading-relaxed">{{ $section['body'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 rounded-2xl bg-slate-50 border border-slate-200 p-6 text-sm text-slate-700">
                <p class="font-semibold text-slate-900 mb-1">Questions about these Terms?</p>
                <p>If you have any questions, please <a href="{{ route('contact') }}" class="text-cyan-600 font-semibold hover:underline">contact us</a>.</p>
            </div>
        </div>
    </section>
</div>