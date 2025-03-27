@extends('azs.layouts.app')
@section('content')
@include('azs.partials.homebutton')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="flex items-center gap-4 mb-5 text-4xl font-bold text-center text-white uppercase">
        <h1>напишите сколко литров топливо продали</h1>
    </div>
    <div class="max-w-[1000px] min-w-[500px] font-bold">
        <form id="myForm" action="{{ route('closepost') }}" method="POST"
            class="flex flex-col p-2 bg-yellow-500 rounded-xl">
            @csrf
            <div class="flex gap-4">
                <label class="block w-full py-2 overflow-hidden rounded-md">
                    <span class="text-xl font-medium text-black">Бензин 92 в литр:</span>
                    <input type="number" name="benzin92" placeholder="50" required
                        class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
                </label>
                <label class="block w-full py-2 overflow-hidden rounded-md">
                    <span class="text-xl font-medium text-black">Бензин 95 в литр:</span>
                    <input type="number" name="benzin95" placeholder="50" required
                        class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
                </label>
            </div>
            <div class="flex gap-4">
                <label class="block w-full overflow-hidden rounded-md">
                    <span class="text-xl font-medium text-black">Газ в литр:</span>
                    <input type="number" name="gas" placeholder="50" required
                        class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
                </label>
                <label class="block w-full overflow-hidden rounded-md">
                    <span class="text-xl font-medium text-black">Дизель в литр:</span>
                    <input type="number" name="diesel" placeholder="50" required
                        class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
                </label>
            </div>
            <label class="block w-full py-2 overflow-hidden rounded-md">
                <span class="text-xl font-medium text-black">Электричество в сомони:</span>
                <input type="text" name="electro" placeholder="1000" required
                    class="w-full p-2 mt-1 text-xl border-none rounded-lg" />
            </label>
            <button id="submitBtn" type="submit"
                class="py-2 mt-2 text-white duration-200 bg-black rounded-lg hover:bg-white hover:text-black">Закрыт
                смену</button>
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
        @if($close)
        <div class="max-w-[1000px] min-w-[500px] font-bold rounded-xl overflow-hidden mt-4">
            <div
                class="bg-yellow-500  p-2 grid grid-cols-1 gap-2 max-h-[200px] overflow-y-auto   [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="grid w-full grid-cols-6 gap-4 p-2 text-white bg-black rounded-lg">
                    <div>
                        Отчеты
                    </div>

                </div>
                @foreach ($close as $close)
                <div class="grid w-full grid-cols-4 p-2 bg-white rounded-lg gap-x-4">
                    <div>
                        Бензин 92 ({{ $close->benzin92 }}л - {{ $close->benzin92summ }}с)
                    </div>
                    <div>
                        Бензин 95 ({{ $close->benzin95 }}л - {{ $close->benzin95summ }}с)
                    </div>
                    <div>
                        Газ ({{ $close->gas }}л - {{ $close->gassumm }}с)
                    </div>
                    <div>
                        Дизель ({{ $close->diesel }}л - {{ $close->dieselsumm }}с)
                    </div>
                    <div>
                        Электричество ({{ $close->electro }}с)
                    </div>
                    <div>
                        Сумма продажа ({{ $close->summ }}с)
                    </div>
                    <div>
                        Расходы ({{ $close->ras }}с)
                    </div>
                    <div>
                        Зачислено бонус ({{ $close->bonus }}с)
                    </div>

                    <div class="col-span-4 text-xl text-center text-red-500">
                        Остаток в кассе: {{ $close->nal }} | {{ $close->created_at }}
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