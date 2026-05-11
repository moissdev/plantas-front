@extends(isset($front) ? $front->layout ?? config('front.default_layout') : config('front.default_layout'))

@section('content')
<div style="
    max-width: 900px;
    margin: 2rem auto;
    padding: 0 1rem;
    font-family: 'Segoe UI', sans-serif;
    color: #2d3a2d;
">
    <div style="margin-bottom:1rem;">
        <a href="{{ $front->getBaseUrl() }}" style="color:#2e6b3e; text-decoration:none;">
            ← Volver a la lista
        </a>
    </div>

    <div style="
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    ">
        <h2 style="font-size:1.2rem; margin-bottom:1.2rem; color:#3a5a3a;">
            Nueva planta
        </h2>

        @if($errors->any())
            <div style="
                background:#fde8e8;
                border:1px solid #f5c6c6;
                color:#c0392b;
                padding:.75rem 1rem;
                border-radius:6px;
                margin-bottom:1rem;
                font-size:.9rem;
            ">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        @include('front::crud.partial-create', ['front' => $front])
    </div>
</div>
@endsection
