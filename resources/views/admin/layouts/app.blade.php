<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/logo/Favicon Green.svg') }}" type="image/x-icon">
    <title>Texus.POS - {{ $title ?? "Управление продажами и товарами" }}</title>
    @include('global.vite')
    @yield('styles')
</head>

<body>

    <div class="sticky top-0 inset-x-0 z-20 bg-green-20 border-y px-4 sm:px-6 lg:px-8 lg:hidden">
        <div class="flex items-center py-2 justify-between">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('assets/logo/Logo White.svg') }}" alt="Logo" class="h-7">
            </a>
            <button type="button"
                class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                <svg class="stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </button>
        </div>
    </div>
    <div id="hs-application-sidebar"
        class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[260px] h-full hidden fixed inset-y-0 start-0 z-[60] bg-green-20 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 "
        role="dialog" tabindex="-1" aria-label="Sidebar">
        <div class="relative flex flex-col h-full max-h-full">
            <div
                class="font-ALSHaussRegular h-full overflow-y-auto [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="px-4 pt-4">
                    <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                        href="{{ route('dashboard') }}" aria-label="Preline">
                        <img src="{{ asset('assets/logo/Logo White.svg') }}" alt="Logo" class="h-12">
                    </a>
                </div>
                @include('admin.partials.sidebar')
            </div>
        </div>
    </div>

    <div class="w-full px-4 py-4  lg:ps-72">
        <main>
            <div class="mb-4">
                @include('admin.partials.message-session')
            </div>
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>

</html>