@extends('azs.layouts.app')
@section('content')
@include('azs.partials.homebutton')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="flex items-center gap-4 mb-5 text-4xl font-bold text-center text-white uppercase">
        <h1>Введите данные клиента<br>для регистрации карты</h1>
    </div>
    <div class="max-w-[500px] min-w-[500px] font-bold">
        <form id="myForm" action="{{ route('registercardsuccesspost') }}" method="POST"
            class="flex flex-col p-2 bg-yellow-500 rounded-xl">
            @csrf
            <label class="block w-full py-2 overflow-hidden rounded-md">
                <span class="text-xl font-medium text-black"> ID карта </span>
                <input type="password" name="qrcode" placeholder="" value="{{ $qrcode }}" required
                    class="w-full p-2 mt-3 text-xl border-none rounded-lg" />
            </label>
            <label class="block w-full py-2 overflow-hidden rounded-md">
                <span class="text-xl font-medium text-black"> Имя клиента: </span>
                <input type="text" name="firstname" placeholder="Абубакр" required
                    class="w-full p-2 mt-3 text-xl border-none rounded-lg" />
            </label>
            <label class="block w-full py-2 overflow-hidden rounded-md">
                <span class="text-xl font-medium text-black"> Номер телефон клиента: </span>
                <input type="number" name="phone" value="992" required
                    class="w-full p-2 mt-3 text-xl border-none rounded-lg" />
            </label>
            <button id="submitBtn" type="submit"
                class="py-2 mt-2 text-white duration-200 bg-black rounded-lg hover:bg-white hover:text-black">Регистрация</button>
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
    </div>
</div>
@endsection
@section('scripts')
@endsection