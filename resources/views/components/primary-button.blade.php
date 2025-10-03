<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-white/50 border-none btn rounded-full text-white hover:bg-transparent']) }}>
    {{ $slot }}
</button>
