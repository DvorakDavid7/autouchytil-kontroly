<x-layout>
    {{-- Hero section --}}
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
                        href="#get-started" 
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

    <section class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            {{-- Section Heading --}}
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Jak to funguje?</h2>
            <p class="text-lg text-gray-600 mb-12">Podívejte se na krátké video a zjistěte, jak vám mohu pomoci s nákupem ojetého vozu.</p>


            {{-- Video Embed --}}
            <div class="flex justify-center mb-12">
                <img 
                    src="{{ asset('images/video_preview.png') }}" 
                    alt="video preview" 
                    class="w-full max-w-md"
                    style="background: none;"
                >
            </div>

            {{-- 4-Step Process --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 text-left">
                {{-- Step 1 --}}
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-red-600 text-3xl font-bold mb-2">1</div>
                    <h3 class="text-xl font-semibold mb-2">Objednáte</h3>
                    <p class="text-gray-600">Online nebo po telefonu – zvolte si, co vám víc vyhovuje.</p>
                </div>

                {{-- Step 2 --}}
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-red-600 text-3xl font-bold mb-2">2</div>
                    <h3 class="text-xl font-semibold mb-2">Domluvíme</h3>
                    <p class="text-gray-600">Ozveme se vám do pár minut a domluvíme vyhovující termín.</p>
                </div>

                {{-- Step 3 --}}
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-red-600 text-3xl font-bold mb-2">3</div>
                    <h3 class="text-xl font-semibold mb-2">Prověříme</h3>
                    <p class="text-gray-600">Prohlédneme vůz, zjistíme stav a pokusíme se vyjednat slevu.</p>
                </div>

                {{-- Step 4 --}}
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-red-600 text-3xl font-bold mb-2">4</div>
                    <h3 class="text-xl font-semibold mb-2">Poradíme</h3>
                    <p class="text-gray-600">Dostanete přehledný report a řekneme vám náš odborný názor.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Nedávno kontrolované vozy</h2>
            <p class="text-lg text-gray-600 mb-10">Podívejte se na některé z vozů, které jsme nedávno prověřili pro naše klienty.</p>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    {{-- Slide 1 --}}
                    <div class="swiper-slide">
                        <img src="{{ asset('images/cars/car1.jpg') }}" alt="Auto 1" class="w-full h-64 object-cover rounded-xl shadow-md" />
                    </div>

                    {{-- Slide 2 --}}
                    <div class="swiper-slide">
                        <img src="{{ asset('images/cars/car2.jpg') }}" alt="Auto 2" class="w-full h-64 object-cover rounded-xl shadow-md" />
                    </div>

                    {{-- Slide 3 --}}
                    <div class="swiper-slide">
                        <img src="{{ asset('images/cars/car3.jpg') }}" alt="Auto 3" class="w-full h-64 object-cover rounded-xl shadow-md" />
                    </div>

                    {{-- Slide 1 --}}
                    <div class="swiper-slide">
                        <img src="{{ asset('images/cars/car1.jpg') }}" alt="Auto 1" class="w-full h-64 object-cover rounded-xl shadow-md" />
                    </div>

                    {{-- Slide 2 --}}
                    <div class="swiper-slide">
                        <img src="{{ asset('images/cars/car2.jpg') }}" alt="Auto 2" class="w-full h-64 object-cover rounded-xl shadow-md" />
                    </div>

                    {{-- Slide 3 --}}
                    <div class="swiper-slide">
                        <img src="{{ asset('images/cars/car3.jpg') }}" alt="Auto 3" class="w-full h-64 object-cover rounded-xl shadow-md" />
                    </div>

                    {{-- Add more slides as needed --}}
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Nedávno kontrolované vozy</h2>
            <p class="text-lg text-gray-600 mb-10">Podívejte se na některé z vozů, které jsme nedávno prověřili pro naše klienty.</p>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper py-3">

                {{-- Card 1 --}}
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
                        <img 
                            src="{{ asset('images/cars/car1.jpg') }}" 
                            alt="Škoda Octavia 2015" 
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold mb-2">Škoda Octavia 2015</h3>
                            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                                <li>Vada na brzdách</li>
                                <li>Drobná koroze na podvozku</li>
                                <li>Ušetřeno: 15 000 Kč</li>
                            </ul>
                            <a href="{{ url('/cars/1') }}" 
                               class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                               Detail vozu
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
                        <img 
                            src="{{ asset('images/cars/car2.jpg') }}" 
                            alt="Ford Focus 2017" 
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold mb-2">Ford Focus 2017</h3>
                            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                                <li>Menší poškození karoserie</li>
                                <li>Nové pneumatiky nutné</li>
                                <li>Ušetřeno: 20 000 Kč</li>
                            </ul>
                            <a href="{{ url('/cars/2') }}" 
                               class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                               Detail vozu
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
                        <img 
                            src="{{ asset('images/cars/car3.jpg') }}" 
                            alt="Volkswagen Golf 2016" 
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold mb-2">Volkswagen Golf 2016</h3>
                            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                                <li>Problémy s elektronikou</li>
                                <li>Servis zdarma</li>
                                <li>Ušetřeno: 18 500 Kč</li>
                            </ul>
                            <a href="{{ url('/cars/3') }}" 
                               class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                               Detail vozu
                            </a>
                        </div>
                    </div>
                </div>


                {{-- Card 1 --}}
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
                        <img 
                            src="{{ asset('images/cars/car1.jpg') }}" 
                            alt="Škoda Octavia 2015" 
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold mb-2">Škoda Octavia 2015</h3>
                            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                                <li>Vada na brzdách</li>
                                <li>Drobná koroze na podvozku</li>
                                <li>Ušetřeno: 15 000 Kč</li>
                            </ul>
                            <a href="{{ url('/cars/1') }}" 
                               class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                               Detail vozu
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Card 2 --}}
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
                        <img 
                            src="{{ asset('images/cars/car2.jpg') }}" 
                            alt="Ford Focus 2017" 
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold mb-2">Ford Focus 2017</h3>
                            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                                <li>Menší poškození karoserie</li>
                                <li>Nové pneumatiky nutné</li>
                                <li>Ušetřeno: 20 000 Kč</li>
                            </ul>
                            <a href="{{ url('/cars/2') }}" 
                               class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                               Detail vozu
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="swiper-slide">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
                        <img 
                            src="{{ asset('images/cars/car3.jpg') }}" 
                            alt="Volkswagen Golf 2016" 
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4 flex flex-col flex-grow">
                            <h3 class="text-xl font-semibold mb-2">Volkswagen Golf 2016</h3>
                            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                                <li>Problémy s elektronikou</li>
                                <li>Servis zdarma</li>
                                <li>Ušetřeno: 18 500 Kč</li>
                            </ul>
                            <a href="{{ url('/cars/3') }}" 
                               class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                               Detail vozu
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        {{-- Left Side: Custom Green Checkboxes --}}
        <div>
            <h2 class="text-4xl font-extrabold text-gray-900 mb-8">Vozidlo detailně prověříme</h2>
            <form class="space-y-6">
                @php
                    $checks = [
                        'zkušenosti z praxe',
                        'prohléžíme exteriér i interiér',
                        'napojení na diagnostiku',
                        'mnohé další',
                    ];
                @endphp

                @foreach ($checks as $check)
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" checked disabled class="custom-checkbox" />
                        <span class="text-lg text-gray-700 font-medium">{{ ucfirst($check) }}</span>
                    </label>
                @endforeach
            </form>
        </div>

        {{-- Right Side: Image --}}
        <div>
            <img 
                src="{{ asset('images/car_inspection.png') }}" 
                alt="Kontrola vozu" 
                class="w-full rounded-lg shadow-lg object-cover max-h-[400px]"
            />
        </div>
    </div>
</section>

<section class="bg-white py-16 px-6 max-w-3xl mx-auto">
  <h2 class="text-4xl font-extrabold text-gray-900 mb-10 text-center">Ceník</h2>
  <ul class="space-y-6 text-lg text-gray-800">
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>Kontrola vozu</span>
      <span class="font-semibold text-[#e32014]">2 800,-</span>
    </li>
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>Dojezd 100 km</span>
      <span class="font-semibold text-[#e32014]">1 000,-</span>
    </li>
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>Dojezd 200 km</span>
      <span class="font-semibold text-[#e32014]">1 700,-</span>
    </li>
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>Přepis vozidla s plnou mocí</span>
      <span class="font-semibold">800,- + poplatek úřadu</span>
    </li>
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>STK</span>
      <span class="italic text-gray-500">po telefonické domluvě</span>
    </li>
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>Cebia</span>
      <span class="italic text-gray-500">dle ceny webu</span>
    </li>
    <li class="flex justify-between border-b border-gray-200 pb-3">
      <span>Přeprava vozidla domů</span>
      <span class="font-semibold text-[#e32014]">2 500,-</span>
    </li>
  </ul>
</section>

<section class="bg-gray-50 py-20 ">
    <div class=" bg-white px-6 max-w-3xl mx-auto">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6 text-center">Rezervace kontroly vozu</h2>

        <p class="text-center text-gray-700 mb-10 text-lg max-w-xl mx-auto">
            Rezervaci můžete provést online pomocí formuláře níže, <br>
            nebo nám rovnou zavolejte na <a href="tel:+420123456789" class="text-[#e32014] font-semibold hover:underline">+420 123 456 789</a>.
        </p>
        <form action="/" method="POST" class="space-y-6">
            @csrf

            <div>
            <label for="name" class="block text-gray-700 font-medium mb-2">Jméno</label>
            <input type="text" id="name" name="name" required
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
            </div>

            <div>
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
            </div>

            <div>
            <label for="phone" class="block text-gray-700 font-medium mb-2">Telefon</label>
            <input type="tel" id="phone" name="phone" required
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block text-gray-700 font-medium mb-2">Preferovaný den</label>
                    <input type="date" id="date" name="date"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
                </div>

                <div>
                    <label for="time" class="block text-gray-700 font-medium mb-2">Preferovaný čas</label>
                    <input type="time" id="time" name="time"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
                </div>
            </div>


            <div>
            <label for="message" class="block text-gray-700 font-medium mb-2">Poznámka</label>
            <textarea id="message" name="message" rows="4"
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" placeholder="Například speciální požadavky nebo otázky"></textarea>
            </div>

            <button type="submit"
            class="w-full bg-[#e32014] text-white font-semibold py-4 rounded-md hover:bg-red-700 transition-colors duration-300">
            Rezervovat kontrolu
            </button>
        </form>
    <div>
</section>


</x-layout>