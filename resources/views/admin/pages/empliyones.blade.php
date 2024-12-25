@extends('admin.layouts.app')
@section('content')
<div class="font-ALSHaussRegular">
    <x-primary-text text="{{ $empliyone ? 'Изменить':'Добавить новый' }} сотрудник" />
    <form action="{{ route('add-empliyone',  $empliyone ? $empliyone->id:'') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="flex items-center gap-4 mt-4">
            <div class="w-full grid gap-4">
                <x-default-input placeholder="Имя" value="{{ $empliyone ? $empliyone->name:old('name') }}" type="text"
                    required="on" name="name" class="col-span-full" />
                <x-default-input placeholder="Телефон" value="{{ $empliyone ? $empliyone->phone:old('phone') }}"
                    type="number" required="on" name="phone" class="col-span-full" />
                <div class="relative">
                    <select name="role"
                        class="peer p-4 pe-9 block w-full border-gray-200 rounded-lg text-lg focus:border-green-20 focus:ring-green-20 disabled:opacity-50 disabled:pointer-events-none focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
                        <option value="pos" {{ isset($empliyone) && $empliyone->role === 'pos' ? 'selected' : ''
                            }}>Кассир</option>
                        <option value="admin" {{ isset($empliyone) && $empliyone->role === 'admin' ? 'selected' : ''
                            }}>Админ</option>
                        <option value="revisor" {{ isset($empliyone) && $empliyone->role === 'revisor' ? 'selected' : ''
                            }}>Ревизёр</option>
                    </select>
                    <label
                        class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-base peer-focus:-translate-y-3  peer-focus:text-gray-500 peer-[:not(:placeholder-shown)]:text-sm peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:text-gray-500">
                        Выберите роль
                    </label>
                </div>
                <x-default-input placeholder="Пароль" value="" type="password" name="password" class="col-span-full" />
            </div>

        </div>
        <div class="mt-4 col-span-full">
            <x-default-button text="{{ $empliyone ? 'Изменить':'Добавить' }}" type="submit"
                icon="{{ asset('assets/icons/plus.svg') }}" />
        </div>
    </form>
    <div class="my-4 border-t-2">
        <x-primary-text text="Список сотрудников" class="my-4" />
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
                                        Роль
                                    </span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-start">
                                <div class="flex items-center gap-x-2">
                                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase">
                                        Статус
                                    </span>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 text-end"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($empliyones as $empliyone)
                        <tr>
                            <td class="size-px whitespace-nowrap">
                                <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                    <div class="flex items-center gap-x-3">
                                        @if($empliyone->avatar)
                                        <img class="inline-block size-[38px] rounded-full"
                                            src="{{ asset('storage/'.$empliyone->avatar) }}" alt="Photo">
                                        @else
                                        <img class="inline-block size-[38px] rounded-full"
                                            src="{{ asset('assets/images/noimage.webp') }}" alt="Photo">
                                        @endif
                                        <div class="grow">
                                            <span class="block text-sm font-ALSHaussBold text-gray-800">{{
                                                $empliyone->name
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">{{
                                        $empliyone->phone }}</span>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold text-gray-800">{{
                                        $empliyone->role }}</span>
                                </div>
                            </td>
                            <td class="h-px w-72 whitespace-nowrap">
                                <div class="px-6 py-3">
                                    <span class="block text-sm font-semibold ">
                                        @switch($empliyone->status)
                                        @case(1)
                                        <span class="text-green-20">
                                            Активно
                                        </span>
                                        @break

                                        @default
                                        <span class="text-red-500">
                                            Не активно
                                        </span>
                                        @endswitch
                                    </span>
                                </div>
                            </td>
                            <td class="size-px whitespace-nowrap">
                                <div class="px-6 py-1.5 flex gap-3 justify-end">
                                    <form action="{{ route('status-empliyone', $empliyone->id) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="{{ $empliyone->status === 1 ? 'text-red-500' : 'text-green-500' }}">{{
                                            $empliyone->status === 1 ? 'Деактивировать' : 'Активироват' }}</button>
                                    </form>
                                    <form action="{{ route('delete-empliyone', $empliyone->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="text-red-500">
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
                                    <a href="{{ route('empliyones',$empliyone->id) }}" class="text-green-20">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                            <path
                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                            <path d="M16 5l3 3" />
                                        </svg>
                                    </a>

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