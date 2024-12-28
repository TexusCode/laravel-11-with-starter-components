@extends('pos.layouts.app')
@section('content')
<div class="flex gap-2 h-screen w-screen p-2 bg-gray-10 font-ALSHaussRegular">
    <div class="w-20 bg-green-20 rounded-3xl p-2 flex flex-col gap-4 justify-between">
        <div class=" bg-white flex justify-center items-center rounded-2xl p-4">
            <img src="{{ asset('assets/logo/Favicon Green.svg') }}" alt="Logo" class="w-8 h-8">
        </div>
        <div class=" bg-white flex flex-col gap-2 justify-center items-center rounded-2xl p-2">
            <div class="bg-green-20 hover:bg-green-10 active:bg-green-30 p-2 rounded-xl">
                <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-power">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                    <path d="M12 4l0 8" />
                </svg>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-green-20 hover:bg-green-10 active:bg-green-30 p-2 rounded-xl">
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