@extends('azs.admin.app')
@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="max-w-screen-xl px-2 mx-auto lg:px-12">
        <!-- Start coding here -->
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">#</th>
                            <th scope="col" class="px-4 py-3">Тип операция</th>
                            <th scope="col" class="px-4 py-3">Тип топлива</th>
                            <th scope="col" class="px-4 py-3">Сумма топливо</th>
                            <th scope="col" class="px-4 py-3">Дата и время</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $history)

                        <tr class="border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{
                                $history->cardid }}</th>
                            <td class="px-4 py-3">{{ $history->operationtype }}</td>
                            <td class="px-4 py-3">{{ round($history->cash, 2) }}c</td>
                            <td class="px-4 py-3">{{ $history->fueltype }}</td>
                            <td class="px-4 py-3">{{ $history->created_at->format('d.m | H:i') }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection