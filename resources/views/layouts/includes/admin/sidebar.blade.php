@php
// Icon array
$links = [
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'href' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard')
    ],
    [
        'header' => 'Hospital',
    ],
    [
        'name' => 'Dashboard',
        'icon' => 'fa-solid fa-gauge',
        'href' => route('admin.dashboard'),
        'active' => request()->routeIs('admin.dashboard')
    ],
];
@endphp

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                <li>
                    {{-- Revisa si existe definida una llave llamada 'header' --}}
                    @isset($link['header'])
                        <div class="px-2 py-2 text-xs font-semibold text-gray-500 uppercase">
                            {{ $link['header'] }}
                        </div>
                        {{-- Si no existe, usa la etiqueta como estaba definida antes --}}
                    @else
                        <a href="{{ $link['href'] }}" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100 group {{ $link['active'] ? 'bg-gray-100' : '' }}">
                            <span class="w-6 h-6 inline-flex justify-center items-center text-gray-500">
                                <i class="{{ $link['icon'] }}"></i>
                            </span>    
                            <span class="ms-3">{{ $link['name'] }}</span>
                        </a>
                    @endisset
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-gray-100 group">
                        <span class="w-6 h-6 inline-flex justify-center items-center text-gray-500">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                            </svg>
                        </span>
                        <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                        <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full">Pro</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
