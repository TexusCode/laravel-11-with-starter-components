<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
    <form wire:submit='search' class="flex space-x-2">
        <input type="text" wire:model='barcode' placeholder="Введите штрихкод" 
               class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="submit" 
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Поиск</button>
    </form>

    @if ($product)
        <div class="p-4 bg-gray-100 rounded-md">
            <p class="text-lg font-semibold">Название товара: <span class="font-normal">{{ $product->name }}</span></p>
            <p class="text-lg font-semibold">Штрихкод: <span class="font-normal">{{ $product->sku }}</span></p>
            <p class="text-lg font-semibold">Текущее количество: <span class="font-normal">{{ $product->quantity }} шт</span></p>
        </div>

        <form wire:submit='update' class="flex space-x-2 mt-4">
            <input type="text" wire:model='quantity' placeholder="Новое количество" 
                   class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" 
                    class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Обновить</button>
        </form>
    @endif

    @if ($message)
        <p class="mt-4 p-2 text-center bg-yellow-100 text-yellow-800 rounded-md">{{ $message }}</p>
    @endif
</div>
