<style>
.front-form-grid { display:grid; grid-template-columns:1fr 1fr; gap:1rem; }
.front-form-grid .col-span-12 { grid-column: 1 / -1; }
.front-label { font-size:.85rem; font-weight:600; color:#4a6a4a; display:block; margin-bottom:.4rem; }
.front-input input,
.front-input textarea,
.front-input select {
    width:100%;
    padding:.55rem .75rem;
    border:1px solid #c8dfc8;
    border-radius:6px;
    font-size:.95rem;
    background:#fafffe;
    box-sizing:border-box;
    font-family:'Segoe UI', sans-serif;
}
.front-input input:focus,
.front-input textarea:focus {
    outline:none;
    border-color:#2e6b3e;
}
.front-input textarea { min-height:90px; resize:vertical; }
</style>

{{ html()->form('POST', $front->getBaseUrl())->acceptsFiles()->open() }}
    {{ html()->hidden('redirect_url') }}

    <div class="front-form-grid">
        @foreach($front->createPanels() as $panel)
            @foreach($panel->fields() as $field)
                <div class="front-input {{ $field->bootstrap_width() == 12 ? 'col-span-12' : '' }}">
                    <label class="front-label">{{ $field->title }}</label>
                    {!! $field->form() !!}
                </div>
            @endforeach
        @endforeach
    </div>

    <button type="submit" style="
        margin-top:1.2rem;
        background:#2e6b3e;
        color:white;
        border:none;
        padding:.65rem 1.6rem;
        border-radius:6px;
        font-size:1rem;
        cursor:pointer;
    ">＋ Registrar planta</button>

{{ html()->form()->close() }}
