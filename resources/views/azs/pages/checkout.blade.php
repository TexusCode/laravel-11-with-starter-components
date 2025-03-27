@extends('azs.layouts.app')
@section('content')
@include('azs.partials.homebutton')
<div class="flex flex-col items-center justify-center w-screen h-screen bg-black select-none">
    <div class="flex items-center gap-4 mb-5 text-4xl font-bold text-white uppercase">
        <h1>отсканируйте карту</h1>
    </div>
    <div class="max-w-[500px] min-w-[500px] font-bold">
        <form action="{{ route('checkoutpost') }}" method="POST" class="flex gap-2 p-2 bg-yellow-500 rounded-xl">
            @csrf
            <div class="p-2 bg-white rounded-lg">
                <img src="{{ asset('assets/icons8-qr-код.gif') }}" alt="qr" class="size-14">
            </div>
            <input type="password" id="focus-input" name='qrcode'
                class="bg-white text-4xl rounded-lg border-none text-center ring-0 outline-0 max-w-[350px]">
            <button taype="submit"
                class="px-3 text-4xl text-white duration-200 bg-black rounded-lg hover:bg-white hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-big-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M4 9h8v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1z" />
                </svg>
            </button>
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
<script>
    window.onload = function() {
        document.getElementById('focus-input').focus();
    };
</script>

@endsection