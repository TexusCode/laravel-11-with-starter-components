@extends('admin.layouts.app')
@section('content')
<div class="p-4 font-ALSHaussRegular">
    <x-primary-text text="Добавит новый категория" />
    <form action="{{ route('add-category-post') }}" method="POST">
        @csrf
        <div class="flex items-center gap-4 mt-4">
            <div class="w-full">
                <x-default-input placeholder="Название категория" value="" type="text" required="on" name="name" class="col-span-full" />
            </div>
            <label for="photo" class="relative w-16 h-16 col-span-4 mt-0 overflow-hidden duration-300 rounded-lg cursor-pointer bg-gray-10 hover:bg-gray-200 lg:col-span-1">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full">
                    <svg class="p-2 bg-white rounded-md hover:bg-gray-200 size-14 stroke-green-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" /></svg>
                </div>
                <img src="{{ asset('assets/images/noimage.webp') }}" alt="No image" class="object-cover w-full h-full">
                <input type="file" name="photo" id="photo" class="sr-only">
            </label>
        </div>
        <div class="mt-4 col-span-full">
            <x-default-button text="Добавить" type="submit" icon="{{ asset('assets/icons/plus.svg') }}" />
        </div>
    </form>
    <div class="my-4 border-t-2">
        <x-primary-text text="Список категории" class="mt-4" />
        @foreach ($categories as $category)
        {{ $category->name }}
        @endforeach

    </div>
</div>
@endsection
