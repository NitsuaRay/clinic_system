@props(['value'])

<label {{ $attributes->merge(['class' => ' font-black text-md text-blue-900']) }}>
    {{ $value ?? $slot }}
</label>
