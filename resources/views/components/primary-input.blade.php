<div class="{{ $class }}">

    @if($style==="green")
    <div class="relative">
        <input @if($model) wire.model.live="{{ $model }}" @endif value="{{ $value }}" placeholder="{{ $placeholder }}" name="{{ $name }}" type="{{ $type }}" id="{{ $id }}" class=" text-[18px] {{ $icon ? 'pl-[60px]':'pl-[20px]' }} pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-green-10 focus:ring-2 focus:ring-green-10 w-full rounded-full font-ALSHaussRegular duration-300">
        @if($icon)
        <div class="absolute w-[42px] h-[42px] bg-gray-10 rounded-full left-2 top-2 flex justify-center items-center overflow-hidden">

            <img src="{{ $icon }}" alt="{{ $icon }}" class="icon">
        </div>
        @endif
    </div>
    @elseif ($style==="orange")
    <div class="relative">
        <input @if($model) wire.model.live="{{ $model }}" @endif value="{{ $value }}" placeholder="{{ $placeholder }}" name="{{ $name }}" type="{{ $type }}" id="{{ $id }}" class=" text-[18px] {{ $icon ? 'pl-[60px]':'pl-[20px]' }} pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-orange-30 focus:ring-2 focus:ring-orange-30 w-full rounded-full font-ALSHaussRegular duration-300">

        @if($icon)
        <div class="absolute w-[42px] h-[42px] bg-gray-10 rounded-full left-2 top-2 flex justify-center items-center overflow-hidden">

            <img src="{{ $icon }}" alt="{{ $icon }}" class="icon">
        </div>
        @endif
    </div>

    @endif


</div>
