<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-900/50 border-none btn rounded-full text-white hover:bg-blue-900/75']) }}>
    {{ $slot }}
</button>
