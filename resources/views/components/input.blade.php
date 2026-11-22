@props([
    'type' => 'text', // text, email, password, number, tel, url, date, datetime-local, time
    'label' => null,
    'placeholder' => '',
    'value' => null,
    'name' => null,
    'id' => null,
    'disabled' => false,
    'readonly' => false,
    'required' => false,
    'error' => null,
    'helper' => null,
    'icon' => null,
    'iconPosition' => 'left', // left, right
    'attributes' => [],
])

<?php
$inputId = $id ?? $name ?? 'input-' . uniqid();
$classes = [
    'w-full px-3 py-2 border rounded-md text-gray-900 placeholder-gray-400',
    'focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent',
    'disabled:bg-gray-50 disabled:text-gray-500 disabled:cursor-not-allowed',
    'readonly:bg-gray-50',
    $error ? 'border-danger focus:ring-danger' : 'border-gray-300',
    $icon && $iconPosition === 'left' ? 'pl-10' : '',
    $icon && $iconPosition === 'right' ? 'pr-10' : '',
];
?>

<div class="w-full">
    @if ($label)
        <label for="{{ $inputId }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
            @if ($required)
                <span class="text-danger ml-1" aria-hidden="true">*</span>
            @endif
        </label>
    @endif

    <div class="relative">
        @if ($icon && $iconPosition === 'left')
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                {{ $icon }}
            </div>
        @endif

        <input
            type="{{ $type }}"
            id="{{ $inputId }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}"
            class="{{ implode(' ', array_filter($classes)) }}"
            @if ($disabled) disabled @endif
            @if ($readonly) readonly @endif
            @if ($required) required @endif
            {{ $attributes->merge(['class' => implode(' ', array_filter($classes))]) }}
        />

        @if ($icon && $iconPosition === 'right')
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-gray-400">
                {{ $icon }}
            </div>
        @endif
    </div>

    @if ($error)
        <p class="mt-1 text-sm text-danger" role="alert">{{ $error }}</p>
    @elseif ($helper)
        <p class="mt-1 text-sm text-gray-500">{{ $helper }}</p>
    @endif
</div>