<p
    class="{{ $class }} text-[16px] {{ $font == 'bold' ? 'font-ALSHaussBold' : 'font-ALSHaussRegular' }} leading-none {{ ($color == 'green' ? 'text-green-20' : 'text-gray-20' && $color == 'black') ? 'text-gray-40' : 'text-gray-20' }}">
    {{ $text }}
</p>
