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
                            <th scope="col" class="px-4 py-3">Имя</th>
                            <th scope="col" class="px-4 py-3">Номер телефон</th>
                            <th scope="col" class="px-4 py-3">Баланс</th>
                            <th scope="col" class="px-4 py-3">Посетил</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cards as $card)

                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $card->id }}</td>
                            <td class="px-4 py-3">{{ $card->firstname }}</td>
                            <td class="px-4 py-3">{{ $card->phone }}</td>
                            <td class="px-4 py-3">{{ $card->balance }}</td>
                            <td class="px-4 py-3">{{ $card->transh->count() }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection