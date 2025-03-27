@extends('admin.layouts.app')
@section('content')
    <div class="font-ALSHaussRegular">
        <div class="my-4">
            <x-primary-text text="Ревизия и разница товаров!" class="my-4" />
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
                                            Имя товар
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                            Штрих-код
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                            Старый кол
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                            Новый кол
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                            Разница
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                            Убытка
                                        </span>
                                    </div>
                                </th>

                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @foreach ($revisions as $revision)
                                <tr>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm font-semibold text-gray-800">{{ $revision->product->name ?? '' }}</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm font-semibold text-gray-800">{{ $revision->product->sku ?? '' }}</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm font-semibold text-gray-800">{{ $revision->old_quantity ?? '' }}</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="block text-sm font-semibold text-gray-800">{{ $revision->new_quantity ?? '' }}</span>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="block text-sm font-semibold text-gray-800">
                                                @if ($revision->new_quantity < $revision->old_quantity)
                                                    {{ $revision->new_quantity - $revision->old_quantity }}
                                                    {{ $revision->product->unit->name ?? '' }}
                                                @elseif ($revision->new_quantity > $revision->old_quantity)
                                                    Болше чем должен
                                                @else
                                                    Нету
                                                @endif
                                            </span>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="block text-sm font-semibold text-gray-800">
                                                @if ($revision->new_quantity < $revision->old_quantity)
                                                    {{ ($revision->new_quantity - $revision->old_quantity) * $revision->product->sell_price }}c
                                                @else
                                                    Нету
                                                @endif
                                            </span>
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
