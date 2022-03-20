<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8']) }}>
    {{ $slot }}
</button>
