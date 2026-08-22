@props([
    'variant' => 'default', // 'default' or 'light'
    'showTagline' => false,
    'size' => 'md' // 'sm', 'md', 'lg'
])

@php
    $imgClass = match($size) {
        'sm' => 'h-5 sm:h-6',
        'lg' => 'h-8 sm:h-10',
        default => 'h-7 sm:h-8',
    };
    
    $taglineColor = match($variant) {
        'light' => 'text-amber-200',
        default => 'text-brand-navy font-semibold',
    };
@endphp

<div class="inline-flex flex-col items-start select-none">
    <div class="{{ $variant === 'light' ? 'bg-white px-3 py-1 rounded-xl shadow-sm border border-white/20 inline-block' : 'inline-block' }}">
        <img src="{{ asset('logo_pididi.png') }}" 
             alt="PIDIDI Tour Logo" 
             class="{{ $imgClass }} w-auto object-contain transition-all duration-300">
    </div>
    @if($showTagline)
        <span class="{{ $taglineColor }} text-[10px] md:text-xs tracking-wide mt-0.5">
            Pilih Destinasi, Dapat Inspirasi
        </span>
    @endif
</div>
