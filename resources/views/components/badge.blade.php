@props([
    'variant' => 'default', // default, success, warning, danger, info, gray
    'size' => 'md', // sm, md, lg
    'dot' => false,
    'removable' => false,
    'onRemove' => null,
    'attributes' => [],
])

<?php
$variants = [
    'default' => 'bg-primary-100 text-primary-800',
    'success' => 'bg-green-100 text-green-800',
    'warning' => 'bg-yellow-100 text-yellow-800',
    'danger' => 'bg-red-100 text-red-800',
    'info' => 'bg-blue-100 text-blue-800',
    'gray' => 'bg-gray-100 text-gray-800',
];

$sizes = [
    'sm' => 'px-2 py-0.5 text-xs',
    'md' => 'px-2.5 py-0.5 text-sm',
    'lg' => 'px-3 py-1 text-base',
];

$classes = [
    'inline-flex items-center font-medium rounded-full',
    $variants[$variant] ?? $variants['default'],
    $sizes[$size] ?? $sizes['md'],
    $dot ? 'relative pl-3' : '',
    $removable ? 'pr-6 cursor-pointer' : '',
];
?>

<span class="{{ implode(' ', array_filter($classes)) }}" {{ $attributes->merge(['class' => implode(' ', array_filter($classes))]) }}>
    @if ($dot)
        <span class="absolute left-1.5 top-1/2 -translate-y-1/2 w-1.5 h-1.5 rounded-full bg-current opacity-60"></span>
    @endif

    {{ $slot }}

    @if ($removable)
        <button
            type="button"
            wire:click="{{ $onRemove }}"
            class="ml-1.5 -mr-1.5 p-0.5 rounded-full hover:bg-black/10 focus:outline-none focus:ring-2 focus:ring-current"
            aria-label="Remove"
        >
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    @endif
</span>