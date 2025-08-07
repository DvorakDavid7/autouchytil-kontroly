@php
    $links = [
        [
            'title' => 'Jak to funguje',
            'href' => '#jak-to-funguje',
        ],
        [
            'title' => 'Kontrolované vozy',
            'href' => '#kontrolovane-vozy',
        ],
        [
            'title' => 'Ceník',
            'href' => '#cenik',
        ],
        [
            'title' => 'Rezervace',
            'href' => '#reservation',
        ],
        [
            'title' => 'O mně',
            'href' => '#o-mne',
        ],
    ];
@endphp

<nav class="bg-red-500 px-4 md:px-10" x-data="{ open: false }">
    <div class="flex justify-between items-center py-2">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/" class="flex items-center text-white">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" width="170" height="170"
                    class="hidden md:block">
            </a>
        </div>

        <!-- Hamburger Button (mobile only) -->
        <div class="md:hidden">
            <button @click="open = !open" class="text-white focus:outline-none">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex items-center gap-8 text-white">
            @foreach ($links as $link)
                <a href="{{ $link['href'] }}" class="hover:underline">{{ $link['title'] }}</a>
            @endforeach


            <div class="flex items-center gap-3">
                <i class="bi bi-telephone-fill"></i>
                <a href="tel:+420774034180" class="text-sm hover:underline">
                    <strong>(+420) 774 034 180</strong>
                </a>
            </div>

            {{-- <a href="https://www.facebook.com/profile.php?id=61560377717879" aria-label="Facebook"
                class="text-2xl hover:text-gray-200">
                <i class="bi bi-facebook"></i>
            </a> --}}
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="md:hidden flex flex-col gap-4 px-4 pb-4 text-white">
        @foreach ($links as $link)
            <a :href="$link['href']" class="hover:underline">{{ $link['title'] }}</a>
        @endforeach

        <div class="flex items-center gap-3 mt-2">
            <i class="bi bi-telephone-fill"></i>
            <a href="tel:+420774034180" class="text-sm hover:underline">
                <strong>(+420) 774 034 180</strong>
            </a>
        </div>

        {{-- <a href="https://www.facebook.com/profile.php?id=61560377717879" aria-label="Facebook"
            class="text-2xl hover:text-gray-200 mt-2">
            <i class="bi bi-facebook"></i>
        </a> --}}
    </div>
</nav>
