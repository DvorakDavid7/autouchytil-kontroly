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