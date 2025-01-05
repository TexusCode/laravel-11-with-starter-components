@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <div class="flex items-center justify-between gap-3 py-4">
        <div>
            <x-primary-text text="Возвраты" />
            <x-small-text class="mt-2" text="Информация о возвращенных товаров" />
        </div>
    </div>
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
                                    class="breturn-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-at-with-checkboxes-main">
                                <span class="sr-only">Checkbox</span>
                            </label>
                        </th>

                        <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Товар
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Цена товара
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Количество
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Сумма возврата
                                </span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Заметка
                                </span>
                            </div>
                        </th>

                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($returns as $return)

                    <tr>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-3 ps-6">
                                <label for="hs-at-with-checkboxes-1" class="flex">
                                    <input type="checkbox"
                                        class="breturn-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                        id="hs-at-with-checkboxes-1">
                                    <span class="sr-only">Checkbox</span>
                                </label>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                <div class="flex items-center gap-x-3">
                                    @if($return->product->image)
                                    <img class="inline-block size-[38px] rounded-full"
                                        src="{{ asset('storage/'.$return->product->image) }}" alt="Photo">
                                    @else
                                    <img class="inline-block size-[38px] rounded-full"
                                        src="{{ asset('assets/images/noimage.webp') }}" alt="Photo">
                                    @endif
                                    <div class="grow">
                                        <span class="block text-sm font-semibold text-gray-800">{{
                                            $return->product->name
                                            }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="h-px w-72 whitespace-nowrap">
                            <div class="px-6 py-3">
                                <span class="block text-sm font-semibold text-gray-800">{{ $return->product->sell_price
                                    }}c</span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $return->quantity }}{{ $return->product->unit->name ?? ' шт' }}
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $return->price }}c
                                </div>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $return->note ?? 'Нет заметка' }}
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- End Table -->
        <!-- Footer -->
        <div class="px-6 py-4 breturn-t breturn-gray-200">
            {{ $returns->links() }}
        </div>
        <!-- End Footer -->
    </div>
</div>
@endsection