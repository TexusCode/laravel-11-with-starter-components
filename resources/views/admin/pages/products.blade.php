@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <div class="flex items-center justify-between gap-3 py-4">
        <div>
            <x-primary-text text="Товары" />
            <x-small-text class="mt-2" text="Добавить, изменить, удалить товары!" />
        </div>

        <div>
            <x-default-link link="{{ route('add-product') }}" text="Добавить"
                icon="{{ asset('assets/icons/plus.svg') }}" />
        </div>

    </div>
    <form action="{{ route('product-search') }}" method="POST"
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

    </form>
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
                    @foreach ($products as $product)

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
                                    @if($product->image)
                                    <img class="inline-block size-[38px] rounded-full"
                                        src="{{ asset('storage/'.$product->image) }}" alt="Photo">
                                    @else
                                    <img class="inline-block size-[38px] rounded-full"
                                        src="{{ asset('assets/images/noimage.webp') }}" alt="Photo">
                                    @endif
                                    <div class="grow">
                                        <span class="block text-sm font-semibold text-gray-800">{{ $product->name
                                            }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="h-px w-72 whitespace-nowrap">
                            <div class="px-6 py-3">
                                <span class="block text-sm font-semibold text-gray-800">{{ $product->sku }}</span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $product->quantity }}шт
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $product->sell_price }}c
                                </div>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $product->created_at->format('d.m.y | h:i') }}
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-1.5 flex justify-end gap-4">
                                <form action="{{ route('delete-product-post',$product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center text-sm font-medium gap-x-1 text-green-20 decoration-2 hover:underline focus:outline-none focus:underline">
                                        Оставить заявка
                                    </button>
                                </form>
                                <form action="{{ route('delete-product-post',$product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="inline-flex items-center text-sm font-medium gap-x-1 text-red-500 decoration-2 hover:underline focus:outline-none focus:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
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
            {{ $products->links() }}
        </div>
        <!-- End Footer -->
    </div>
</div>
@endsection