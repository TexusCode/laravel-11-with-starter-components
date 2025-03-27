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
                            <th scope="col" class="px-4 py-3">Цена</th>
                            <th scope="col" class="px-4 py-3">Описание</th>
                            <th scope="col" class="px-4 py-3">Дата и время</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ras as $ras)

                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3">{{ $ras->id }}</td>
                            <td class="px-4 py-3">{{ $ras->price }}c</td>
                            <td class="px-4 py-3">{{ $ras->description }}</td>
                            <td class="px-4 py-3">{{ $ras->created_at->format('d.m | H:i') }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection