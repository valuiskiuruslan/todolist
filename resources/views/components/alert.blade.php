<div>
    {{ $slot }}
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
</div>
