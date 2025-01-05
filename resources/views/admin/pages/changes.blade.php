@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <div class="flex items-center justify-between gap-3 py-4">
        <div>
            <x-primary-text text="Смены и касса" />
            <x-small-text class="mt-2" text="Отчеты о продажах и кассе" />
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
                                    class="bchange-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-at-with-checkboxes-main">
                                <span class="sr-only">Checkbox</span>
                            </label>
                        </th>

                        <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Дата и время
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Сумма заказов
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Сумма возвраты
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Сумма расходов
                                </span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold whitespace-nowrap tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Сумма заказы в долг
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Сумма оплаченных долгов
                                </span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3 text-start">
                            <div class="flex items-center gap-x-2">
                                <span
                                    class="text-xs font-semibold tracking-wide text-gray-800 uppercase whitespace-nowrap">
                                    Остаток в кассе
                                </span>
                            </div>
                        </th>

                        <th scope="col" class="px-6 py-3 text-end"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($changes as $change)

                    <tr>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-3 ps-6">
                                <label for="hs-at-with-checkboxes-1" class="flex">
                                    <input type="checkbox"
                                        class="bchange-gray-300 rounded shrink-0 text-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none"
                                        id="hs-at-with-checkboxes-1">
                                    <span class="sr-only">Checkbox</span>
                                </label>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                <div class="flex items-center gap-x-3">
                                    <div class="grow">
                                        <span class="block text-sm font-semibold text-gray-800">{{
                                            $change->created_at->format('d.m.y | H : i')
                                            }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="h-px w-72 whitespace-nowrap">
                            <div class="px-6 py-3">
                                <span class="block text-sm font-semibold text-gray-800">{{ $change->subtotal }}c</span>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $change->returns }}c
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $change->expenditures }}c
                                </div>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                <div class="flex items-center gap-x-3">
                                    {{ $change->debts_sell }}c
                                </div>
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $change->debts_pay }}c
                            </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                            <div class="px-6 py-3">
                                {{ $change->total }}c
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
        <div class="px-6 py-4 bchange-t bchange-gray-200">
            {{ $changes->links() }}
        </div>
        <!-- End Footer -->
    </div>
</div>
@endsection