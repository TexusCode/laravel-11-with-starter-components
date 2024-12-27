<div class="w-[500px] bg-green-20 rounded-3xl relative p-2 flex flex-col gap-2 whitespace-nowrap">
    <p class="text-lg text-gray-40 bg-white p-2 rounded-2xl font-ALSHaussBold">Order #1</p>
    <div
        class="flex flex-col gap-2 overflow-y-scroll pr-1 h-full [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
        @foreach ($cart as $cart)

        <div class="w-full bg-white p-1 rounded-lg flex justify-between gap-4 items-center relative">
            <div class="flex gap-2 items-center">
                @if($cart->product->image)
                <img src="{{ asset('storage/'.$cart->product->image) }}" alt="Image"
                    class="h-10 w-10 rounded-md object-cover">
                @else
                <img src="{{ asset('assets/images/noimage.webp') }}" alt="Image"
                    class="h-10 w-10 rounded-md object-cover">
                @endif
                <div class="flex flex-col gap-1">
                    <p class="text-sm leading-none">{{ $cart->product->sku }}</p>
                    <p class="text-sm leading-none text-green-20 font-ALSHaussBold">{{ $cart->product->sell_price }}c
                    </p>
                </div>
            </div>
            <div class="bg-gray-300 p-1 rounded-lg">
                <button wire:click="minus({{ $cart->id }})" type="button"
                    class="{{ $cart->quantity === '1' ? 'bg-red-500 hover:bg-red-400 active:bg-red-600' :'bg-green-20 hover:bg-green-10 active:bg-green-30' }} text-white h-8 w-8 rounded-md">
                    {{ $cart->quantity === '1' ?'X':'-'}}</button>
                <label class="px-1">{{ $cart->quantity }}</label>
                <button wire:click="plus({{ $cart->id }})" type="button"
                    class="bg-green-20 hover:bg-green-10 active:bg-green-30 text-white h-8 w-8 rounded-md">+</button>
            </div>
        </div>
        @endforeach
    </div>
    <div class=" bg-white rounded-2xl p-4 gap-1 flex flex-col">
        <div class="flex justify-between items-center text-xl">
            <p class="font-ALSHaussRegular">Подытог:</p>
            <p class="font-ALSHaussBold">{{ $subtotal }}c</p>
        </div>
        <div class="flex justify-between items-center text-xl">
            <p class="font-ALSHaussRegular">Скидка:</p>
            <p class="font-ALSHaussBold">{{ $discount }}c</p>
        </div>
        <div class="flex justify-between items-center text-xl">
            <p class="font-ALSHaussRegular">Итог:</p>
            <p class="font-ALSHaussBold">{{ $total }}c</p>
        </div>
        <div class="border-t-2 border-gray-300 my-2 relative">
            <div class="w-4 h-4 bg-green-20 absolute left-[-22px] top-[-9px] rounded-full">

            </div>
            <div class="w-4 h-4 bg-green-20 absolute rounded-full right-[-22px] top-[-9px]">

            </div>
        </div>
        <button class="bg-green-20 text-white font-ALSHaussBold text-xl py-2 rounded-xl">Order place</button>
    </div>
</div>