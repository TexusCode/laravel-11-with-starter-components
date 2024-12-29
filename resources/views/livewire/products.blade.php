<div class="bg-white w-full rounded-3xl p-2 flex flex-col gap-2">
    <div class="w-full" x-data x-init="
        document.addEventListener('keydown', (event) => {
            if (event.ctrlKey && event.key === 'Enter') {
                event.preventDefault();
                document.getElementById('barcode').focus();
            }
        });">
        <div class="relative">
            <form wire:submit="search">
                <label class="absolute h-full flex justify-center items-center px-2">
                    <svg class="size-8 stroke-green-20 animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-qrcode">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M7 17l0 .01" />
                        <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M7 7l0 .01" />
                        <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M17 7l0 .01" />
                        <path d="M14 14l3 0" />
                        <path d="M20 14l0 .01" />
                        <path d="M14 14l0 3" />
                        <path d="M14 20l3 0" />
                        <path d="M17 17l3 0" />
                        <path d="M20 17l0 3" />
                    </svg>
                </label>
                <input type="text" id="barcode" wire:model="barcode" placeholder="Сканируйте товар (Ctrl+Enter)"
                    autofocus
                    class="border-green-20 pl-12 w-full border-2 rounded-2xl text-lg focus:ring-1 outline-none focus:ring-green-20 focus:border-2 focus:border-green-20 duration-300">
                <div class="absolute top-0 right-0 h-full p-2">
                    <button type="submit"
                        class="bg-green-20 hover:bg-green-10 active:bg-green-30 h-full px-3 rounded-lg text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-full rounded-2xl flex gap-2">
        <select wire:model.live="category"
            class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
            <option value="" selected disabled>Категории</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <select wire:model.live="brand"
            class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
            <option value="" selected disabled>Бренды</option>
            @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
        <select wire:model.live="supplier"
            class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
            <option value="" selected disabled>Поставщики</option>
            @foreach ($suppliers as $supplier)
            <option value="{{ $supplier->id }}">{{ $supplier->company_name }}</option>
            @endforeach
        </select>
        <button type="button" wire:click="clean_filter"
            class="px-3 py-2 bg-green-20 rounded-2xl text-white whitespace-nowrap">Сбросить филтр</button>

    </div>
    <div class="w-full bg-gray-10 rounded-2xl h-full p-2  overflow-hidden">
        <div
            class="flex flex-col gap-2 overflow-y-scroll h-full pr-2 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            @foreach ($products as $product)
            <div
                class="w-full bg-white p-1 rounded-lg flex justify-between gap-4 items-center relative whitespace-nowrap">
                <div class="flex gap-4 items-center w-full">
                    @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}" alt="Image"
                        class="h-10 w-10 rounded-md object-cover">
                    @else
                    <img src="{{ asset('assets/images/noimage.webp') }}" alt="Image"
                        class="h-10 w-10 rounded-md object-cover">
                    @endif
                    <div class="flex flex-col gap-1 basis-1/4">
                        <p class="text-sm leading-none max-w-56 line-clamp-1 whitespace-normal">{{$product->name}}</p>
                        <p class="text-sm leading-none text-green-20 font-ALSHaussBold">{{ $product->sell_price }}c</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm leading-none">Артикул:</p>
                        <p class="text-sm leading-none text-green-20 font-ALSHaussBold">{{
                            $product->sku }}</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm leading-none">Остаток:</p>
                        <p class="text-sm leading-none text-green-20 font-ALSHaussBold">{{
                            $product->quantity }}{{ $product->unit->name ?? 'шт' }}</p>
                    </div>
                </div>
                <div>
                    <button wire:click="add_to_cart({{ $product->id }})"
                        class="bg-green-20 hover:bg-green-10 active:bg-green-30 text-white h-full p-2 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M12.5 21h-3.926a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304h11.339a2 2 0 0 1 1.977 2.304l-.263 1.708" />
                            <path d="M16 19h6" />
                            <path d="M19 16v6" />
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                        </svg>
                    </button>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>