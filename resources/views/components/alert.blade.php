<div>
    {{ $slot }}
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group list-group-flush">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
