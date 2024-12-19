<div class="{{ $class }}">
    <a href="{{ $link }}" class=" text-[16px] relative
           {{ $font == 'bold' ? 'font-ALSHaussBold' : 'font-ALSHaussRegular' }}
           leading-none
           {{ $color == 'green' ? 'text-green-20' : ($color == 'black' ? 'text-gray-40' : 'text-gray-20') }}">
        {{ $text }}
    </a>
</div>
