<section class="bg-gray-50 py-20" id="reservation">
    <div class=" bg-white px-6 max-w-3xl mx-auto">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6 text-center">Rezervace kontroly vozu</h2>

        <p class="text-center text-gray-700 mb-10 text-lg max-w-xl mx-auto">
            Rezervaci můžete provést online pomocí formuláře níže, <br>
            nebo nám rovnou zavolejte na <a href="tel:+420123456789" class="text-[#e32014] font-semibold hover:underline">+420 123 456 789</a>.
        </p>
        <form action="/" method="POST" class="space-y-6">
            @csrf

            <div>
            <label for="name" class="block text-gray-700 font-medium mb-2">Jméno</label>
            <input type="text" id="name" name="name" required
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
            </div>

            <div>
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
            </div>

            <div>
            <label for="phone" class="block text-gray-700 font-medium mb-2">Telefon</label>
            <input type="tel" id="phone" name="phone" required
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="date" class="block text-gray-700 font-medium mb-2">Preferovaný den</label>
                    <input type="date" id="date" name="date"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
                </div>

                <div>
                    <label for="time" class="block text-gray-700 font-medium mb-2">Preferovaný čas</label>
                    <input type="time" id="time" name="time"
                    class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" />
                </div>
            </div>


            <div>
            <label for="message" class="block text-gray-700 font-medium mb-2">Poznámka</label>
            <textarea id="message" name="message" rows="4"
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#e32014] focus:border-[#e32014]" placeholder="Například speciální požadavky nebo otázky"></textarea>
            </div>

            <button type="submit"
            class="w-full bg-[#e32014] text-white font-semibold py-4 rounded-md hover:bg-red-700 transition-colors duration-300">
            Rezervovat kontrolu
            </button>
        </form>
    <div>
</section>