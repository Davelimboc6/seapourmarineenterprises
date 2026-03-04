<div class="bg-slate-50 py-12">
    <div class="mx-auto max-w-5xl px-4 lg:px-0">

        {{-- Back link --}}
        <div class="mb-8">
            <a href="{{ route('news') }}"
               class="inline-flex items-center text-sm font-medium text-cyan-700 hover:text-cyan-900 transition">
                <span class="mr-2">&larr;</span> Back to News
            </a>
        </div>

        {{-- Header --}}
        <header class="text-center mb-12">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-cyan-500">News & Insights</p>
            <h1 class="mt-3 text-4xl sm:text-5xl font-bold tracking-tight text-slate-900">
                {{ $news['title'] }}
            </h1>
            @if(!empty($news['date']))
                <p class="mt-2 text-sm text-slate-500">
                    {{ $news['date'] }}
                </p>
            @endif
        </header>

        {{-- Hero image --}}
        @if(!empty($news['image']))
            <div class="mb-10 overflow-hidden rounded-2xl bg-slate-200 group">
                <img
                    src="{{ $news['image'] }}"
                    alt="{{ $news['title'] }}"
                    class="h-72 w-full object-cover object-center sm:h-96 transition-transform duration-500 group-hover:scale-105"
                >
            </div>
        @endif

        {{-- Main Content --}}
        <div class="prose prose-slate max-w-full mx-auto text-slate-700 sm:text-lg leading-relaxed">
            {!! Str::contains($news['content'], '<') 
                ? $news['content'] 
                : nl2br(e($news['content'])) !!}

        </div>

        {{-- External links / sources --}}
        @if(!empty($news['external_links']))
            <div class="mt-12 border-t border-slate-200 pt-6">
                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-slate-500 mb-3">
                    Sources & References
                </h2>
                <ul class="space-y-2">
                    @foreach($news['external_links'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="inline-flex items-center text-cyan-700 hover:text-cyan-900 transition">
                                <span class="mr-2 h-2 w-2 rounded-full bg-cyan-600"></span>
                                {{ $link['label'] ?? $link['url'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Optional: Related articles --}}
        @if(!empty($relatedNews))
            <div class="mt-16 border-t border-slate-200 pt-10">
                <h3 class="text-xl font-semibold text-slate-900 mb-6">Related Articles</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    @foreach($relatedNews as $rel)
                        <a href="{{ route('news.show', $rel['slug']) }}" class="group block overflow-hidden rounded-xl hover:shadow-lg transition">
                            <div class="h-40 w-full overflow-hidden mb-3">
                                <img src="{{ $rel['image'] }}" alt="{{ $rel['title'] }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            </div>
                            <h4 class="text-cyan-700 font-semibold text-lg group-hover:text-cyan-900 transition">
                                {{ $rel['title'] }}
                            </h4>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</div>
