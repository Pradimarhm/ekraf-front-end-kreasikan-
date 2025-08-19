{{-- <a {{ $attributes }}
    class="{{ $active ? ' text-primary-500' : 'text-gray-700 hover:text-primary-500' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a> --}}

<a {{ $attributes }}
    class="{{ $active ? ' text-primary-500' : 'text-gray-700 hover:text-primary-200 transition duration-150 ease-in-out' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
