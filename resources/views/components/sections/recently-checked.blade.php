@php
    $cards = [
        [
            'title' => 'BMW 525D',
            'image' => 'images/cars/car1.png',
            'bullets' => ['Původní cena 210 000,-', 'Perfektní stav kosmetiky', 'Odhalení falešné faktury na rozvody'],
            'saved' => '35 000,-',
        ],
        [
            'title' => 'Škoda octavia 1.6 Rs packet',
            'image' => 'images/cars/car2.png',
            'bullets' => ['Původní cena 65 000,-', 'Staré gumy', 'Horší kvalita laku'],
            'saved' => '9 500,-',
        ],
        [
            'title' => 'BMW 440i',
            'image' => 'images/cars/car3.png',
            'bullets' => ['Původní cena 880 000,-', 'Lakované dveře s blatníkem', 'Špatný stav pneu'],
            'saved' => '37 000,-',
        ],
        [
            'title' => 'Škoda fabia 2 TSI',
            'image' => 'images/cars/car4.png',
            'bullets' => ['Původní cena 85 000,-', 'Přední naprava v lehce horším stavu', 'Lak pátých dveří'],
            'saved' => '12 000,-',
        ],
    ];
@endphp

<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Nedávno kontrolované vozy</h2>
        <p class="text-lg text-gray-600 mb-10">
            Podívejte se na některé z vozů, které jsme nedávno prověřili pro naše klienty.
        </p>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper py-3">
                @foreach ($cards as $card)
                    <x-card :title="$card['title']" :image="$card['image']" :bullets="$card['bullets']" :saved="$card['saved']" />
                @endforeach
            </div>
            {{-- <div class="swiper-button-next ps-20"></div> --}}
            {{-- <div class="swiper-button-prev"></div> --}}
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>
</section>
