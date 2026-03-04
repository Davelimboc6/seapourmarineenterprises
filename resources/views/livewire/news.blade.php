<div>
@php
    // Ensure it's a collection so slice() works
    $newsItems = collect($newsItems);
@endphp

<section class="bg-slate-50 py-16">
    <div class="mx-auto max-w-7xl px-4">

        {{-- Header --}}
        <header class="mb-14 max-w-3xl">
            <p class="text-xs font-semibold uppercase tracking-[0.35em] text-cyan-600">
                News & Insights
            </p>
            <h1 class="mt-3 text-3xl sm:text-4xl font-bold tracking-tight text-slate-900">
                Latest incidents, insights, and marine safety updates
            </h1>
            <p class="mt-4 text-slate-600 text-base leading-relaxed">
                Field stories, incident responses, and practical guides from Sea Pour Marine Enterprises.
            </p>
        </header>

        {{-- Featured + Side --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- Featured --}}
            @if($newsItems->count())
            @php $featured = $newsItems->first(); @endphp
            <article class="lg:col-span-2 group">
                <div class="relative overflow-hidden rounded-3xl shadow-lg">
                    <img src="{{ $featured['image'] }}"
                         alt="{{ $featured['title'] }}"
                         class="h-[360px] w-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 p-6">
                        <p class="text-xs uppercase tracking-wider text-cyan-200">
                            {{ $featured['date'] }}
                        </p>
                        <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-white leading-tight">
                            <a href="{{ route('news.show', $featured['slug']) }}">
                                {{ $featured['title'] }}
                            </a>
                        </h2>
                        <p class="mt-2 text-slate-200 max-w-xl text-sm">
                            {{ $featured['excerpt'] }}
                        </p>
                    </div>
                </div>
            </article>
            @endif

            {{-- Side list --}}
            <div class="flex flex-col gap-6">
                @foreach($newsItems->slice(1, 3) as $item)
                <article class="flex gap-4 items-start">
                    <img src="{{ $item['image'] }}"
                         class="w-24 h-24 rounded-xl object-cover flex-shrink-0">
                    <div>
                        <p class="text-[11px] uppercase tracking-wide text-slate-500">
                            {{ $item['date'] }}
                        </p>
                        <h3 class="text-sm font-semibold leading-snug text-slate-900">
                            <a href="{{ route('news.show', $item['slug']) }}"
                               class="hover:text-cyan-700">
                                {{ $item['title'] }}
                            </a>
                        </h3>
                        <p class="text-xs text-slate-600 line-clamp-2 mt-1">
                            {{ $item['excerpt'] }}
                        </p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>

        

       {{-- More news grid --}}
<div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($newsItems->slice(4) as $item)
    <article class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:shadow-md transition">

        {{-- Image wrapper --}}
        <div class="relative h-70 w-full group">
            <img src="{{ $item['image'] }}"
                 alt="{{ $item['title'] }}"
                 class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105">

            {{-- Dark gradient overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

            {{-- Content overlay --}}
            <div class="absolute inset-0 flex flex-col justify-end p-5 text-white">
                <p class="text-[11px] uppercase tracking-wide text-white/80">
                    {{ $item['date'] }}
                </p>

                <h3 class="mt-1 font-semibold text-base leading-snug">
                    <a href="{{ route('news.show', $item['slug']) }}"
                       class="hover:underline">
                        {{ $item['title'] }}
                    </a>
                </h3>

                <p class="mt-2 text-sm text-white/90 line-clamp-3">
                    {{ $item['excerpt'] }}
                </p>

                <a href="{{ route('news.show', $item['slug']) }}"
                   class="inline-block mt-3 text-sm font-semibold text-cyan-300 hover:text-cyan-200">
                    Read more →
                </a>
            </div>

        </div>
    </article>
    @endforeach
</div>


    </div>
</section>
</div>
