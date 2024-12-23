@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <x-primary-text text="Добавит новый единица измерение" />
    <form action="{{ route('add-unit-post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center gap-4 mt-4">
            <div class="w-full">
                <x-default-input placeholder="Название единица измерение" value="{{ old('name') }}" type="text"
                    required="on" name="name" class="col-span-full" />
            </div>
        </div>
        <div class="mt-4 col-span-full">
            <x-default-button text="Добавить" type="submit" icon="{{ asset('assets/icons/plus.svg') }}" />
        </div>
    </form>
    <div class="my-4 border-t-2">
        <x-primary-text text="Список единица измерение" class="my-4" />
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
                                        Названия
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Товары
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($units as $unit)
                        <tr>
                            <td class="size-px whitespace-nowrap">
                                <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                    <div class="flex items-center gap-x-3">
                                        <div class="grow">
                                            <span class="block text-sm font-ALSHaussBold text-gray-800">{{
                                                $unit->name
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">{{
                                        $unit->products->count() }}</span>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-1.5 flex gap-2 justify-end">
                                    <form action="{{ route('delete-unit-post', $unit->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="text-red-500">Удалить</button>
                                    </form>
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