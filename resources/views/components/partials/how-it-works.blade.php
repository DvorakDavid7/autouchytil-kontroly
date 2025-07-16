@php
$steps = [
    ['number' => 1, 'title' => 'Objednáte', 'description' => 'Online nebo po telefonu - zvolte si, co vám víc vyhovuje.'],
    ['number' => 2, 'title' => 'Domluvíme', 'description' => 'Ozveme se vám do pár minut a domluvíme vyhovující termín.'],
    ['number' => 3, 'title' => 'Prověříme', 'description' => 'Prohlédneme vůz, zjistíme stav a pokusíme se vyjednat slevu.'],
    ['number' => 4, 'title' => 'Poradíme', 'description' => 'Dostanete přehledný report a řekneme vám náš odborný názor.'],
];
@endphp
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
            {{-- Steps --}}
            @foreach ($steps as $step)
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
                    <div class="text-red-600 text-3xl font-bold mb-2">{{ $step['number'] }}</div>
                    <h3 class="text-xl font-semibold mb-2">{{ $step['title'] }}</h3>
                    <p class="text-gray-600">{{ $step['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>