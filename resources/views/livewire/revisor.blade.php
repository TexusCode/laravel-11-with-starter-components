<div class="max-w-sm bg-white p-5 rounded-xl space-y-3 w-full flex justify-center flex-col">
    <label for="" class="text-gray-700 text-center text-xl">Сканируйте штрих-код товра</label>
    <form wire:submit="search" class="relative w-full h-12 border-2 border-green-20 rounded-2xl overflow-hidden">
        <input type="text" wire:model="barcode" class="w-full text-center h-full focus:outline-none focus:border-none border-none outline-none focus:ring-0">
    </form>
    @if ($product)
        salom
    @endif
</div>
