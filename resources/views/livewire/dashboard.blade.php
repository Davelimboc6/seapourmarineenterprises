@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<section
    id="hero"
    class="hero-section relative bg-cover bg-center bg-no-repeat min-h-screen"
    style="background-image: url('/images/speedboat.jpg');"
>
    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/90 via-slate-950/80 to-blue-950/90"></div>

    <div
        id="hero-inner"
        class="relative mx-auto flex  max-w-6xl flex-col items-start gap-8
               px-4 py-12 sm:py-16"
        x-data="businessHours()"
        x-init="init()"
    >
        <div class="w-full max-w-2xl space-y-6">
            <p class="hero-kicker text-[0.7rem] font-semibold uppercase tracking-[0.2em] text-cyan-400 sm:text-xs">
                Marine Tools and Equipment
            </p>

            <h1 class="hero-title text-3xl font-bold tracking-tight text-slate-50
                       sm:text-4xl
                       md:text-5xl
                       lg:text-6xl">
                Your Trusted Marine Supply Partner in Navotas
            </h1>

            <p class="hero-subtitle max-w-xl text-sm text-slate-300
                       sm:text-base
                       md:text-lg">
                High-quality marine parts, safety equipment, and vessel supplies — ready for pickup or fast delivery across Metro Manila.
            </p>

            {{-- Business info block --}}
            <div class="hero-info mt-6 grid gap-4 text-sm text-slate-200 grid-cols-1 sm:grid-cols-2">
                {{-- Location --}}
                <div class="flex items-start gap-3">
                    <div class="mt-1 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-900/70 text-cyan-400">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                            Location
                        </p>
                        <p class="text-sm text-slate-100">
                            MW2X+WM4, Navotas, Metro Manila, Philippines
                        </p>
                    </div>
                </div>

                {{-- Business hours with floating, real-time dropdown --}}
                <div class="flex items-start gap-3 relative">
                    <div class="mt-1 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-900/70 text-cyan-400">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="w-full">
                        <button
                            type="button"
                            class="flex w-full items-center justify-between rounded-md border border-slate-700 bg-slate-900/60 px-3 py-2 text-left text-sm text-slate-100 hover:border-cyan-400 hover:bg-slate-900/80"
                            @click="open = !open"
                        >
                            <span class="flex-1 min-w-0">
                                <span class="block text-xs font-semibold uppercase tracking-wide text-slate-400">
                                    Business hours
                                </span>
                                <span class="mt-0.5 block text-xs sm:text-sm truncate">
                                   <span x-text="todayLabel"></span>

<span x-show="todayHours">
    · <span x-text="todayHours"></span>
</span>

·
<span

                                        class="font-semibold"
                                        :class="isOpen ? 'text-emerald-400' : 'text-rose-400'"
                                        x-text="isOpen ? 'Open' : 'Closed'"
                                    ></span>
                                </span>
                            </span>
                            <i :class="open ? 'fa-solid fa-chevron-up' : 'fa-solid fa-chevron-down'" class="ml-2 text-xs text-slate-400 flex-shrink-0"></i>
                        </button>

                        <!-- Floating panel -->
                        <div
                            x-show="open"
                            x-transition
                            class="absolute left-11 top-full z-20 mt-2 w-64 rounded-md border border-slate-800 bg-slate-900/95 text-xs text-slate-200 shadow-2xl backdrop-blur
                                   sm:left-10"
                        >
                            <ul class="divide-y divide-slate-800">
                                <template x-for="(day, index) in days" :key="index">
                                    <li
                                        class="flex items-center justify-between px-3 py-2"
                                        :class="index === todayIndex ? 'bg-slate-800/70' : ''"
                                    >
                                        <span x-text="day.label"></span>
                                        <span class="text-right" x-text="day.display"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Contact --}}
                <div class="flex items-start gap-3">
                    <div class="mt-1 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full bg-slate-900/70 text-cyan-400">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                            Contact
                        </p>
                        <p class="text-sm text-slate-100">
                            +63 908 280 8111
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-gradient-to-b from-slate-50 to-white py-14 sm:py-20">
    <div class="mx-auto max-w-6xl px-4 text-center">

        <!-- Section Header -->
        <span class="inline-block text-xs font-semibold tracking-[0.3em] text-sky-600 uppercase">
            What we offer
        </span>

        <h2 class="mt-3 text-2xl font-bold text-slate-900 sm:text-3xl md:text-4xl">
            Premier Marine Safety Solutions
        </h2>

        <p class="mt-4 mx-auto max-w-3xl text-sm text-slate-600 sm:text-base">
            Trusted marine safety and industrial products designed to protect lives, vessels, and the environment.
        </p>

        <!-- Product Grid -->
        <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Card -->
            <div class="group relative overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/lifesavingequipments.jpg') }}"
                         alt="Life-saving appliances"
                         class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-4 text-xs font-semibold text-white">
                        Life-saving Equipment
                    </span>
                </div>

                <div class="p-6 text-left">
                    <h3 class="text-lg font-semibold text-slate-900">
                        Emergency Life-saving Appliances
                    </h3>

                    <p class="mt-2 text-sm text-slate-600">
                        Life rafts, rescue boats, life jackets, and critical safety gear for shipboard emergencies.
                    </p>

                    <a href="/products?category=life-saving-appliances"
                       class="mt-5 inline-flex items-center text-sm font-medium text-sky-600 hover:text-sky-700">
                        View products
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card -->
            <div class="group relative overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/oilmaterials.jpg') }}"
                         alt="Oil spill response"
                         class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-4 text-xs font-semibold text-white">
                        Environmental Protection
                    </span>
                </div>

                <div class="p-6 text-left">
                    <h3 class="text-lg font-semibold text-slate-900">
                        Oil Spill Response Solutions
                    </h3>

                    <p class="mt-2 text-sm text-slate-600">
                        SOPEP kits, booms, skimmers, and dispersants for fast and effective spill containment.
                    </p>

                    <a href="/products?category=oil-spill-response"
                       class="mt-5 inline-flex items-center text-sm font-medium text-sky-600 hover:text-sky-700">
                        View products
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Card -->
            <div class="group relative overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-lg">

                <div class="relative h-48 overflow-hidden">
                    <img src="{{ asset('images/firequiments.jpg') }}"
                         alt="Fire fighting systems"
                         class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-4 text-xs font-semibold text-white">
                        Fire Safety Systems
                    </span>
                </div>

                <div class="p-6 text-left">
                    <h3 class="text-lg font-semibold text-slate-900">
                        Fire Detection & Fire-Fighting
                    </h3>

                    <p class="mt-2 text-sm text-slate-600">
                        Marine fire extinguishers, hoses, foam systems, monitors, and CO₂ solutions.
                    </p>

                    <a href="/products?category=fire-emergency"
                       class="mt-5 inline-flex items-center text-sm font-medium text-sky-600 hover:text-sky-700">
                        View products
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-14">
            <a href="/about-us"
               class="inline-flex items-center rounded-full bg-sky-600 px-7 py-3 text-sm font-semibold text-white shadow-md transition hover:bg-sky-700">
                Learn More About Us
            </a>
        </div>

    </div>
</section>


{{-- Accreditations section --}}
<section id="accreditations" class="bg-slate-950 py-12 sm:py-16 md:py-20">
    <div class="mx-auto max-w-6xl px-4">
        <div class="flex flex-col gap-8 md:flex-row md:items-start md:justify-between">
            {{-- Left text block --}}
            <div class="md:max-w-sm">
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-cyan-400">
                    Official accreditations
                </p>
                <h2 class="mt-3 text-2xl font-semibold tracking-tight text-slate-50 sm:text-3xl">
                    Trusted by Philippine
                    Maritime &amp; Government Agencies
                </h2>
                <p class="mt-4 text-sm text-slate-300 sm:text-base">
                    These accreditations confirm Seafour Marine’s compliance with Philippine
                    maritime regulations and public procurement standards.
                </p>
            </div>

            {{-- Right list --}}
            <div class="mt-4 flex-1 space-y-6 border-l border-slate-800 pl-4 md:mt-0 md:space-y-7">
                {{-- MARINA --}}
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-start">
                    <div class="flex-shrink-0 flex items-center justify-center">
                        <img
                            src="{{ asset('images/maritime-industry-authority-philippines-logo.webp') }}"
                            alt="Maritime Industry Authority logo"
                            class="h-20 w-20 object-contain"
                        >
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                            Maritime Industry Authority (MARINA)
                        </p>
                        <p class="mt-1 text-sm text-slate-200">
                            The Maritime Industry Authority is the Philippine government agency under the Department of Transportation responsible for integrating the development, promotion, and regulation of the maritime industry.
                        </p>
                    </div>
                </div>

                {{-- Philippine Coast Guard --}}
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-start">
                    <div class="flex-shrink-0 flex items-center justify-center">
                        <img
                            src="{{ asset('images/philippine-coast-guard-logo.png') }}"
                            alt="Philippine Coast Guard logo"
                            class="h-20 w-20 object-contain"
                        >
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                            Philippine Coast Guard (PCG)
                        </p>
                        <p class="mt-1 text-sm text-slate-200">
                            The Philippine Coast Guard is the country’s third armed uniformed service, tasked with law enforcement in Philippine waters, maritime security, safeguarding life and property at sea, and protecting the marine environment.
                        </p>
                        <p class="mt-1 text-sm text-slate-200">
                            It maintains nationwide coverage with multiple districts, stations, and sub‑stations across the archipelago.
                        </p>
                    </div>
                </div>

                {{-- PhilGEPS --}}
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-start">
                    <div class="flex-shrink-0 flex items-center justify-center">
                        <img
                            src="{{ asset('images/PhilGepslogo.png') }}"
                            alt="PhilGEPS logo"
                            class="h-20 w-20 object-contain"
                        >
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">
                            PhilGEPS / RA 9184
                        </p>
                        <p class="mt-1 text-sm text-slate-200">
                            Under the Government Procurement Reform Act (Republic Act No. 9184), the Philippine Government Electronic Procurement System (PhilGEPS) supports transparent, competitive, and efficient procurement of projects, goods, and consulting services.
                        </p>
                        <p class="mt-1 text-sm text-slate-200">
                            Registration in PhilGEPS allows participation in national and local government bids for marine and industrial supplies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<<section
    x-data="{
        products: [
            {
                key: 'pe_pipe_floater',
                slug: 'pe-pipe-floater',
                name: 'PE Pipe Floater',
                image: '{{ asset('images/pepipefloater.jpg') }}',
                description: 'Made of high-density polyethylene with excellent toughness, filled with high-strength polyurethane for reliable buoyancy and impact resistance.',
                material: 'HDPE shell, PU foam core',
                application: 'Dredging pipe flotation',
                benefit: 'High impact resistance',
                note: 'Ideal for offshore and nearshore dredging lines.'
            },
            {
                key: 'hdpe_dredging_pipe',
                slug: 'hdpe-dredging-pipe',
                name: 'HDPE Dredging Pipe',
                image: '{{ asset('images/HDPE.avif') }}',
                description: 'One-piece high molecular polyethylene pipe with high rigidity and toughness, low flow resistance, and strong abrasion resistance for long service life.',
                material: 'High molecular HDPE',
                application: 'Slurry and sand transport lines',
                benefit: 'Low flow resistance, long service life',
                note: 'Recommended for slurry and sand transport lines.'
            },
            {
                key: 'oil_spill_boom',
                slug: 'oil-spill-boom',
                name: 'Oil Spill Boom (Solid Type)',
                image: '{{ asset('images/oil-spill-boom-solid.png') }}',
                description: 'High-buoyancy, UV-resistant solid float boom for fast deployment and strong oil containment, with ASTM universal connectors for secure extensions.',
                material: 'Solid float, oil-resistant fabric',
                application: 'Ports, terminals, coastal response',
                benefit: 'Fast deployment, strong containment',
                note: 'Suitable for ports, terminals, and coastal response.'
            },
            {
                key: 'siltation_boom',
                slug: 'siltation-boom',
                name: 'Siltation Boom',
                image: '{{ asset('images/siltation-boom.png') }}',
                description: 'Used to contain suspended silt and protect nearby waters and marine life, commonly required by the Philippine Coast Guard and DENR for dredging projects.',
                material: 'Geotextile skirt, flotation section',
                application: 'Dredging and construction sites',
                benefit: 'Controls turbidity and silt spread',
                note: 'Helps meet environmental compliance on site.'
            },
            {
                key: 'oil_containment_boom',
                slug: 'oil-containment-boom',
                name: 'Oil Containment Boom',
                image: '{{ asset('images/oil-containment-boom.png') }}',
                description: 'A temporary floating barrier used to contain oil spills on water and reduce the risk of polluting nearby shorelines and sensitive marine areas.',
                material: 'Buoyant float + skirt barrier',
                application: 'Open water oil spill containment',
                benefit: 'Concentrates oil for easier recovery',
                note: 'Concentrates spilled oil to make recovery and cleanup operations easier and more efficient.'
            },
        ],
        activeIndex: 0,
        get active() {
            return this.products[this.activeIndex];
        },
        get list() {
            return this.products.filter((_, index) => index !== this.activeIndex);
        },
        setActiveByKey(key) {
            const newIndex = this.products.findIndex(p => p.key === key);
            if (newIndex !== -1) this.activeIndex = newIndex;
        }
    }"
    class="bg-slate-50 py-12 sm:py-16 md:py-20"
>
    <div class="mx-auto max-w-6xl px-4">

        {{-- Header --}}
        <div class="flex items-center justify-between gap-4 flex-wrap">
            <div>
                <h2 class="text-2xl font-semibold tracking-tight text-slate-900 sm:text-3xl md:text-4xl">
                    Marine Safety &amp; Dredging Products
                </h2>
                <p class="mt-3 text-sm text-slate-600 sm:text-base max-w-xl">
                    Proven marine-grade solutions for dredging, containment, and environmental protection.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a
                    href="{{ route('products') }}"
                    class="inline-flex items-center rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs font-medium text-slate-700 shadow-sm hover:bg-slate-50 transition"
                >
                    All products
                </a>
            </div>
        </div>

        <div class="mt-10 grid gap-8 lg:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-start">

            {{-- ── DESKTOP: Large active product view ── --}}
            <article class="hidden lg:block overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200 border border-slate-100">
                <div class="relative">
                    <div class="aspect-[16/10] w-full overflow-hidden bg-slate-100">
                        <img
                            :src="active.image"
                            :alt="active.name"
                            class="h-full w-full object-cover transition duration-300"
                        >
                    </div>
                    <span class="absolute left-4 top-4 rounded-full bg-emerald-600/90 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">
                        Featured
                    </span>
                </div>

                <div class="p-6">
                    <h3 class="text-base font-semibold text-slate-900" x-text="active.name"></h3>
                    <p class="mt-2 text-sm text-slate-600" x-text="active.description"></p>

                    <dl class="mt-4 grid gap-3 text-xs text-slate-600 sm:grid-cols-3">
                        <div>
                            <dt class="font-medium text-slate-900">Material</dt>
                            <dd x-text="active.material"></dd>
                        </div>
                        <div>
                            <dt class="font-medium text-slate-900">Application</dt>
                            <dd x-text="active.application"></dd>
                        </div>
                        <div>
                            <dt class="font-medium text-slate-900">Key benefit</dt>
                            <dd x-text="active.benefit"></dd>
                        </div>
                    </dl>

                    <div class="mt-6 flex flex-wrap items-center justify-between gap-3">
                        <p class="text-xs text-slate-500" x-text="active.note"></p>
                        <a
                            :href="'{{ url('/products') }}/' + active.slug"
                            class="inline-flex items-center rounded-full bg-sky-600 px-4 py-1.5 text-xs font-medium text-white shadow-sm hover:bg-sky-700 transition"
                        >
                            Read more about this product
                        </a>
                    </div>
                </div>
            </article>

            {{-- ── Right column: LIST ── --}}
            <div class="space-y-4 w-full">

                {{-- MOBILE: show all products --}}
                <div class="space-y-4 lg:hidden">
                    <template x-for="product in products" :key="'mobile-' + product.key">
                        <article class="flex flex-col sm:flex-row gap-4 overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200 border border-slate-100">
                            <div class="w-full sm:w-32 shrink-0 overflow-hidden bg-slate-100">
                                <img
                                    :src="product.image"
                                    :alt="product.name"
                                    class="h-full w-full object-cover"
                                >
                            </div>
                            <div class="flex-1 p-4">
                                <h3 class="text-sm font-semibold text-slate-900" x-text="product.name"></h3>
                                <p class="mt-1 text-xs text-slate-600" x-text="product.description"></p>

                                <div class="mt-3 grid gap-2 text-[11px] text-slate-600 sm:grid-cols-3">
                                    <div>
                                        <span class="font-medium text-slate-900">Material: </span>
                                        <span x-text="product.material"></span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-slate-900">Application: </span>
                                        <span x-text="product.application"></span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-slate-900">Key benefit: </span>
                                        <span x-text="product.benefit"></span>
                                    </div>
                                </div>

                                <p class="mt-2 text-[11px] font-medium text-sky-700" x-text="product.note"></p>

                                <div class="mt-3">
                                    <a
                                        :href="'{{ url('/products') }}/' + product.slug"
                                        class="inline-flex items-center rounded-full bg-sky-600 px-4 py-1.5 text-[11px] font-medium text-white shadow-sm hover:bg-sky-700 transition"
                                    >
                                        Read more about this product
                                    </a>
                                </div>
                            </div>
                        </article>
                    </template>
                </div>

                {{-- DESKTOP: list without active product --}}
                <div class="hidden lg:block space-y-4">
                    <template x-for="product in list" :key="'desktop-' + product.key">
                        <article
                            class="flex gap-4 overflow-hidden rounded-2xl bg-white shadow-sm shadow-slate-200 border border-slate-100 cursor-pointer hover:ring-2 hover:ring-sky-200 transition"
                            @click="setActiveByKey(product.key)"
                        >
                            <div class="w-32 shrink-0 overflow-hidden bg-slate-100">
                                <img
                                    :src="product.image"
                                    :alt="product.name"
                                    class="h-full w-full object-cover"
                                >
                            </div>
                            <div class="flex-1 p-4">
                                <h3 class="text-sm font-semibold text-slate-900" x-text="product.name"></h3>
                                <p class="mt-1 text-xs text-slate-600" x-text="product.description"></p>
                                <p class="mt-2 text-[11px] font-medium text-sky-700" x-text="product.note"></p>
                            </div>
                        </article>
                    </template>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
