{{--
    Cookie Consent Banner
    Place in layouts/app.blade.php just before </body>:
        @include('components.cookie-banner')
--}}
<div
    x-data="{
        show: false,
        init() {
            if (!localStorage.getItem('seafour_cookie_consent')) {
                setTimeout(() => this.show = true, 800);
            }
        },
        accept() {
            localStorage.setItem('seafour_cookie_consent', 'accepted');
            this.show = false;
        },
        decline() {
            localStorage.setItem('seafour_cookie_consent', 'declined');
            this.show = false;
        }
    }"
    x-show="show"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4"
    x-cloak
    class="fixed bottom-0 left-0 right-0 z-50 p-4 sm:p-6"
>
    <div class="mx-auto max-w-4xl bg-slate-900 border border-slate-700 rounded-2xl shadow-2xl shadow-black/40 p-5 sm:p-6">
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5">

            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-lg">
                🍪
            </div>

            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-white mb-1">We use cookies</p>
                <p class="text-xs text-slate-400 leading-relaxed">
                    Sea Pour Marine Enterprises uses cookies to improve your browsing experience and analyze site traffic.
                    By clicking <strong class="text-slate-300">Accept All</strong>, you agree to our use of cookies as described in our
                    <a href="{{ route('privacy') }}" class="text-cyan-400 hover:text-cyan-300 underline underline-offset-2 transition">Privacy Policy</a>
                    and
                    <a href="{{ route('terms') }}" class="text-cyan-400 hover:text-cyan-300 underline underline-offset-2 transition">Terms &amp; Conditions</a>.
                </p>
            </div>

            <div class="flex items-center gap-3 flex-shrink-0 w-full sm:w-auto">
                <button @click="decline()"
                    class="flex-1 sm:flex-none px-4 py-2 rounded-xl text-xs font-semibold
                           text-slate-400 border border-slate-600
                           hover:border-slate-400 hover:text-slate-200 transition">
                    Decline
                </button>
                <button @click="accept()"
                    class="flex-1 sm:flex-none px-5 py-2 rounded-xl text-xs font-semibold
                           text-white bg-gradient-to-r from-cyan-500 to-sky-600
                           hover:shadow-lg hover:shadow-cyan-500/30 transition">
                    Accept All
                </button>
            </div>

        </div>
    </div>
</div>