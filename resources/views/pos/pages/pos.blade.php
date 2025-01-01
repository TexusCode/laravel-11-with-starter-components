@extends('pos.layouts.app')
@section('content')
<div class="flex w-screen h-screen gap-2 p-2 bg-gray-10 font-ALSHaussRegular">
    <div class="flex flex-col justify-between w-20 gap-4 p-2 bg-green-20 rounded-3xl">
        <div class="flex items-center justify-center p-4 bg-white rounded-2xl">
            <img src="{{ asset('assets/logo/Favicon Green.svg') }}" alt="Logo" class="w-8 h-8">
        </div>
        @livewire('menu')
    </div>
    {{-- Start Products --}}
    @livewire('products')
    {{-- End Products --}}
    {{-- Start Cart --}}
    @livewire('cart')
    {{-- End Cart --}}
    {{-- Start OrderPlace --}}
    <div class="absolute">
        @livewire('order-place')
        @livewire('return-product')
        @livewire('chanes')
        @livewire('pay-debt')
    </div>
    {{-- End OrderPlace --}}
</div>
@endsection