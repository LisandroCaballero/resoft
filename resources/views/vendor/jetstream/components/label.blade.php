@props(['value'])

<label {{ $attributes->merge(['class' => 'text-lg']) }}>
    {{ $value ?? $slot }}
</label>






{{--    <label for="name" class="text-lg">Name</label>--}}

