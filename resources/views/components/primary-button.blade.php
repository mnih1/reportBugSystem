<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-56 h-16 bg-primary rounded-full flex items-center justify-center text-white text-2xl font-light shadow-[0_0_25px] shadow-primary hover:cursor-pointer']) }}>
    {{ $slot }}
</button>
