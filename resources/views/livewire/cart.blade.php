<div class="w-[600px] bg-green-20 rounded-3xl p-2 flex flex-col gap-2 whitespace-nowrap">
    <div class="flex bg-white p-1 rounded-2xl justify-between items-center">
        <p class="text-lg text-gray-40  font-ALSHaussBold ml-1">Заказ №000{{ $order_no }}</p>
        <div class="flex gap-1">
            <button type="button" wire:click="hotkey"
                class="bg-green-20 hover:bg-green-10 active:bg-green-30 p-1 text-white rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-command">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 9a2 2 0 1 1 2 -2v10a2 2 0 1 1 -2 -2h10a2 2 0 1 1 -2 2v-10a2 2 0 1 1 2 2h-10" />
                </svg>
            </button>
            <button type="button" wire:click="stop_cart"
                class="bg-blue-500 hover:bg-blue-400 active:bg-blue-600 p-1 text-white rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-hand-stop">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 13v-7.5a1.5 1.5 0 0 1 3 0v6.5" />
                    <path d="M11 5.5v-2a1.5 1.5 0 1 1 3 0v8.5" />
                    <path d="M14 5.5a1.5 1.5 0 0 1 3 0v6.5" />
                    <path
                        d="M17 7.5a1.5 1.5 0 0 1 3 0v8.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7a69.74 69.74 0 0 1 -.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47" />
                </svg>
            </button>
            <button type="button" id="discount" wire:click="all_discount_modal_opener"
                class="bg-amber-500 hover:bg-amber-400 active:bg-amber-600 p-1 text-white rounded-xl" x-data x-init="
                    document.addEventListener('keydown', (event) => {
                        if (event.shiftKey && event.key === 'D') {
                            event.preventDefault();
                            document.getElementById('discount').click();
                        }
                    });
                ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 15l6 -6" />
                    <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                    <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                    <path
                        d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                </svg>
            </button>
            <button wire:click="clean_cart" type="button"
                class="bg-red-500 hover:bg-red-400 active:bg-red-600 p-1 text-white rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M13 21h-4.426a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304h11.339a2 2 0 0 1 1.977 2.304l-.506 3.287" />
                    <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                    <path d="M22 22l-5 -5" />
                    <path d="M17 22l5 -5" />
                </svg>
            </button>
        </div>
    </div>
    @if($carts->count()>1)
    <div class="bg-white p-2 rounded-2xl grid grid-cols-3 gap-2">
        @foreach ($carts as $cart)
        <button type="button" wire:click="selected_cart_id({{ $cart->id }})"
            class="bg-green-20 hover:bg-green-10 active:bg-green-30 py-1 px-3 rounded-xl text-white text-center">
            <p>Корзина №{{ $cart->id }}</p>
        </button>
        @endforeach
    </div>
    @endif
    <div
        class="flex flex-col gap-2 overflow-y-scroll pr-1 h-full [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
        @foreach ($items as $item)

        <div class="w-full bg-white p-1 rounded-lg flex justify-between gap-4 items-center relative">
            <div class="flex gap-2 items-center">
                @if($item->product->image)
                <img src="{{ asset('storage/'.$item->product->image) }}" alt="Image"
                    class="h-10 w-10 rounded-md object-cover">
                @else
                <img src="{{ asset('assets/images/noimage.webp') }}" alt="Image"
                    class="h-10 w-10 rounded-md object-cover">
                @endif
                <div class="flex flex-col gap-1">
                    <p class="text-sm leading-none">{{ $item->product->sku }}</p>
                    <p class="text-sm leading-none text-green-20 font-ALSHaussBold">{{ $item->product->sell_price }}c
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-1">
                <button wire:click="minus({{ $item->id }})" type="button"
                    class="bg-red-500 hover:bg-red-400 active:bg-red-600 text-white p-1 rounded-md">
                    {{-- {{ $item->quantity === '1' ?'X':'-'}} --}}
                    @if($item->quantity > 1)
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-circle-minus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M9 12l6 0" />
                    </svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 7l16 0" />
                        <path d="M10 11l0 6" />
                        <path d="M14 11l0 6" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg>
                    @endif
                </button>
                <label class="px-1 w-7 text-center text-base">{{ $item->quantity }}</label>
                <button wire:click="plus({{ $item->id }})" type="button"
                    class="bg-green-20 hover:bg-green-10 active:bg-green-30 text-white p-1 rounded-md">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                        <path d="M9 12h6" />
                        <path d="M12 9v6" />
                    </svg>
                </button>
            </div>
            <div class="mr-1">
                <button wire:click="item_discount_modal_opene({{ $item->id }})" type="button"
                    class="bg-amber-500 hover:bg-amber-400 active:bg-amber-600 text-white p-1 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-rosette-discount">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 15l6 -6" />
                        <circle cx="9.5" cy="9.5" r=".5" fill="currentColor" />
                        <circle cx="14.5" cy="14.5" r=".5" fill="currentColor" />
                        <path
                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7a2.2 2.2 0 0 0 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1a2.2 2.2 0 0 0 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1" />
                    </svg>
                </button>
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
        <button type="button" id="payment" wire:click="order_place"
            class="bg-green-20 flex items-center gap-2 justify-center hover:bg-green-10 active:bg-green-30 text-white font-ALSHaussBold text-xl py-2 rounded-xl"
            x-data x-init="
                document.addEventListener('keydown', (event) => {
                    if (event.shiftKey && event.key === 'Enter') {
                        event.preventDefault();
                        document.getElementById('payment').click();
                    }
                });
            ">
            <span>Оплатить</span>
            <svg wire:loading class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-loader">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 6l0 -3" />
                <path d="M16.25 7.75l2.15 -2.15" />
                <path d="M18 12l3 0" />
                <path d="M16.25 16.25l2.15 2.15" />
                <path d="M12 18l0 3" />
                <path d="M7.75 16.25l-2.15 2.15" />
                <path d="M6 12l-3 0" />
                <path d="M7.75 7.75l-2.15 -2.15" />
            </svg>
        </button>
    </div>

    {{-- Modals --}}
    @if($discount_modal)
    <div class="absolute duration-500 top-0 left-0 bg-green-20/60 w-full h-full flex justify-center items-center">
        <div class="w-56 bg-white rounded-3xl p-4 relative">
            <p class="text-base mb-4 max-w-32 whitespace-normal leading-5">{{ $discount_modal_type == "item" ?
                'Скидка
                для одного
                товара' : 'Скидка для всех товаров' }}
            </p>
            <div class="grid gap-4">
                <select wire:model.live="discount_type"
                    class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
                    <option value="fixed">Фиксированный</option>
                    <option value="percent">Просентный</option>
                </select>
                <input type="number" wire:model.live="discount_model" placeholder="Скидка"
                    class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
                <button type="button" wire:click="add_discount"
                    class="bg-green-20 hover:bg-green-10 active:bg-green-30 text-white font-ALSHaussRegular text-xl py-2 rounded-xl">Применить</button>
            </div>
            <button type="button" wire:click="discount_modal_close"
                class="absolute top-3 right-3 text-red-500 hover:text-red-400 active:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>

            </button>
        </div>
    </div>
    @endif

</div>