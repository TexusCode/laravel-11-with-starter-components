@if($errors->any())
<div class="flex items-start w-full gap-2 p-3 mt-4 bg-red-500/20 rounded-xl">
    <img src="{{ asset('assets/icons/alert-square-rounded.svg') }}" alt="">
    <div class="flex flex-col">
        @foreach ($errors->all() as $message)
        <p class="text-base text-red-500 font-ALSHaussBold">{{ $message }}</p>
        @endforeach
    </div>
</div>
@endif
@if(session('message'))
<div class="flex items-start w-full gap-2 p-3 mt-4 bg-red-500/20 rounded-xl">
    <img src="{{ asset('assets/icons/alert-square-rounded.svg') }}" alt="">
    <p class="text-base text-red-500 font-ALSHaussBold">{{ session('message') }}</p>
</div>
@endif