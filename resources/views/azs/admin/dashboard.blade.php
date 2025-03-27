@extends('azs.admin.app')
@section('content')
<div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 lg:grid-cols-4">
    <div class="h-full rounded-lg">
        <div class="w-full h-full p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-800">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 rounded-full bg-cyan-500">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Заработок в месяц
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-4 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $summ }}c
                </p>
            </div>
        </div>
    </div>
    <div class="h-full rounded-lg">
        <div class="w-full h-full p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-800">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-blue-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Расходы в месяц
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-4 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $ras }}c
                </p>
            </div>
        </div>
    </div>
    <div class="h-full rounded-lg">
        <div class="w-full h-full p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-800">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-yellow-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Бонус зачислено в месяц
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-4 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $bonus }}c
                </p>
            </div>
        </div>
    </div>
    <div class="h-full rounded-lg">
        <div class="w-full h-full p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-800">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-green-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Чистая прибыль в месяц
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-4 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $nal }}c
                </p>
            </div>
        </div>
    </div>

</div>

<div class="p-2 bg-white shadow-lg rounded-2xl">
    <h1 class="mb-2 text-xl text-center">Остаток топлива</h1>
    <div class="grid grid-cols-2 gap-2 sm:grid-cols-2 lg:grid-cols-4">
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-red-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Бензин 92
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-2xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelbag->benzin92 }}л
                </p>
            </div>
        </div>
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-red-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Бензин 95
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-2xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelbag->benzin95 }}л
                </p>
            </div>
        </div>
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-red-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Дизель
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-2xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelbag->diesel }}л
                </p>
            </div>
        </div>
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 bg-red-500 rounded-full">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Газ
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-2xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelbag->gas }}л
                </p>
            </div>
        </div>
    </div>
</div>
<div class="p-2 mt-4 bg-white shadow-lg rounded-2xl">
    <h1 class="mb-2 text-xl text-center">Цена топлива</h1>
    <div class="grid grid-cols-2 gap-2 sm:grid-cols-2 lg:grid-cols-4">
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 rounded-full bg-lime-500">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Бензин 92
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelprise->benzin92 }}c
                </p>
            </div>
        </div>
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 rounded-full bg-lime-500">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Бензин 95
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelprise->benzin95 }}c
                </p>
            </div>
        </div>
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 rounded-full bg-lime-500">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Дизель
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelprise->diesel }}c
                </p>
            </div>
        </div>
        <div class="p-2 bg-gray-100 rounded-xl">
            <div class="flex items-center">
                <span class="relative w-4 h-4 p-2 rounded-full bg-lime-500">
                    <svg width="20" fill="currentColor" height="20"
                        class="absolute h-2 text-white transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1362 1185q0 153-99.5 263.5t-258.5 136.5v175q0 14-9 23t-23 9h-135q-13 0-22.5-9.5t-9.5-22.5v-175q-66-9-127.5-31t-101.5-44.5-74-48-46.5-37.5-17.5-18q-17-21-2-41l103-135q7-10 23-12 15-2 24 9l2 2q113 99 243 125 37 8 74 8 81 0 142.5-43t61.5-122q0-28-15-53t-33.5-42-58.5-37.5-66-32-80-32.5q-39-16-61.5-25t-61.5-26.5-62.5-31-56.5-35.5-53.5-42.5-43.5-49-35.5-58-21-66.5-8.5-78q0-138 98-242t255-134v-180q0-13 9.5-22.5t22.5-9.5h135q14 0 23 9t9 23v176q57 6 110.5 23t87 33.5 63.5 37.5 39 29 15 14q17 18 5 38l-81 146q-8 15-23 16-14 3-27-7-3-3-14.5-12t-39-26.5-58.5-32-74.5-26-85.5-11.5q-95 0-155 43t-60 111q0 26 8.5 48t29.5 41.5 39.5 33 56 31 60.5 27 70 27.5q53 20 81 31.5t76 35 75.5 42.5 62 50 53 63.5 31.5 76.5 13 94z">
                        </path>
                    </svg>
                </span>
                <p class="ml-2 text-gray-700 text-md dark:text-gray-50">
                    Газ
                </p>
            </div>
            <div class="flex flex-col justify-start">
                <p class="mt-2 text-4xl font-bold text-left text-gray-800 dark:text-white">
                    {{ $fuelprise->gas }}c
                </p>
            </div>
        </div>
    </div>
</div>
@endsection