@extends('azs.layouts.app')
@section('content')
@include('azs.partials.homebutton')
@include('azs.partials.on-cash')
@include('azs.partials.off-cash')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="flex items-center gap-4 mb-5 text-4xl font-bold text-center text-white uppercase">
        <h1>Карта номер #00{{ $qrcode->id }}</h1>
    </div>
    <div class="max-w-[500px] min-w-[500px] font-bold">
        <div class="flex flex-col p-2 bg-yellow-500 rounded-xl">
            <div class="w-full p-2 text-4xl bg-white rounded-lg">
                <div class="text-center">
                    Бонусы:
                    {{round($qrcode->balance, 2) }} сомони
                </div>
                <div class="grid grid-cols-2 gap-2 mt-3">
                    <button class="px-3 py-2 text-xl text-white bg-green-500 rounded-md hover:bg-green-600"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-static-backdrop-modal"
                        data-hs-overlay="#hs-static-backdrop-modal">Зачислить бонус</button>
                    <button class="px-3 py-2 text-xl text-white bg-red-500 rounded-md hover:bg-red-600"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-static-backdrop-modal-1"
                        data-hs-overlay="#hs-static-backdrop-modal-1">Снять бонус</button>
                </div>
            </div>
            <div class="p-2 mt-4 text-2xl text-black bg-white rounded-lg">
                <p class="font-normal">Имя клиента: <span class="font-bold">{{ $qrcode->firstname }}</span></p>
                <p class="font-normal">Номер телефон: <span class="font-bold">+{{ $qrcode->phone }}</span></p>
                <p class="font-normal">Статус карта: <span class="font-bold">
                        @if($qrcode->status === 'active')
                        Активно
                        @else
                        Блокировано
                        @endif
                    </span></p>
                <p class="font-normal">Дата регистрация: <span class="font-bold">{{ $qrcode->created_at->format('d.m.Y /
                        H:i') }}
                    </span></p>
            </div>
        </div>
        @if (isset($info))
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
                        {{ $info }}
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
</div>
@endsection
@section('scripts')
@endsection