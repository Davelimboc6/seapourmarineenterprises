{{-- Footer --}}
<footer class="bg-slate-950 text-slate-200">
    <div class="mx-auto max-w-6xl px-4 py-10 sm:py-12">
        <div class="grid gap-8 md:grid-cols-3">
            {{-- Sitemap --}}
            <div>
                <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-400">
                    Sitemap
                </h3>
                <ul class="mt-4 space-y-2 text-sm">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-cyan-400">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}" class="hover:text-cyan-400">
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about.us') }}" class="hover:text-cyan-400">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="hover:text-cyan-400">
                            News
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"  class="hover:text-cyan-400">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}" class="hover:text-cyan-400">
                            Private Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}" class="hover:text-cyan-400">
                            Terms and Conditions
                        </a>
                    </li>
                </ul>
            </div>
{{-- Contact Us --}}
<div>
    <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-400">
        Contact Us
    </h3>
    <div class="mt-4 space-y-2 text-sm">
        <p class="flex items-center gap-2">
            <i class="fa-solid fa-phone text-cyan-400 w-4"></i>
            <span>(02) 8373-3618</span>
        </p>
        <p class="flex items-center gap-2">
            <i class="fa-solid fa-mobile-screen-button text-cyan-400 w-4"></i>
            <span>0908-280-8111</span>
        </p>
        <p class="flex items-center gap-2">
            <i class="fa-solid fa-mobile-screen-button text-cyan-400 w-4"></i>
            <span>0998-549-9980</span>
        </p>
        <p class="flex items-center gap-2">
            <i class="fa-solid fa-mobile-screen-button text-cyan-400 w-4"></i>
            <span>0917-990-4217</span>
        </p>
        <p class="mt-3 flex items-center gap-2">
            <i class="fa-solid fa-envelope text-cyan-400 w-4"></i>
            <a href="mailto:sea4marine@yahoo.com.ph" class="hover:text-cyan-400">
                sea4marine@yahoo.com.ph
            </a>
        </p>
        <p class="flex items-center gap-2">
            <i class="fa-solid fa-envelope text-cyan-400 w-4"></i>
            <a href="mailto:calmajoseph@yahoo.com" class="hover:text-cyan-400">
                calmajoseph@yahoo.com
            </a>
        </p>
    </div>
</div>

{{-- Visit / Connect --}}
<div>
    <h3 class="text-sm font-semibold uppercase tracking-wide text-slate-400">
        Visit Us
    </h3>
    <p class="mt-4 text-sm flex items-start gap-2">
        <i class="fa-solid fa-location-dot text-cyan-400 w-4 mt-0.5"></i>
        <span>
            63 C4 Road, Brgy. Bagumbayan North, Navotas City, Metro Manila, NCR, Philippines, 1485
        </span>
    </p>

    <h3 class="mt-6 text-sm font-semibold uppercase tracking-wide text-slate-400">
        Connect With Us
    </h3>
    <div class="mt-3 flex items-center gap-4 text-lg">
        <a
            href="https://www.facebook.com/profile.php?id=100090146035459"
            class="text-slate-300 hover:text-cyan-400"
            aria-label="Facebook"
            target="_blank"
            rel="noopener noreferrer"
        >
            <img
                src="/images/facebook.png"
                alt="Facebook"
                class="h-10 w-10"
            >
        </a>
        <a
            href="https://maps.app.goo.gl/MGgfAqt8AbobkYRr7"
            class="text-slate-300 hover:text-cyan-400"
            aria-label="Google Maps"
            target="_blank"
            rel="noopener noreferrer"
        >
           <img
                src="/images/google.png"
                alt="Google"
                class="h-10 w-10"
            >
        </a>
        <a
            href="https://www.linkedin.com/in/joseph-calma-2a64332ab/"
            class="text-slate-300 hover:text-cyan-400"
            aria-label="LinkedIn"
            target="_blank"
            rel="noopener noreferrer"
        >
             <img
                src="/images/linkedin.png"
                alt="LinkedIn"
                class="h-10 w-10"
            >
        </a>
    </div>
  </div>
</div>
        {{-- Bottom bar --}}
        <div class="mt-8 border-t border-slate-800 pt-4 text-xs text-slate-400">
            <p class="text-center">
                Copyright © 2018 - 2024
                <span class="font-medium text-slate-200">Sea Pour Marine Enterprises</span>.
                All Rights Reserved.
            </p>
        </div>
    </div>
</footer>