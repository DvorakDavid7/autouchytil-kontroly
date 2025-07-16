<section class="bg-white py-16 mt-30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            {{-- Left Side: Text Content + Image (Mobile) --}}
            <div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-4">
                    Nechcete být na koupi ojetého vozu sami?
                </h1>

                {{-- Image on Mobile Only --}}
                <div class="block md:hidden mb-6">
                    <img 
                        src="{{ asset('images/hero_image.jpg') }}" 
                        alt="Hero Graphic" 
                        class="w-full max-w-md mx-auto"
                        style="background: none;"
                    >
                </div>

                <p class="text-lg text-gray-600 mb-6">
                    Rozumím, že koupě auta je velké rozhodnutí. Proto přijedu za vámi, auto odborně prověřím a vyjednám lepší cenu. Vždy jednám s respektem a lidským přístupem, aby pro vás byl celý proces co nejpříjemnější 
                </p>

                <a 
                    class="inline-block bg-[var(--primary-red)] text-white px-6 py-3 rounded-md text-base font-medium duration-300 hover:-translate-y-1 hover:scale-110 uppercase"
                    href="#reservation" 
                    >
                    Rezervovat kontrolu!
                </a>
            </div>

            {{-- Right Side: Image (Desktop Only) --}}
            <div class="hidden md:flex justify-end">
                <img 
                    src="{{ asset('images/hero_image.jpg') }}" 
                    alt="Hero Graphic" 
                    class="w-full max-w-md"
                    style="background: none;"
                >
            </div>
        </div>
    </div>
</section>