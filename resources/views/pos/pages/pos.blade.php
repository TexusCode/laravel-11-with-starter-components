@extends('pos.layouts.app')
@section('content')
<div class="flex w-screen h-screen gap-2 p-2 bg-gray-10 font-ALSHaussRegular">
    <div class="flex flex-col justify-between w-20 gap-4 p-2 bg-green-20 rounded-3xl">
        <div class="flex items-center justify-center p-4 bg-white rounded-2xl">
            <img src="{{ asset('assets/logo/Favicon Green.svg') }}" alt="Logo" class="w-8 h-8">
        </div>
        <div class="flex flex-col items-center justify-center gap-2 p-2 bg-white rounded-2xl">
            <div class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
                <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clock-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20.926 13.15a9 9 0 1 0 -7.835 7.784" />
                    <path d="M12 7v5l2 2" />
                    <path d="M22 22l-5 -5" />
                    <path d="M17 22l5 -5" />
                </svg>
            </div>
            <div class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
                <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-receipt-refund">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                    <path d="M15 14v-2a2 2 0 0 0 -2 -2h-4l2 -2m0 4l-2 -2" />
                </svg>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
                    <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-power">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                        <path d="M12 4l0 8" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    {{-- Start Products --}}
    @livewire('products')
    {{-- End Products --}}
    {{-- Start Cart --}}
    @livewire('cart')
    {{-- End Cart --}}
    {{-- Start OrderPlace --}}
    @livewire('order-place')
    {{-- End OrderPlace --}}
</div>
@endsection