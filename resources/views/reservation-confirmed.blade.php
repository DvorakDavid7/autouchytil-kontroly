<x-layout>
    <div class="h-[80vh]">
        <div class="h-5/6 flex flex-col justify-center items-center">
            <div class="flex flex-col space-y-10 justify-center items-center">
                @if (session()->has('reservation'))
                    @php
                        $reservation = session('reservation');
                    @endphp
                    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6 mt-8">
                        <h1 class="text-3xl font-semibold text-green-600 mb-4">Rezervace vytvořena!</h1>
                        <div class="text-gray-700 text-lg space-y-2">
                            <p><strong>Jméno:</strong> {{ $reservation->name }}</p>
                            <p><strong>Příjmení:</strong> {{ $reservation->surname }}</p>
                            <p><strong>Termín:</strong> {{ \Carbon\Carbon::parse($reservation->date)->format('d.m.Y') }}
                                v {{ $reservation->time }}</p>
                            <p><strong>Poznámka:</strong> {{ $reservation->note ?? '-' }}</p>
                        </div>
                    </div>
                @else
                    <p>Není zde žádná rezervace</p>
                @endif
                <a href="{{ route('home') }}"
                    class="text-white bg-[var(--primary-red)] hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Zpět na stránku
                </a>
            </div>
        </div>
    </div>

    @if (session('fire_conversion'))
        <script>
            window.onload = function() {
                gtag_report_conversion();
                console.log("reservation created!")
            };
        </script>
    @endif
</x-layout>
