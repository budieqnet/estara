@props([
    'variant' => 'default', // default, bordered, elevated, outlined
    'padding' => 'md', // none, sm, md, lg
    'header' => null,
    'footer' => null,
    'attributes' => [],
])

<?php
$variants = [
    'default' => 'bg-white shadow-sm',
    'bordered' => 'bg-white border border-gray-200',
    'elevated' => 'bg-white shadow-md',
    'outlined' => 'bg-white border-2 border-gray-200',
];

$paddings = [
    'none' => '',
    'sm' => 'p-3',
    'md' => 'p-4',
    'lg' => 'p-6',
];

$classes = [
    'rounded-lg',
    $variants[$variant] ?? $variants['default'],
    $paddings[$padding] ?? $paddings['md'],
];
?>

<div class="{{ implode(' ', array_filter($classes)) }}" {{ $attributes->merge(['class' => implode(' ', array_filter($classes))]) }}>
    @if ($header)
        <div class="px-4 py-3 border-b border-gray-200 -mx-4 -mt-4 rounded-t-lg">
            {{ $header }}
        </div>
    @endif

    <div class="{{ $padding === 'none' ? '' : '' }}">
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="px-4 py-3 border-t border-gray-200 -mx-4 -mb-4 rounded-b-lg bg-gray-50">
            {{ $footer }}
        </div>
    @endif
</div>