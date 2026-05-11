@isset($breadcrumb)
    <nav class="flex px-4 py-3" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-500">
            <li>
                <a href="/dashboard" class="hover:text-gray-700">Inicio</a>
            </li>
            @foreach($breadcrumb as $item)
                <li class="flex items-center space-x-2">
                    <span>/</span>
                    @if(isset($item['url']))
                        <a href="{{ $item['url'] }}" class="hover:text-gray-700">
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="text-gray-900 font-medium">
                            {{ $item['label'] }}
                        </span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endisset
