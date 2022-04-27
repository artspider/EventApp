@props([
'color' => 'blue',
'is_disabled' => '',
'textcolor' => 'main-color',
'tracking' => 'wider'
])

<button @if($is_disabled) disabled @endif {{ $attributes->merge(['class' => 'bg-' . $color . '-500 border
    border-transparent rounded-md font-semibold text-sm text-'. $textcolor . ' uppercase tracking-' . $tracking . '
    hover:bg-' . $color . '-400 active:bg-' . $color . '-700 focus:outline-none focus:border-' . $color . '-700
    focus:ring ring-' . $color . '-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>