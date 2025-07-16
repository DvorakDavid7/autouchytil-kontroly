<form wire:submit="save" class="space-y-6">
    <div>
        <label for="name" class="block text-gray-700 font-medium mb-2">
            Jméno <span class="text-red-600">*</span>
        </label>
        <input wire:model="name" type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" />
        @error('name')
            <div class="text-red-600 text-sm mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="surname" class="block text-gray-700 font-medium mb-2">
            Příjmení <span class="text-red-600">*</span>
        </label>
        <input wire:model="surname" type="text" id="surname" name="surname" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" />
        @error('surname')
            <div class="text-red-600 text-sm mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <label for="email" class="block text-gray-700 font-medium mb-2">
            Email <span class="text-red-600">*</span>
        </label>
        <input wire:model="email" type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" />
        @error('email')
            <div class="text-red-600 text-sm mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <label for="phone" class="block text-gray-700 font-medium mb-2">
            Telefon <span class="text-red-600">*</span>
        </label>
        <input wire:model="phone" type="tel" id="phone" name="phone" required class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" />
        @error('phone')
            <div class="text-red-600 text-sm mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="date" class="block text-gray-700 font-medium mb-2">
                Preferovaný den <span class="text-red-600">*</span>
            </label>
            <input wire:model="date" type="date" id="date" name="date" min="{{ now()->format('Y-m-d') }}" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" />
            @error('date')
                <div class="text-red-600 text-sm mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <label for="time" class="block text-gray-700 font-medium mb-2">
                Preferovaný čas <span class="text-red-600">*</span>
            </label>
            <input wire:model="time" type="time" id="time" name="time" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" />
            @error('time')
                <div class="text-red-600 text-sm mt-1">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div>
        <label for="message" class="block text-gray-700 font-medium mb-2">
            Poznámka
        </label>
        <textarea wire:model="note" id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none" placeholder="Například speciální požadavky nebo otázky"></textarea>
        @error('note')
            <div class="text-red-600 text-sm mt-1">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mt-3">
        <input required id="default-checkbox" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-500">
        Souhlasím se zpracováním osobních údajů podle
        <a href="/zasady-ochrany-osobnich-udaju" class="underline">zásad ochrany osobních údajů</a>.
        </label>
    </div>

    <button type="submit"
        class="w-full bg-[#e32014] text-white font-semibold py-4 rounded-md hover:bg-red-700 transition-colors duration-300">
        Rezervovat kontrolu
    </button>
</form>
