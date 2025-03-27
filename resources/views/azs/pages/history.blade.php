@extends('azs.layouts.app')
@section('content')
@include('azs.partials.homebutton')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="flex items-center gap-4 mb-5 text-4xl font-bold text-center text-white uppercase">
        <h1>история транзакции</h1>
    </div>
    <div class="max-w-[800px] min-w-[500px] font-bold rounded-xl overflow-hidden">
        <div
            class="bg-yellow-500  p-2 grid grid-cols-1 gap-2 max-h-[400px] overflow-y-auto   [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <div class="grid w-full grid-cols-3 gap-4 p-2 text-white bg-black rounded-lg">
                <div>
                    Тип операция
                </div>
                <div class="">
                    Цумма - Тип топливо
                </div>
                <div class="">
                    Время транзакция
                </div>
            </div>
            @foreach ($history as $history)
            <div class="grid w-full grid-cols-3 gap-4 p-2 bg-white rounded-lg">
                <div>
                    Карта №{{ $history->cardid }} | {{ $history->operationtype }}
                </div>
                <div class="">
                    {{ round($history->cash, 2) }}c - {{ $history->fueltype }}
                </div>
                <div class="">
                    {{ $history->created_at ?? "не определено"}}
                </div>
            </div>
            @endforeach
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
</div>
@endsection
@section('scripts')
@endsection