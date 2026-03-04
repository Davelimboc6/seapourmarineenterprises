<div>
{{-- Fonts & custom styles are loaded via resources/css/products.css --}}

<div class="font-dm min-h-screen bg-slate-50">

  {{-- ══════════════════ TOP NAV BAR ══════════════════ --}}
  <div class="bg-gradient-to-r from-slate-900 to-slate-800 border-b border-slate-700/50 px-4 py-4">
    <div class="mx-auto max-w-7xl flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

      {{-- Back button — shown first on mobile for thumb reachability --}}
      <a href="{{ route('products') }}"
         class="flex items-center gap-1.5 px-4 py-2 rounded-xl text-xs font-semibold w-fit
                text-cyan-400 border border-cyan-700/50
                hover:bg-cyan-500/10 hover:border-cyan-400 transition sm:order-last">
        ← Back to Catalog
      </a>

      {{-- Breadcrumb --}}
      <nav class="flex items-center gap-2 text-xs text-slate-400 flex-wrap">
        <a href="{{ route('products') }}" class="hover:text-cyan-400 transition">Products</a>
        <span class="text-slate-600">›</span>
        <span class="text-slate-500">{{ $product->category->name ?? '' }}</span>
        <span class="text-slate-600">›</span>
        <span class="text-cyan-400 font-medium line-clamp-1">{{ $product->name }}</span>
      </nav>

    </div>
  </div>

  {{-- ══════════════════ PRODUCT CONTENT ══════════════════ --}}
  <div class="mx-auto max-w-7xl px-4 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-start">

      {{-- ──────────── LEFT: Gallery ──────────── --}}
      {{-- Alpine scope isolated here — no conflict with Livewire or PHP variables --}}
      <div class="lg:sticky lg:top-8 space-y-4"
           x-data="{ active: '{{ $product->image }}' }">

        {{-- Main image --}}
        <div>
          <img
            :src="active"
            alt="{{ $product->name }}"
            class="max-h-[400px] w-full object-contain transition-all duration-150"
          >
        </div>

        {{-- Thumbnails --}}
        @if($product->images && $product->images->count())
          <div class="grid grid-cols-4 gap-3">

            {{-- Primary image thumb — $primaryImg avoids conflict with Alpine 'active' --}}
            @php $primaryImg = $product->image; @endphp
            <button
              @click="active = '{{ $primaryImg }}'"
              :class="active === '{{ $primaryImg }}' ? 'border-cyan-500 shadow-md' : 'border-slate-100 hover:border-cyan-300'"
              class="bg-white rounded-xl p-2 border-2 transition-all duration-150 hover:scale-105"
            >
              <img src="{{ $primaryImg }}" class="w-full aspect-square object-contain">
            </button>

            {{-- Extra images — renamed loop var to $extraImg to avoid Alpine conflict --}}
            @foreach($product->images as $extraImg)
              @php $extraPath = $extraImg->image_path; @endphp
              <button
                @click="active = '{{ $extraPath }}'"
                :class="active === '{{ $extraPath }}' ? 'border-cyan-500 shadow-md' : 'border-slate-100 hover:border-cyan-300'"
                class="bg-white rounded-xl p-2 border-2 transition-all duration-150 hover:scale-105"
              >
                <img src="{{ $extraPath }}" class="w-full aspect-square object-contain">
              </button>
            @endforeach

          </div>
        @endif

        {{-- Trust badges --}}
        <div class="flex flex-wrap gap-2 pt-1">
          @foreach(['SOLAS Compliant','CCS Certified','Marine Grade'] as $badge)
            <span class="px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest
                         bg-cyan-50 text-cyan-700 border border-cyan-200">
              ✓ {{ $badge }}
            </span>
          @endforeach
        </div>

      </div>{{-- end Alpine gallery scope --}}

      {{-- ──────────── RIGHT: Details ──────────── --}}
      <div class="space-y-8">

        {{-- Category label --}}
        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full
                     text-xs font-bold uppercase tracking-widest
                     bg-cyan-100 text-cyan-700 border border-cyan-200">
          <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
          </svg>
          {{ $product->category->name ?? 'Marine Equipment' }}
        </span>

        {{-- Product name --}}
        <div>
          <h1 class="font-playfair text-3xl sm:text-4xl font-bold text-slate-900 leading-tight">
            {{ $product->name }}
          </h1>
          <div class="mt-4 flex items-center gap-2">
            <div class="h-0.5 w-16 rounded bg-cyan-500"></div>
            <div class="h-0.5 w-4  rounded bg-cyan-300"></div>
            <div class="h-0.5 w-2  rounded bg-cyan-100"></div>
          </div>
        </div>

        {{-- Description --}}
        <div>
          <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-cyan-600 mb-4">
            Product Details
          </p>

          @if($product->description)
            <div class="prose-marine">
              {!! $product->description !!}
            </div>
          @else
            <p class="text-slate-400 italic text-sm">No description available for this product.</p>
          @endif
        </div>

        {{-- CTA --}}
        <div class="pt-4 border-t border-slate-100 flex flex-wrap gap-3">
          <a
            href="{{ route('contact') }}?product={{ urlencode($product->name) }}"
            class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl text-sm font-semibold text-white
                   bg-gradient-to-r from-cyan-600 to-cyan-700
                   shadow-lg shadow-cyan-200 hover:shadow-cyan-300
                   hover:-translate-y-0.5 transition-all duration-200"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            Send Inquiry
          </a>

          <a
            href="{{ route('products') }}"
            class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl text-sm font-semibold
                   text-slate-600 border border-slate-200
                   hover:border-cyan-400 hover:text-cyan-700 transition-all duration-200"
          >
            ← All Products
          </a>
        </div>

      </div>
    </div>
  </div>

</div>
</div>