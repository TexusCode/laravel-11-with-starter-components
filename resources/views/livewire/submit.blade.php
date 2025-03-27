<div>
    <button
    type="submit"
    class="mt-4 bg-black hover:bg-white hover:text-black duration-200 text-white rounded-lg py-2"
    wire:loading.attr="disabled"
>
    {{ $text }}
</button>

<!-- Спиннер или текст "Загрузка..." во время загрузки -->
<div wire:loading class="mt-4 text-center">
    <span class="text-gray-500">Загрузка...</span>
</div>
</div>
