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