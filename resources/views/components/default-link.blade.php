<div class="{{ $class }} inline-flex gap-x-2">
    <a href="{{ $link }}" aria-label="{{ $text }}" class="inline-flex items-center px-3 py-2 text-lg font-medium text-white border border-transparent rounded-lg gap-x-2 bg-green-20 hover:bg-green-10 focus:outline-none focus:bg-green-30 disabled:opacity-50 disabled:pointer-events-none">

        @if($icon)
        <img src="{{ $icon }}" alt="{{ $icon }}" class="size-5">
        @endif

        {{ $text }}
    </a>
</div>
