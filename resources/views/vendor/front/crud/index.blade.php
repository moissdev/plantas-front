@extends(isset($front) ? $front->layout ?? config('front.default_layout') : config('front.default_layout'))

@section('content')
<div style="
    max-width: 900px;
    margin: 2rem auto;
    padding: 0 1rem;
    font-family: 'Segoe UI', sans-serif;
    color: #2d3a2d;
">

    {{-- Mensajes flash --}}
    @if(session('success') || session('message'))
        <div style="
            background: #d4edda;
            border: 1px solid #a3d9a5;
            color: #2d6a4f;
            padding: .75rem 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        ">
            {{ session('success') ?? session('message') }}
        </div>
    @endif

    {{-- Encabezado --}}
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
        <h1 style="font-size:1.8rem; color:#2e6b3e; margin:0;">
            🌿 {{ $front->plural_label }}
        </h1>
        @foreach($front->getIndexLinks() as $button)
            @if(str_contains($button->link, 'create'))
                <a href="{{ $button->link }}" style="
                    background: #2e6b3e;
                    color: white;
                    padding: .6rem 1.4rem;
                    border-radius: 6px;
                    text-decoration: none;
                    font-size: .95rem;
                    transition: background .2s;
                ">＋ Registrar planta</a>
            @endif
        @endforeach
    </div>

    {{-- Tabla --}}
    @if($result->count() > 0)
        <table style="
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        ">
            <thead style="background: #2e6b3e; color: white;">
                <tr>
                    <th style="padding:.75rem 1rem; text-align:left;">#</th>
                    @foreach($front->indexFields() as $field)
                        <th style="padding:.75rem 1rem; text-align:left;">{{ $field->title }}</th>
                    @endforeach
                    <th style="padding:.75rem 1rem; text-align:left;">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $i => $planta)
                    <tr style="background: {{ $loop->even ? '#f5faf5' : 'white' }};">
                        <td style="padding:.75rem 1rem;">{{ $loop->iteration }}</td>
                        @foreach($front->indexFields() as $field)
                            <td style="padding:.75rem 1rem;">
                                {{ $field->getValue($planta) == '--' ? '—' : $field->getValue($planta) }}
                            </td>
                        @endforeach
                        <td style="padding:.75rem 1rem;">
                            <form action="{{ $front->getBaseUrl() }}/{{ $planta->getKey() }}"
                                  method="POST"
                                  onsubmit="return confirm('¿Eliminar esta planta?')"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="
                                    background: none;
                                    border: 1px solid #c0392b;
                                    color: #c0392b;
                                    padding: .3rem .75rem;
                                    border-radius: 5px;
                                    cursor: pointer;
                                    font-size: .85rem;
                                ">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p style="margin-top:.75rem; color:#7a9a7a; font-size:.85rem;">
            {{ $result->count() }} planta(s) registrada(s)
        </p>
    @else
        <p style="text-align:center; color:#7a9a7a; font-style:italic; padding:2rem;">
            No hay plantas registradas aún.
        </p>
    @endif

</div>
@endsection
