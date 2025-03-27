@extends('azs.layouts.app')
@section('content')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="mb-5 font-bold text-white uppercase text-7xl">AZS Safina</div>
    <div class="grid grid-cols-4  max-w-4xl min-w-[800px] gap-4 font-bold">
        <a href="{{ route('checkout') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Открыть<br> касса
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-scan">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7v-1a2 2 0 0 1 2 -2h2" />
                    <path d="M4 17v1a2 2 0 0 0 2 2h2" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v1" />
                    <path d="M16 20h2a2 2 0 0 0 2 -2v-1" />
                    <path d="M5 12l14 0" />
                </svg>
            </div>
        </a>
        <a href="{{ route('close') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Закрыть<br> смену
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                </svg>
            </div>
        </a>
        <a href="{{ route('registercard') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Регистрация карта
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                    <path d="M3 10h18" />
                    <path d="M16 19h6" />
                    <path d="M19 16l3 3l-3 3" />
                    <path d="M7.005 15h.005" />
                    <path d="M11 15h2" />
                </svg>
            </div>
        </a>
        <a href="{{ route('partner') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Добавит партнер
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card-pay">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 19h-6a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />
                    <path d="M3 10h18" />
                    <path d="M16 19h6" />
                    <path d="M19 16l3 3l-3 3" />
                    <path d="M7.005 15h.005" />
                    <path d="M11 15h2" />
                </svg>
            </div>
        </a>

        <a href="{{ route('expenses') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Дневные расходы
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-dots">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 3v18h18" />
                    <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M10.16 10.62l2.34 2.88" />
                    <path d="M15.088 13.328l2.837 -4.586" />
                </svg>
            </div>
        </a>
        <a href=""
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Список<br> карты
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-check">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                    <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                    <path d="M11 6l9 0" />
                    <path d="M11 12l9 0" />
                    <path d="M11 18l9 0" />
                </svg>
            </div>
        </a>
        <a href=""
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Заработки и расходы
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-report-money">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M12 17v1m0 -8v1" />
                </svg>
            </div>
        </a>
        <a href="{{ route('fuelnorm') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            Норма топлива
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-credit-card">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                    <path d="M3 10l18 0" />
                    <path d="M7 15l.01 0" />
                    <path d="M11 15l2 0" />
                </svg>
            </div>
        </a>
        <a href="{{ route('history') }}"
            class="relative h-32 p-4 overflow-hidden text-2xl text-black duration-150 bg-yellow-500 hover:bg-yellow-400 hover:text-yellow-700 rounded-xl font-fold peer">
            История транзакции
            <div class="absolute bottom-0 right-0 w-20 h-20 bg-white rounded-tl-full ">
                <svg class="absolute bottom-3 right-3 size-10" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-history">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 8l0 4l2 2" />
                    <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
                </svg>
            </div>
        </a>

    </div>
    @if(session('info'))
    <div id="dismiss-alert"
        class="p-4 mt-4 text-sm text-orange-800 transition duration-300 border border-orange-200 rounded-lg hs-removing:translate-x-5 hs-removing:opacity-0 bg-orange-50"
        role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
        <div class="flex">
            <div class="shrink-0">
                <svg class="shrink-0 size-6 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                    <path d="M12 9h.01" />
                    <path d="M11 12h1v4h1" />
                </svg>
            </div>
            <div class="ms-2">
                <h3 id="hs-dismiss-button-label" class="text-xl font-medium">
                    {{ session('info') }}
                </h3>
            </div>
            <div class="ps-3 ms-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button"
                        class="inline-flex bg-orange-50 rounded-lg p-1.5 text-orange-500 hover:bg-orange-100 focus:outline-none focus:bg-orange-100"
                        data-hs-remove-element="#dismiss-alert">
                        <span class="sr-only">Dismiss</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection