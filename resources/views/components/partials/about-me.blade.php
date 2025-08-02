<section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            {{-- Left Side: Image --}}
            <div class="hidden md:block">
                <img src="{{ asset('images/about_me.png') }}" alt="O nás" class="w-full">
            </div>

            {{-- Right Side: Text --}}
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">O mně</h2>

                <div class="md:hidden block my-5">
                    <img src="{{ asset('images/about_me.png') }}" alt="O nás" class="w-full">
                </div>

                <p class="text-gray-700 mb-4">
                    <strong>Nejsem jen technik pro kontrolu vozů, ale zároveň provozovatel úspěšného autoservisu v Praze.</strong>
                    Mám bohaté zkušenosti v oblasti automobilů – jak po technické stránce, tak i s praktikami autobazarů.
                    Auta mě baví a naplňují, což se odráží i v řadě spokojených klientů.
                </p>
                <p class="text-gray-700 mb-4">
                    Kladu velký důraz na individuální přístup ke každému zákazníkovi – ať už hledáte spolehlivé auto pro rodinu,
                    nebo sportovní vůz pro radost z jízdy. Neustále se vzdělávám a sleduji nové modely, které se na trhu neustále objevují.
                </p>
                <p class="text-gray-700 mb-4">
                    <strong>Co mě k autům přivedlo?</strong> V naší rodině má svět automobilů dlouhou tradici sahající až do roku 1935.
                    Tuto tradici jsem pojal po svém a rozhodl se stát na straně férovosti a upřímnosti. Už můj otec mě učil první pravidla
                    automobilového světa – v době, kdy jsem ještě ani neuměl malou násobilku.
                </p>
                <p class="text-gray-700 mb-6">
                    Jsem rád, že vám tímto mohu představit svůj dlouholetý projekt, který staví na zkušenosti, poctivosti a vášni k autům.
                </p>

                {{-- Signature Image --}}
                <div class="flex justify-end">
                    <img src="{{ asset('images/jan_signature.jpg') }}" alt="Podpis" class="h-16 w-auto">
                </div>
            </div>
        </div>
    </div>
</section>
