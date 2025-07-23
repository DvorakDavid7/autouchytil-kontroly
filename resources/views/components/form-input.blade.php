@props(['label', 'name', 'type' => 'text', 'value' => '', 'required' => false, 'options' => []])

<div class="mb-6">
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-700">
        {{ $label }}
        @if ($required)
            <span class="text-red-500">*</span>
        @endif
    </label>

    @if ($type === 'file')
        <input type="file" id="{{ $name }}" name="{{ $name }}" accept="image/*" capture="environment"
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge([
                'class' =>
                    'block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-black focus:border-black',
            ]) }} />
    @elseif (count($options) > 0)
        <select id="{{ $name }}" name="{{ $name }}" {{ $required ? 'required' : '' }}
            {{ $attributes->merge([
                'class' =>
                    'block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-black text-gray-700 bg-white',
            ]) }}>
            <option value="">-- Vyberte možnost --</option>
            @foreach ($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                    {{ $optionLabel }}
                </option>
            @endforeach
        </select>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            value="{{ old($name, $value) }}" {{ $required ? 'required' : '' }}
            {{ $attributes->merge([
                'class' =>
                    'block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-black text-gray-700',
            ]) }} />
    @endif

    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
