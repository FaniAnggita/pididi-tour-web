@props([
    'variant' => 'default', // 'default' or 'light'
    'showTagline' => false,
    'size' => 'md' // 'sm', 'md', 'lg'
])

@php
    $logoSrc = $showTagline ? asset('vayana_with_tagline.png') : asset('vayana_logo_no_tagline.png');
    
    $imgClass = match($size) {
        'sm' => $showTagline ? 'h-8 sm:h-9' : 'h-6 sm:h-7',
        'lg' => $showTagline ? 'h-12 sm:h-14' : 'h-9 sm:h-11',
        default => $showTagline ? 'h-10 sm:h-11' : 'h-7 sm:h-8',
    };
@endphp

<div class="inline-flex flex-col items-start select-none">
    <div class="{{ $variant === 'light' ? 'bg-white px-3.5 py-1.5 rounded-xl shadow-sm border border-white/20 inline-block' : 'inline-block' }}">
        <img src="{{ $logoSrc }}" 
             alt="Vayana Wisata Logo" 
             class="{{ $imgClass }} w-auto object-contain transition-all duration-300">
    </div>
</div>
