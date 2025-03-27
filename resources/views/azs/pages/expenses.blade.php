@extends('azs.layouts.app')
@section('content')
@include('azs.partials.homebutton')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="flex items-center gap-4 mb-5 text-4xl font-bold text-center text-white uppercase">
        <h1>Дневные расходы</h1>
    </div>
    <div class="max-w-[800px] min-w-[500px] font-bold">
        <form id="myForm" action="{{ route('expensespost') }}" method="POST"
            class="flex flex-col p-2 bg-yellow-500 rounded-xl">
            @csrf
            <label class="block w-full py-2 overflow-hidden rounded-md">
                <span class="text-xl font-medium text-black">Цена:</span>
                <input type="number" name="price" placeholder="50" required
                    class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
            </label>
            <label class="block w-full py-2 overflow-hidden rounded-md">
                <span class="text-xl font-medium text-black">Описание:</span>
                <input type="text" name="description" placeholder="На что потрачено?" required
                    class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
            </label>
            <button id="submitBtn" type="submit"
                class="py-2 mt-2 text-white duration-200 bg-black rounded-lg hover:bg-white hover:text-black">Добавить</button>
            <div id="spinner" class="spinner"></div>
        </form>
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
        @if($expenses)
        <div class="max-w-[800px] min-w-[500px] font-bold rounded-xl overflow-hidden mt-4">
            <div
                class="bg-yellow-500  p-2 grid grid-cols-1 gap-2 max-h-[400px] overflow-y-auto   [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="grid w-full grid-cols-5 gap-4 p-2 text-white bg-black rounded-lg">
                    <div>
                        Цена
                    </div>
                    <div class="col-span-3">
                        Описание
                    </div>
                    <div class="">
                        Описание
                    </div>

                </div>
                @foreach ($expenses as $expense)
                <div class="grid w-full grid-cols-5 gap-4 p-2 bg-white rounded-lg">
                    <div>
                        {{ $expense->price }}
                    </div>
                    <div class="col-span-3">
                        {{ $expense->description }}
                    </div>
                    <div class="">
                        {{ $expense->created_at->format('d.m | H:i') }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
@section('scripts')
@endsection