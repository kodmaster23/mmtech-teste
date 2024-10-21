<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
     @vite('resources/css/app.css')
     @livewireStyles
</head>

<header class="bg-gray-600">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex">
                <a href="{{ route('members.index') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium"
                    aria-current="page">Membros</a>

            </div>
        </div>
    </nav>
</header>

<body>
    {{ $slot }}

    @livewireScripts
    @livewireScriptConfig

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
</body>

</html>
