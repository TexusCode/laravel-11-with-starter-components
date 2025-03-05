<div class="max-w-sm bg-white p-5 rounded-xl space-y-3 w-full flex justify-center flex-col">
    <label for="" class="text-gray-700 text-center text-xl">Сканируйте штрих-код товра</label>
    <form wire:submit="search" class="relative w-full h-12 border-2 border-green-20 rounded-2xl overflow-hidden">
        <input type="text" wire:model="barcode" placeholder="Штрихкод товара"
            class="w-full text-center h-full focus:outline-none focus:border-none border-none outline-none focus:ring-0">
    </form>
    @if ($product)
    <div class="bg-green-20 p-4 text-white rounded-xl text-lg space-y-2">
        <p>Имя товара: <span class="font-bold ">{{ $product->name }}</span></p>
        <p>Кол: <span class="font-bold">{{ $product->quantity }}{{ $product->unit->name }}</span></p>
        @if($last_revision)
        <p>Последный ревизия: <span class="font-bold">{{ $last_revision->created_at->format('d.m.Y | h:i') }}</span></p>

        @endif
        <form wire:submit="save" class="space-y-2">
            <input type="text" wire:model="quantity" class="text-black w-full rounded-xl"
                placeholder="Настояший количество товара">
            <div class="grid grid-cols-2 gap-3">
                <button type="submit" class="bg-yellow-500 text-white py-2 rounded-xl">Применить</button>
                <button type="button" wire:click="close" class="bg-red-500 text-white py-2 rounded-xl">Оставить</button>
            </div>
        </form>
    </div>
    @endif
    @if($message)
    <div class="bg-orange-100 text-orange-500 font-bold px-2 py-2 rounded-xl flex gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-info-circle">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
            <path d="M12 9h.01" />
            <path d="M11 12h1v4h1" />
        </svg>
        {{ $message }}
    </div>
    @endif
</div>