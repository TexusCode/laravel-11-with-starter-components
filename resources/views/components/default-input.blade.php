<div class="{{ $class }} w-full space-y-3 font-ALSHaussRegular">
    <div class="relative">
        <input type="{{ $type }}" id="{{ $id }}" class="peer p-4 block w-full border-gray-200 rounded-lg text-lg placeholder:text-transparent focus:border-green-20 duration-300 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none
    focus:pt-6
    focus:pb-2
    [&:not(:placeholder-shown)]:pt-6
    [&:not(:placeholder-shown)]:pb-2
    autofill:pt-6
    autofill:pb-2" placeholder="{{ $placeholder }}" value="{{ $value }}" name="{{ $name }}" {{ $required==='on'
            ? 'required' :'' }}>



        <label for="{{ $id }}" class="absolute top-0 start-0 p-4 h-full text-lg truncate pointer-events-none transition ease-in-out duration-100 border border-transparent  origin-[0_0] peer-disabled:opacity-50 peer-disabled:pointer-events-none

      peer-focus:scale-90
      peer-focus:translate-x-0.5
      peer-focus:-translate-y-2
      peer-focus:text-gray-500
      peer-focus:text-base
      peer-[:not(:placeholder-shown)]:text-base
      peer-[:not(:placeholder-shown)]:scale-90
      peer-[:not(:placeholder-shown)]:translate-x-0.5
      peer-[:not(:placeholder-shown)]:-translate-y-2
      peer-[:not(:placeholder-shown)]:text-gray-500">{{ $placeholder }}</label>
    </div>

</div>