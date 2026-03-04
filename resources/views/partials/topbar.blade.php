<header
    class="relative z-30 w-full border-b border-slate-800 bg-slate-950/80 backdrop-blur"
    x-data="{ open: false }"
>
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3 sm:py-4">
        <!-- Left: Brand + Logo -->
        <div class="flex items-center gap-2">
            <img
                src="/images/seapourmarinelogo.png"
                alt="Seapour Marine Enterprise logo"
                class="h-15 w-15 object-contain"
            />
            <div class="text-base font-semibold tracking-tight sm:text-lg font-sans uppercase text-cyan-400 leading-tight">
                <span class="text-white">SEA POUR MARINE</span>
                <span class="block">ENTERPRISES</span>
            </div>
        </div>

        <!-- Desktop nav -->
        <nav class="hidden items-center gap-4 text-sm text-slate-300 md:flex">
            <a href="{{ route('home') }}" class="hover:text-cyan-400">HOME</a>
            <a href="{{ route('products') }}" class="hover:text-cyan-400">PRODUCTS</a>
            <a href="{{ route('about.us') }}" class="hover:text-cyan-400">ABOUT US</a>
            <a href="{{ route('news') }}" class="hover:text-cyan-400">NEWS</a>
            <a href="{{ route('contact') }}" class="hover:text-cyan-400">CONTACT US</a>
        </nav>

        <!-- Mobile hamburger -->
        <button
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-slate-200 hover:bg-slate-800 hover:text-white md:hidden"
            @click="open = !open"
            aria-label="Toggle navigation"
        >
            <svg
                x-show="!open"
                class="h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg
                x-show="open"
                class="h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile menu (floating overlay) -->
    <nav
         x-cloak
    x-show="open"
    x-transition
    class="absolute left-0 right-0 top-full mx-auto max-w-6xl px-4 pt-1 md:hidden"
    >
        <div class="rounded-lg border border-slate-800 bg-slate-950/95 text-sm text-slate-300 shadow-2xl backdrop-blur">
            <div class="space-y-1 px-3 py-3">
                <a href="{{ route('home') }}" class="block rounded-md px-2 py-2 hover:bg-slate-800 hover:text-cyan-400">HOME</a>
                <a href="{{ route('products') }}" class="block rounded-md px-2 py-2 hover:bg-slate-800 hover:text-cyan-400">PRODUCTS</a>
                <a href="{{ route('about.us') }}" class="block rounded-md px-2 py-2 hover:bg-slate-800 hover:text-cyan-400">ABOUT US</a>
                <a href="{{ route('news') }}" class="block rounded-md px-2 py-2 hover:bg-slate-800 hover:text-cyan-400">NEWS</a>
                <a href="{{ route('contact') }}" class="block rounded-md px-2 py-2 hover:bg-slate-800 hover:text-cyan-400">CONTACT US</a>
            </div>
        </div>
    </nav>
</header>
