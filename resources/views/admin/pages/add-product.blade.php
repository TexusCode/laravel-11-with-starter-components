@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular p-4">
    <x-primary-text text="Добавит новый товар" />
    <div class="grid md:grid-cols-3 gap-4 mt-4">
        <x-primary-input placeholder="Название товара" name="name" class="col-span-full" />
        <x-primary-input placeholder="Артикул или штрикод товара" type="number" name="sku" />
        <select name="category"
            class=" text-[18px] pl-[20px] pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-green-10 focus:ring-2 focus:ring-green-10 w-full rounded-full font-ALSHaussRegular duration-300">
            <option value="" disabled selected>Выберите категория товара</option>
        </select>
        <select name="brand"
            class=" text-[18px] pl-[20px] pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-green-10 focus:ring-2 focus:ring-green-10 w-full rounded-full font-ALSHaussRegular duration-300">
            <option value="" disabled selected>Выберите бренд товара</option>
        </select>
        <select name="supplier"
            class=" text-[18px] pl-[20px] pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-green-10 focus:ring-2 focus:ring-green-10 w-full rounded-full font-ALSHaussRegular duration-300">
            <option value="" disabled selected>Выберите поставщик товара</option>
        </select>
        <select name="unit"
            class=" text-[18px] pl-[20px] pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-green-10 focus:ring-2 focus:ring-green-10 w-full rounded-full font-ALSHaussRegular duration-300">
            <option value="" disabled selected>Выберите единица измерения</option>
        </select>
        <x-primary-input placeholder="Количество" type="number" name="quantity" />
        <x-primary-input placeholder="Цена покупка" type="number" name="buy_price" />
        <x-primary-input placeholder="Цена продажа" type="number" name="sell_price" />
        <label for="photo"
            class="text-[18px] relative pl-[60px] pr-[20px] py-[16px] placeholder:text-gray-20 border border-gray-20  text-gray-20 font-medium  w-full rounded-full font-ALSHaussRegular duration-300">
            Выберите фото товара
            <div
                class="absolute w-[42px] h-[42px] bg-gray-10 rounded-full left-2 top-2 flex justify-center items-center overflow-hidden">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-file">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                </svg>
            </div>
            <input type="file" name="photo" id="photo" class="sr-only">
        </label>
        <textarea name="" id="" cols="30" rows="10"
            class="text-[18px] pl-[20px] col-span-full pr-[20px] py-[16px] placeholder:text-gray-20 border-1 text-gray-40 border-gray-20 font-medium outline-none focus:border-1 focus:border-green-10 focus:ring-2 focus:ring-green-10 w-full rounded-[30px] font-ALSHaussRegular duration-300"
            placeholder="Заметка"></textarea>
        <x-primary-button text="Добавить товар" class="max-w-xs" />
    </div>
</div>
@endsection