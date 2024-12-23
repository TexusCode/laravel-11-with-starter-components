@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <x-primary-text text="Добавит новый категория" />
    <form action="{{ route('add-category-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center gap-4 mt-4">
            <div class="w-full">
                <x-default-input placeholder="Название категория" value="{{ old('name') }}" type="text" required="on"
                    name="name" class="col-span-full" />
            </div>
            <label for="photo"
                class="relative w-16 h-16 col-span-4 mt-0 overflow-hidden duration-300 rounded-lg cursor-pointer bg-gray-10 hover:bg-gray-200 lg:col-span-1">
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full">
                    <svg class="p-2 bg-white rounded-md hover:bg-gray-200 size-14 stroke-green-20"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                        <path d="M16 5l3 3" />
                    </svg>
                </div>
                <img src="{{ asset('assets/images/noimage.webp') }}" alt="No image" class="object-cover w-full h-full">
                <input type="file" name="photo" id="photo" class="sr-only"
                    accept="image/png, image/jpeg, image/jpg, image/gif, image/webp,">
            </label>
        </div>
        <div class="mt-4 col-span-full">
            <x-default-button text="Добавить" type="submit" icon="{{ asset('assets/icons/plus.svg') }}" />
        </div>
    </form>
    <div class="my-4 border-t-2">
        <x-primary-text text="Список категории" class="my-4" />
        <div>
            <!-- Table -->
            <div
                class="overflow-x-auto  [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-green-20">

                <table class="min-w-full divide-y divide-gray-200 ">
                    <thead class="bg-gray-50">
                        <tr>
                            {{-- <th scope="col" class="py-3 ps-6 text-start">
                                <label for="hs-at-with-checkboxes-main" class="flex">
                                    <input type="checkbox"
                                        class="border-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                        id="hs-at-with-checkboxes-main">
                                </label>
                            </th> --}}

                            <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Названия
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Товары
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($categories as $category)
                        <tr>
                            {{-- <td class="size-px whitespace-nowrap">
                                <div class="py-3 ps-6">
                                    <label for="hs-at-with-checkboxes-1" class="flex">
                                        <input type="checkbox"
                                            class="border-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                            id="hs-at-with-checkboxes-1">
                                    </label>
                                </div>
                            </td> --}}
                            <td class="size-px whitespace-nowrap">
                                <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                    <div class="flex items-center gap-x-3">
                                        @if($category->photo)
                                        <img class="inline-block size-[38px] rounded-full"
                                            src="{{ asset('storage/'.$category->photo) }}" alt="Photo">
                                        @else
                                        <img class="inline-block size-[38px] rounded-full"
                                            src="{{ asset('assets/images/noimage.webp') }}" alt="Photo">

                                        @endif
                                        <div class="grow">
                                            <span class="block text-sm font-ALSHaussBold text-gray-800">{{
                                                $category->name
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">{{
                                        $category->products->count() }}</span>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-1.5 flex gap-2 justify-end">
                                    <form action="{{ route('delete-category-post', $category->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="text-red-500">Удалить</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="flex items-center justify-between gap-3 px-6 py-4 border-t border-gray-200">
                <div>
                    <p class="text-sm text-gray-600">
                        <span class="font-semibold text-gray-800">12</span> results
                    </p>
                </div>

                <div>
                    <div class="inline-flex gap-x-2">
                        <button type="button"
                            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                            Prev
                        </button>

                        <button type="button"
                            class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                            Next
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Footer -->
        </div>

    </div>
</div>
@endsection