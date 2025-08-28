<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-background-elevated/50 border border-brand-900/30 rounded-md font-semibold text-xs text-gray-200 uppercase tracking-widest shadow-sm hover:bg-brand-900/30 focus:outline-none focus:ring-2 focus:ring-brand-400 focus:ring-offset-2 focus:ring-offset-background disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
