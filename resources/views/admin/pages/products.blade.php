@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-hidden">
            <div class="p-1.5 w-full inline-block align-middle">
                <div class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl">
                    <div class="flex items-center justify-between gap-3 px-6 py-4">
                        <div>
                            <x-primary-text text="Товары" />
                            <x-small-text class="mt-2" text="Добавить, изменить, удалить товары!" />
                        </div>

                        <div>
                            <x-default-link link="{{ route('add-product') }}" text="Добавить" icon="{{ asset('assets/icons/plus.svg') }}" />
                        </div>

                    </div>
                    <div class="flex items-center w-full px-6 pb-4 border-b border-gray-200">
                        <div class="w-full">
                            <input type="text" class="block w-full px-4 py-2 text-lg border-gray-200 rounded-l-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none" placeholder="Введите названия или код товара">
                        </div>
                        <button type="submit" class="inline-flex items-center px-5 py-2 text-lg font-medium text-white border border-transparent rounded-r-lg gap-x-2 bg-green-20 hover:bg-green-10 focus:outline-none focus:bg-green-30 disabled:opacity-50 disabled:pointer-events-none">
                            Искать
                        </button>

                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-green-20">

                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3 ps-6 text-start">
                                        <label for="hs-at-with-checkboxes-main" class="flex">
                                            <input type="checkbox" class="border-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none" id="hs-at-with-checkboxes-main">
                                            <span class="sr-only">Checkbox</span>
                                        </label>
                                    </th>

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
                                                Код
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                                Остаток
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                                Цена
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                                Создано
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="py-3 ps-6">
                                            <label for="hs-at-with-checkboxes-1" class="flex">
                                                <input type="checkbox" class="border-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none" id="hs-at-with-checkboxes-1">
                                                <span class="sr-only">Checkbox</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                            <div class="flex items-center gap-x-3">
                                                <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                                                <div class="grow">
                                                    <span class="block text-sm font-semibold text-gray-800">Christina
                                                        Bersh</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="block text-sm font-semibold text-gray-800">Director</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full">
                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                </svg>
                                                Active
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <div class="flex items-center gap-x-3">
                                                <span class="text-xs text-gray-500">1/5</span>
                                                <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden">
                                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-800" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500">28 Dec, 12:12</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-1.5 flex gap-2">
                                            <a class="inline-flex items-center text-sm font-medium gap-x-1 text-green-20 decoration-2 hover:underline focus:outline-none focus:underline" href="#">
                                                Удалить
                                            </a>
                                            <a class="inline-flex items-center text-sm font-medium gap-x-1 text-green-20 decoration-2 hover:underline focus:outline-none focus:underline" href="#">
                                                Удалить
                                            </a>
                                        </div>
                                    </td>
                                </tr>
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
                                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
    </div>
    <!-- End Card -->
</div>
<!-- End Table Section -->
@endsection
