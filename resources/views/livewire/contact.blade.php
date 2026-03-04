<div class="contact-root">

    {{-- HERO --}}
    <section class="bg-slate-950 py-14 sm:py-18 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(34,211,238,0.15),transparent_60%)]"></div>
        <div class="relative mx-auto max-w-6xl px-4">
            <div class="max-w-2xl">
                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-cyan-400">Contact us</p>
                <h1 class="mt-4 text-3xl font-semibold tracking-tight text-slate-50 sm:text-4xl">
                    Get in touch with Sea Pour Marine Enterprises
                </h1>
                <p class="mt-5 text-sm leading-relaxed text-slate-300 sm:text-base">
                    Sail with confidence and peace of mind, as we provide you with dependable marine safety and industrial products tailored to protect you on every journey.
                </p>
            </div>
        </div>
    </section>

    {{-- INFO + FORM --}}
    <section class="bg-white py-16">
        <div class="mx-auto max-w-6xl px-4">
            <div class="grid gap-12 lg:grid-cols-[0.95fr_1.05fr] items-start">

                {{-- LEFT: INFO --}}
                <div class="space-y-10">
                    <div>
                        <h2 class="text-xl font-semibold text-slate-900">Contact information</h2>
                        <div class="mt-6 space-y-5 text-sm text-slate-700">

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-transparent border-2 border-cyan-400 flex items-center justify-center text-cyan-600 text-2xl hover:border-cyan-600 transition-all duration-300">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Email address</p>
                                    <p class="mt-1">
                                        <a href="mailto:sea4marine@yahoo.com.ph" class="text-sky-700 hover:underline">sea4marine@yahoo.com.ph</a><br>
                                        <a href="mailto:calmajoseph@yahoo.com" class="text-sky-700 hover:underline">calmajoseph@yahoo.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-transparent border-2 border-cyan-400 flex items-center justify-center text-cyan-600 text-2xl hover:border-cyan-600 transition-all duration-300">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Telephone number</p>
                                    <p class="mt-1 text-slate-800">(02) 8373-3618</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-transparent border-2 border-cyan-400 flex items-center justify-center text-cyan-600 text-2xl hover:border-cyan-600 transition-all duration-300">
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Mobile numbers</p>
                                    <p class="mt-1 text-slate-800">
                                        0998-549-9980<br>0908-280-8111<br>0917-990-4217
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-transparent border-2 border-cyan-400 flex items-center justify-center text-cyan-600 text-2xl hover:border-cyan-600 transition-all duration-300">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Physical address</p>
                                    <p class="mt-1 text-slate-800">
                                        63 C4 Road, Brgy. Bagumbayan North, Navotas City,<br>
                                        Metro Manila, NCR, Philippines, 1485
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-transparent border-2 border-cyan-400 flex items-center justify-center text-cyan-600 text-2xl hover:border-cyan-600 transition-all duration-300">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Business hours</p>
                            <p class="mt-1 text-slate-800">
                                Monday – Friday: 8:00 AM – 5:00 PM<br>
                                Saturday &amp; Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>

                {{-- RIGHT: FORM --}}
                <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-lg">
                    <h3 class="text-xl font-semibold text-slate-900 mb-1">Send us a message</h3>
                    <p class="text-sm text-slate-600 mb-6">We usually reply within 24 hours.</p>

                    @if ($errors->any())
                        <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200">
                            @foreach ($errors->all() as $error)
                                <p class="text-sm text-red-800">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <form wire:submit.prevent="submit" class="space-y-6">

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="relative">
                                <input type="text" wire:model.defer="name" required placeholder=" "
                                    class="peer w-full border-b-2 border-slate-300 bg-transparent pt-6 pb-2 text-sm text-slate-900 focus:border-cyan-500 focus:outline-none @error('name') border-red-500 @enderror" />
                                <label class="absolute left-0 top-2 text-xs text-slate-500 transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs peer-focus:text-cyan-600">
                                    Full Name
                                </label>
                                @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                            </div>

                            <div class="relative">
                                <input type="email" wire:model.defer="email" required placeholder=" "
                                    class="peer w-full border-b-2 border-slate-300 bg-transparent pt-6 pb-2 text-sm text-slate-900 focus:border-cyan-500 focus:outline-none @error('email') border-red-500 @enderror" />
                                <label class="absolute left-0 top-2 text-xs text-slate-500 transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs peer-focus:text-cyan-600">
                                    Email Address
                                </label>
                                @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="relative">
                            <input type="text" wire:model.defer="subject" placeholder=" "
                                class="peer w-full border-b-2 border-slate-300 bg-transparent pt-6 pb-2 text-sm text-slate-900 focus:border-cyan-500 focus:outline-none @error('subject') border-red-500 @enderror" />
                            <label class="absolute left-0 top-2 text-xs text-slate-500 transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs peer-focus:text-cyan-600">
                                Subject
                            </label>
                            @error('subject') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>

                        <div class="relative">
                            <input type="text" wire:model="message" required placeholder=" "
                                class="peer w-full border-b-2 border-slate-300 bg-transparent pt-6 pb-2 text-sm text-slate-900 focus:border-cyan-500 focus:outline-none @error('message') border-red-500 @enderror" />
                            <label class="absolute left-0 top-2 text-xs text-slate-500 transition-all peer-placeholder-shown:top-6 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs peer-focus:text-cyan-600">
                                Your Message
                            </label>
                            @error('message') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                        </div>

                        {{-- Terms & Conditions Checkbox --}}
                        <div class="space-y-1">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center h-5 mt-0.5">
                                    <input
                                       id="agreed"
                                       type="checkbox"
                                       wire:model="agreed"
                                       class="w-4 h-4 rounded border-slate-300 text-cyan-600 focus:ring-cyan-500 focus:ring-2 cursor-pointer"
                                    >
                                </div>
                                <label for="agreed" class="text-sm text-slate-600 leading-relaxed cursor-pointer select-none">
                                    I have read and agree to the
                                    <a href="{{ route('terms') }}" target="_blank" class="text-cyan-600 font-semibold hover:underline">Terms &amp; Conditions</a>
                                    and
                                    <a href="{{ route('privacy') }}" target="_blank" class="text-cyan-600 font-semibold hover:underline">Privacy Policy</a>
                                    of Sea Pour Marine Enterprises.
                                </label>
                            </div>
                            @error('agreed')
                                <p class="text-xs text-red-500 pl-7">{{ $message }}</p>
                            @enderror
                        </div>

                    <button type="submit"
                            wire:loading.attr="disabled"
                            wire:target="submit"
                            :disabled="!$wire.agreed"
                            class="w-full rounded-xl bg-gradient-to-r from-cyan-500 to-sky-600 py-3 text-sm font-semibold text-white transition
                            hover:shadow-lg hover:shadow-cyan-500/30
                            disabled:opacity-40 disabled:cursor-not-allowed disabled:pointer-events-none">
                        <span wire:loading.remove>Send Message →</span>
                        <span wire:loading>Sending...</span>
                    </button>

                        @if($success)
                            <p class="mt-3 text-green-600 font-medium">Message sent successfully!</p>
                        @endif

                        @error('form')
                            <p class="mt-3 text-red-600 font-medium">{{ $message }}</p>
                        @enderror

                    </form>
                </div>

            </div>
        </div>
    </section>

    {{-- MAP --}}
    <section class="bg-white pb-16">
        <div class="mx-auto max-w-6xl px-4">
            <h2 class="text-lg font-semibold text-slate-900 mb-2">Visit our location</h2>
            <p class="text-sm text-slate-600 mb-5">
                Our office and warehouse are accessible from major roads and ports in Manila for faster coordination and delivery.
            </p>
            <div class="overflow-hidden rounded-2xl border border-slate-200 shadow-sm">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0646135944953!2d120.9492107!3d14.652273600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b5ac3cba6091%3A0x27e1d46775bc0cb3!2sSea%20Pour%20Marine%20Enterprises!5e0!3m2!1sen!2sph!4v1768396805282!5m2!1sen!2sph"
                    width="100%"
                    height="320"
                    loading="lazy"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

</div>