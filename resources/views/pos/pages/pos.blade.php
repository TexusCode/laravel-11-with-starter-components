@extends('pos.layouts.app')
@section('content')
<div class="flex gap-2 h-screen w-screen p-2 bg-gray-10 font-ALSHaussRegular">
    <div class="w-20 bg-green-20 rounded-3xl p-2 flex flex-col gap-4 justify-between">
        <div class=" bg-white flex justify-center items-center rounded-2xl p-4">
            <img src="{{ asset('assets/logo/Favicon Green.svg') }}" alt="Logo" class="w-8 h-8">
        </div>
        <div class=" bg-white flex flex-col gap-2 justify-center items-center rounded-2xl p-2">
            <div class="bg-green-20 hover:bg-green-10 active:bg-green-30 p-2 rounded-xl">
                <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-power">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                    <path d="M12 4l0 8" />
                </svg>
            </div>
            <div class="bg-green-20 hover:bg-green-10 active:bg-green-30 p-2 rounded-xl">
                <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-power">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                    <path d="M12 4l0 8" />
                </svg>
            </div>
        </div>
    </div>
    <div class="bg-white w-full rounded-3xl p-2 flex flex-col gap-2">
        <div class="w-full">
            <div class="relative">
                <label class="absolute h-full flex justify-center items-center px-2">
                    <svg class="size-8 stroke-green-20 animate-pulse" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-qrcode">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M7 17l0 .01" />
                        <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M7 7l0 .01" />
                        <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                        <path d="M17 7l0 .01" />
                        <path d="M14 14l3 0" />
                        <path d="M20 14l0 .01" />
                        <path d="M14 14l0 3" />
                        <path d="M14 20l3 0" />
                        <path d="M17 17l3 0" />
                        <path d="M20 17l0 3" />
                    </svg>
                </label>
                <input type="text" id="barcode" placeholder="Сканируйте товар (Ctrl+Enter)"
                    class="border-green-20 pl-12 w-full border-2 rounded-2xl text-lg focus:ring-1 outline-none focus:ring-green-20 focus:border-2 focus:border-green-20 duration-300">
                <div class="absolute top-0 right-0 h-full p-2">
                    <button type="submit"
                        class="bg-green-20 hover:bg-green-10 active:bg-green-30 h-full px-3 rounded-lg text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full bg-gray-10 h-12 rounded-2xl">

        </div>
        <div class="w-full bg-gray-10 rounded-2xl h-full p-2 flex flex-col gap-2">
            @for($i = 0; $i < 10; $i++) <div
                class="w-full bg-white p-1 rounded-lg flex justify-between gap-4 items-center relative">
                <div class="flex gap-4 items-center">
                    <img src="{{ asset('assets/images/noimage.webp') }}" alt="Image"
                        class="h-10 w-10 rounded-md object-cover">
                    <div class="flex flex-col gap-1">
                        <p class="text-sm leading-none">Product name</p>
                        <p class="text-sm leading-none text-green-20 font-ALSHaussBold">100c</p>
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-sm leading-none">Остаток:</p>
                        <p class="text-sm leading-none text-green-20 font-ALSHaussBold">100шт</p>
                    </div>
                </div>
                <button class="bg-green-20 hover:bg-green-10 active:bg-green-30 text-white h-full p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M12.5 21h-3.926a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304h11.339a2 2 0 0 1 1.977 2.304l-.263 1.708" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                        <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
                    </svg>
                </button>
        </div>
        @endfor
    </div>
</div>
<div class="w-[500px] bg-green-20 rounded-3xl">

</div>
</div>
@endsection