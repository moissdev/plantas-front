@props(['name' => '', 'class' => ''])

@php
$icons = [
    'eye'           => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
    'pencil'        => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
    'trash'         => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16',
    'plus-small'    => 'M12 4v16m8-8H4',
    'arrow-up'      => 'M5 15l7-7 7 7',
    'arrow-down'    => 'M19 9l-7 7-7-7',
    'arrow-left'    => 'M10 19l-7-7m0 0l7-7m-7 7h18',
    'arrow-uturn-left' => 'M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3',
    'funnel'        => 'M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L13 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 017 21v-7.586L3.293 6.707A1 1 0 013 6V4z',
];

$path = $icons[$name] ?? 'M12 4v16m8-8H4';
@endphp

<svg xmlns="http://www.w3.org/2000/svg"
     class="{{ $class }}"
     fill="none"
     viewBox="0 0 24 24"
     stroke="currentColor"
     stroke-width="2">
    <path stroke-linecap="round"
          stroke-linejoin="round"
          d="{{ $path }}" />
</svg>
