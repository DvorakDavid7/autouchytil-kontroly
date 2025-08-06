@props([
    'image',
    'title',
    'bullets' => [],
    'saved'
])

<div class="swiper-slide">
    <div class="bg-white rounded-xl shadow-md overflow-hidden flex flex-col h-full">
        <img 
            src="{{ asset($image) }}" 
            alt="BMW 525D" 
            class="w-full h-48 object-cover"
        />
        <div class="p-4 flex flex-col flex-grow">
            <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
            <ul class="list-disc list-inside text-gray-700 mb-4 flex-grow text-left">
                @foreach($bullets as $bullet)
                    <li>{{ $bullet }}</li>
                @endforeach
                @if($saved)
                    <li class="text-green-500">Ušetřeno {{ $saved }}</li>
                @endif
            </ul>
            {{-- <a href="{{ url('/cars/1') }}" 
                class="mt-auto inline-block bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 text-center">
                Detail vozu
            </a> --}}
        </div>
    </div>
</div>