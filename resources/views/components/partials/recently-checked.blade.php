<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Nedávno kontrolované vozy</h2>
        <p class="text-lg text-gray-600 mb-10">Podívejte se na některé z vozů, které jsme nedávno prověřili pro naše klienty.</p>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-3">
                <x-card 
                    image="images/cars/car1.png" 
                    title="BMW 525D" 
                    :bullets="['Původní cena 210 000,-', 'Perfektní stav kosmetiky', 'Odhalení falešné faktury na rozvody']"
                    saved="35 000,-"
                />

                <x-card 
                    image="images/cars/car2.png" 
                    title="Škoda octavia 1.6 Rs packet" 
                    :bullets="['Původní cena 65 000,-', 'Staré gumy', 'Horší kvalita laku']"
                    saved="9 500,-"
                />

                <x-card
                    image="images/cars/car3.png" 
                    title="BMW 440i" 
                    :bullets="['Původní cena 880 000,-', 'Lakované dveře s blatníkem', 'Špatný stav pneu']"
                    saved="37 000,-"
                />

                <x-card
                    image="images/cars/car4.png" 
                    title="Škoda fabia 2 TSI" 
                    :bullets="['Původní cena 85 000,-', 'Přední naprava v lehce horším stavu', 'Lak pátých dveří']"
                    saved="12 000,-"
                />
            </div>
            {{-- <div class="swiper-button-next ps-20"></div> --}}
            {{-- <div class="swiper-button-prev"></div> --}}
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>
</section>