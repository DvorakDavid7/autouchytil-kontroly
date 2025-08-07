<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Nedávno kontrolované vozy</h2>
        <p class="text-lg text-gray-600 mb-10">Podívejte se na některé z vozů, které jsme nedávno prověřili pro naše
            klienty.</p>

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                {{-- Slide 1 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('images/cars/car1.png') }}" alt="Auto 1"
                        class="w-full h-64 object-cover rounded-xl shadow-md" />
                </div>

                {{-- Slide 2 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('images/cars/car2.png') }}" alt="Auto 2"
                        class="w-full h-64 object-cover rounded-xl shadow-md" />
                </div>

                {{-- Slide 3 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('images/cars/car3.png') }}" alt="Auto 3"
                        class="w-full h-64 object-cover rounded-xl shadow-md" />
                </div>

                {{-- Slide 1 --}}
                <div class="swiper-slide">
                    <img src="{{ asset('images/cars/car4.png') }}" alt="Auto 1"
                        class="w-full h-64 object-cover rounded-xl shadow-md" />
                </div>

                {{-- Add more slides as needed --}}
            </div>
        </div>
    </div>
</section>
