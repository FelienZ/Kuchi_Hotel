@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-neutral']) }}>
    {{ $value ?? $slot }}
</label>
