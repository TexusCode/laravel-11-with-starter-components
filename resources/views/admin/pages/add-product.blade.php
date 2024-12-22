@extends('admin.layouts.app')
@section('content')
<div class="p-4 font-ALSHaussRegular">
    <x-primary-text text="Добавит новый товар" />
    <div class="grid gap-4 md:grid-cols-4">
        <div class="grid col-span-4 gap-4 mt-4 lg:col-span-3 lg:grid-cols-2">
            <x-default-input placeholder="Название товара" value="" type="text" name="name" class="col-span-full" />

            <div class="relative">
                <select class="peer p-4 pe-9 block w-full border-gray-200 rounded-lg text-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                    <option selected="">Выберите категория</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <label class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-base peer-focus:-translate-y-3  peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:text-sm peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-gray-500">
                    Выберите категория

                </label>
            </div>
            <div class="relative">
                <select class="peer p-4 pe-9 block w-full border-gray-200 rounded-lg text-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                    <option selected="">Выберите бренд</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <label class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-base peer-focus:-translate-y-3  peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:text-sm peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-gray-500">
                    Выберите бренд

                </label>
            </div>
            <div class="relative">
                <select class="peer p-4 pe-9 block w-full border-gray-200 rounded-lg text-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                    <option selected="">Выберите поставщик</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <label class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-base peer-focus:-translate-y-3  peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:text-sm peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-gray-500">
                    Выберите поставщик

                </label>
            </div>
            <div class="relative">
                <select class="peer p-4 pe-9 block w-full border-gray-200 rounded-lg text-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                    <option selected="">Единица измерения</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <label class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-base peer-focus:-translate-y-3  peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:text-sm peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-gray-500">
                    {{ __('Единица измерения') }}
                </label>
            </div>
            <x-default-input placeholder="Штрихкод" value="" type="text" name="sku" />
            <x-default-input placeholder="Количество" value="" type="number" name="quantity" />
            <x-default-input placeholder="Цена покупка" value="" type="number" name="buy_price" />
            <x-default-input placeholder="Цена продажа" value="" type="number" name="sell_price" />

        </div>
        <div class="relative w-full col-span-4 mt-0 overflow-hidden duration-300 rounded-lg cursor-pointer max-h-56 lg:mt-4 bg-gray-10 hover:bg-gray-200 min-h-32 lg:max-h-full lg:col-span-1">
            <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full">
                <svg class="p-2 bg-white rounded-md hover:bg-gray-200 size-14 stroke-green-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                    <path d="M16 5l3 3" /></svg>
            </div>
            <img src="{{ asset('assets/images/noimage.webp') }}" alt="No image" class="object-cover w-full h-full">
        </div>
    </div>
    <div class="mt-4 col-span-full">
        <x-default-button text="Добавить" icon="{{ asset('assets/icons/plus.svg') }}" />
    </div>

</div>
@endsection
