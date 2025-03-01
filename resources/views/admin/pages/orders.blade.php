@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <div class="flex items-center justify-between gap-3 py-4">
        <div>
            <x-primary-text text="Продажи" />
            <x-small-text class="mt-2" text="Управления продажи!" />
        </div>
    </div>
    {{-- <form action="{{ route('product-search') }}" method="POST"
        class="flex items-center w-full pb-4 border-b border-gray-200">
        @csrf
        <div class="w-full">
            <input type="text" name="search"
                class="block w-full px-4 py-2 text-lg border-gray-200 rounded-l-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                placeholder="Введите названия или код товара">
        </div>
        <button type="submit"
            class="inline-flex items-center px-5 py-2 text-lg font-medium text-white border border-transparent rounded-r-lg gap-x-2 bg-green-20 hover:bg-green-10 focus:outline-none focus:bg-green-30 disabled:opacity-50 disabled:pointer-events-none">
            Искать
        </button>

    </form> --}}
    <div>
        <!-- Table -->
        <div
            class="overflow-x-auto  [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-green-20">

            <table class="min-w-full divide-y divide-gray-200 ">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 ps-6 text-start">
                            <label for="hs-at-with-checkboxes-main" class="flex">
                                <input type="checkbox"
                                    class="border-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-at-with-checkboxes-main">
                                <span class="sr-only">Checkbox</span>
                            </label>
                        </th>

                        <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    №
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Подытог
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Скидка
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                    Итог
                                </span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold whitespace-nowrap tracking-wide text-gray-800 uppercase">
                                    Способ оплата
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
                    @foreach ($orders as $order)

                    <tr>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-3 ps-6">
                                <label for="hs-at-with-checkboxes-1" class="flex">
                                    <input type="checkbox"
                                        class="border-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                        id="hs-at-with-checkboxes-1">
                                    <span class="sr-only">Checkbox</span>
                                </label>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                <div class="flex items-center gap-x-3">
                                    <div class="grow">
                                        <span class="block text-sm font-semibold text-gray-800">000{{ $order->id}}
                                        @foreach($order->suborders as $suborder)
                                        <br>
                                        Имя продукт: {{ $suborder->product->name }} - Цена: {{ $suborder->price }}с - Кол: {{ $suborder->quantity }}шт
                                        @endforeach
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="h-px w-72 whitespace-nowrap">
                            <div class="px-6 py-3">
                                <span class="block text-sm font-semibold text-gray-800">{{ $order->subtotal }}c</span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $order->discount }}c
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $order->total }}c
                                </div>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $order->payment_type }}
                                </div>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $order->created_at->format('d.m.y | h:i') }}
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5 flex justify-end gap-4">
                                <form action="" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center text-sm font-medium gap-x-1 text-red-500 decoration-2 hover:underline focus:outline-none focus:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                        </svg>
                                    </button>
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
        <div class="px-6 py-4 border-t border-gray-200">
            {{ $orders->links() }}
        </div>
        <!-- End Footer -->
    </div>
</div>
@endsection