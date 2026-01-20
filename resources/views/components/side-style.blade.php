@props(['active' => false])

<a class="{{ $active ? 'bg-gray-700 hover:bg-gray-700' : ''}} flex items-center py-2 px-4 text-sm font-medium hover:bg-gray-700 rounded-lg mx-2 transition-colors"
    {{ $attributes }}
    >
    {{ $slot }}
</a>