@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">

    <div class="">
        <x-primary-text text="Список поставщиков" class="my-4" />
        <div>
            <!-- Table -->
            <div
                class="overflow-x-auto  [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-green-20">

                <table class="min-w-full divide-y divide-gray-200 ">
                    <thead class="bg-gray-50">
                        <tr>

                            <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Имя
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Телефон
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Адрес
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Сумма долги
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($customers as $customer)
                        <tr>
                            <td class="size-px whitespace-nowrap">
                                <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                    <div class="flex items-center gap-x-3">
                                        <div class="grow">
                                            <span class="block text-sm text-gray-800 font-ALSHaussBold">{{
                                                $customer->name
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">
                                        {{ $customer->phone }}
                                    </span>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">
                                        {{ $customer->location ? $customer->location : 'Нет адреса'}}
                                    </span>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">
                                        {{ $customer->debt->sum('price') }}c
                                    </span>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-1.5 flex gap-2 justify-end">
                                    {{-- <form action="{{ route('delete-supplier-post', $supplier->id) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="text-red-500">Удалить</button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
        </div>

    </div>
</div>
@endsection