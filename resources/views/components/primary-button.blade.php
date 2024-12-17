@if($style ==="green")
<div class="">
    <button type="{{ $type }}" aria-label="{{ $text }}" @if($click) wire:click="{{ $click }}" @endif class="{{ $class }} group font-ALSHaussBold grid grid-flow-col items-center justify-center outline-none duration-150 py-3 px-5 font-bold text-lg leading-5.8 gap-2 bg-green-20 text-white hover:bg-green-10 active:bg-green-30 disabled:bg-grey disabled:text-darkGrey w-full rounded-full">{{ $text }}
        @if($icon)
        <img src="{{ $icon }}" alt="{{ $icon }}" class="ml-2 size-5">
        @endif
    </button>
</div>
@elseif ($style === "orange")
<div class="">
    <button type="{{ $type }}" aria-label="{{ $text }}" @if($click) wire:click="{{ $click }}" @endif class="{{ $class }} group font-ALSHaussBold grid grid-flow-col items-center justify-center outline-none duration-150 py-3 px-5 font-bold text-lg leading-5.8 gap-2 bg-orange-30 text-white hover:bg-orange-20 active:bg-orange-30/20 active:text-orange-30 disabled:bg-grey disabled:text-darkGrey w-full rounded-full">{{ $text }}
        @if($icon)
        <img src="{{ $icon }}" alt="{{ $icon }}" class="ml-2 size-5">
        @endif
    </button>
</div>
@endif
