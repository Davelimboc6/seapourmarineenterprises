<div 
    x-data="{ category: 'All' }"
    class="font-dm min-h-screen bg-slate-50"
>

  {{-- Wave Divider --}}
  <div class="-mt-px overflow-hidden text-slate-50">
    <svg viewBox="0 0 1440 48" class="w-full block" xmlns="http://www.w3.org/2000/svg">
      <path fill="currentColor" d="M0,32 C480,64 960,0 1440,32 L1440,48 L0,48 Z"/>
    </svg>
  </div>

  {{-- FILTERS --}}
  <div class="mx-auto max-w-7xl px-4 mt-4 mb-10">

    {{-- Search (Livewire stays) --}}
    <div class="relative mb-6 max-w-sm">
      <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"
           fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="11" cy="11" r="8"/>
        <path d="m21 21-4.35-4.35"/>
      </svg>

      <input
        wire:model.live.debounce.300ms="search"
        type="text"
        placeholder="Search products…"
        class="w-full pl-11 pr-4 py-3 rounded-2xl border border-slate-200 bg-white
               text-slate-800 placeholder-slate-400 text-sm
               focus:outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-100 transition"
      >
    </div>

    {{-- Category Pills (INSTANT) --}}
    <div class="flex gap-2 overflow-x-auto pb-2">
      @foreach($this->categories as $cat)
        <button
          @click="category = '{{ $cat }}'"
          :class="category === '{{ $cat }}'
            ? 'bg-cyan-600 text-white border-cyan-600 shadow-lg shadow-cyan-200'
            : 'bg-white text-slate-600 border-slate-200 hover:border-cyan-300 hover:text-cyan-700'"
          class="whitespace-nowrap px-5 py-2 rounded-full text-sm font-medium border transition-all duration-200"
        >
          {{ $cat }}
        </button>
      @endforeach
    </div>
  </div>

  {{-- PRODUCT GRID --}}
  <div class="mx-auto max-w-7xl px-4 pb-24">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

      @foreach($this->filteredProducts as $product)
        <article
          x-show="category === 'All' || category === '{{ $product->category->name ?? '' }}'"
          x-transition.opacity.duration.200ms
          wire:key="product-{{ $product->id }}"
          wire:click="goToProduct('{{ $product->slug }}')"
          class="group bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden cursor-pointer
                 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-cyan-100 hover:border-cyan-200
                 transition-all duration-300"
        >

          {{-- Image --}}
          <div class="relative h-52 bg-slate-100 overflow-hidden">
            <img
              src="{{ $product->image }}"
              alt="{{ $product->name }}"
              loading="lazy"
              class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
            >

            <div class="absolute top-3 left-3">
              <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest
                           bg-slate-900/50 backdrop-blur-sm text-cyan-300 border border-cyan-500/30">
                {{ $product->category->name ?? '' }}
              </span>
            </div>

            <div class="absolute inset-0 bg-gradient-to-t from-cyan-900/80 via-cyan-800/30 to-transparent
                        opacity-0 group-hover:opacity-100 transition-opacity duration-300
                        flex items-end justify-center pb-4">
            </div>
          </div>

          {{-- Info --}}
          <div class="p-4">
            <h3 class="font-playfair font-bold text-slate-900 leading-snug text-base mb-1 line-clamp-2">
              {{ $product->name }}
            </h3>

            <p class="text-xs text-slate-500 leading-relaxed line-clamp-2">
              {{ \Illuminate\Support\Str::limit(strip_tags($product->description ?? ''), 80) }}
            </p>
          </div>

          {{-- Bottom Accent --}}
          <div class="h-0.5 bg-gradient-to-r from-cyan-400 to-teal-500
                      scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left">
          </div>

        </article>
      @endforeach

    </div>

    {{-- No Products State --}}
    <div 
      x-show="$el.previousElementSibling.querySelectorAll('[x-show]').length &&
              [...$el.previousElementSibling.querySelectorAll('[x-show]')]
              .filter(el => el.offsetParent !== null).length === 0"
      class="text-center py-32 text-slate-400"
    >
      <svg class="mx-auto w-12 h-12 mb-4 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 20a8 8 0 100-16 8 8 0 000 16z"/>
      </svg>
      <p class="font-playfair text-xl">No products found</p>
      <p class="text-sm mt-1">Try adjusting your search or filter.</p>
    </div>

  </div>

</div>