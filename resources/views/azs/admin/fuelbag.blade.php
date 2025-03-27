@extends('azs.admin.app')
@section('content')

<h1 class="mb-5 text-xl text-center">Остаток топлива</h1>
<form class="max-w-sm mx-auto" action="{{ route('fuelbagpost') }}" method="POST">
    @csrf
    <div class="mb-5">
        <label for="benzin92" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Бензин 92</label>
        <input type="text" id="benzin92" name="benzin92" value="{{ $fuelbag->benzin92 }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="name@flowbite.com" required />
    </div>
    <div class="mb-5">
        <label for="benzin95" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Бензин 95</label>
        <input type="text" id="benzin95" name="benzin95" value="{{ $fuelbag->benzin95 }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="name@flowbite.com" required />
    </div>
    <div class="mb-5">
        <label for="diesel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Дизель</label>
        <input type="text" id="diesel" name="diesel" value="{{ $fuelbag->diesel }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="name@flowbite.com" required />
    </div>
    <div class="mb-5">
        <label for="gas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Газ</label>
        <input type="text" id="gas" name="gas" value="{{ $fuelbag->gas }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="name@flowbite.com" required />
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Обновить</button>
</form>

@endsection