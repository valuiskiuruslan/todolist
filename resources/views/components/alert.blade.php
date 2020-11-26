<div>
    {{ $slot }}
    @if (session('message'))
        <div class="py-4 px-2 bg-green-300">{{ session('message') }}</div>
    @elseif (session()->has('error'))
        <div class="py-4 px-2 bg-red-300">{{ session()->get('error') }}</div>
    @endif
</div>
