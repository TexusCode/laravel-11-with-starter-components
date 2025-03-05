<nav class="flex flex-col flex-wrap w-full p-3 hs-accordion-group" data-hs-accordion-always-open>
    <ul class="flex flex-col space-y-1">
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-white/10 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M13.45 11.55l2.05 -2.05" />
                    <path d="M6.4 20a9 9 0 1 1 11.2 0z" />
                </svg>
                Панель управления
            </a>
        </li>

        <li class="hs-accordion" id="account-accordion">
            <button type="button"
                class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                aria-expanded="true" aria-controls="account-accordion-child">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-category-minus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4h6v6h-6zm10 0h6v6h-6zm-10 10h6v6h-6zm10 3h6" />
                </svg>
                Товары
                <svg class="hidden hs-accordion-active:block ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6" />
                </svg>
                <svg class="block hs-accordion-active:hidden ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <div id="account-accordion-child"
                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                role="region" aria-labelledby="account-accordion">
                <ul class="pt-1 space-y-1 ps-8">
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="{{ route('products') }}">
                            Все товары
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="{{ route('categories') }}">
                            Категории
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="{{ route('brands') }}">
                            Бренды
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="{{ route('units') }}">
                            Единицы
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="hs-accordion" id="account-accordion">
            <button type="button"
                class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                aria-expanded="true" aria-controls="account-accordion-child">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-basket-up">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M17 10l-2 -6" />
                    <path d="M7 10l2 -6" />
                    <path
                        d="M12 20h-4.756a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.358 2.04" />
                    <path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M19 22v-6" />
                    <path d="M22 19l-3 -3l-3 3" />
                </svg>
                Продажи
                <svg class="hidden hs-accordion-active:block ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6" />
                </svg>
                <svg class="block hs-accordion-active:hidden ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <div id="account-accordion-child"
                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                role="region" aria-labelledby="account-accordion">
                <ul class="pt-1 space-y-1 ps-8">
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="{{ route('orders') }}">
                            Все продажи
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="{{ route('order-returns') }}">
                            Возвраты продажи
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="hs-accordion" id="account-accordion">
            <button type="button"
                class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                aria-expanded="true" aria-controls="account-accordion-child">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-basket-down">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M17 10l-2 -6" />
                    <path d="M7 10l2 -6" />
                    <path
                        d="M12 20h-4.756a3 3 0 0 1 -2.965 -2.544l-1.255 -7.152a2 2 0 0 1 1.977 -2.304h13.999a2 2 0 0 1 1.977 2.304l-.349 1.989" />
                    <path d="M10 14a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M19 16v6" />
                    <path d="M22 19l-3 3l-3 -3" />
                </svg>
                Покупки
                <svg class="hidden hs-accordion-active:block ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6" />
                </svg>
                <svg class="block hs-accordion-active:hidden ms-auto size-4" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

            <div id="account-accordion-child"
                class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                role="region" aria-labelledby="account-accordion">
                <ul class="pt-1 space-y-1 ps-8">
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="#">
                            Все покупки
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                            href="#">
                            Возвраты покупки
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="{{ route('expenditures') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-report-money">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    <path d="M14 11h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />
                    <path d="M12 17v1m0 -8v1" />
                </svg>
                Расходы
            </a>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="{{ route('changes') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-clock-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M20.926 13.15a9 9 0 1 0 -7.835 7.784" />
                    <path d="M12 7v5l2 2" />
                    <path d="M22 22l-5 -5" />
                    <path d="M17 22l5 -5" />
                </svg>
                Смены
            </a>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-table-shortcut">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 13v-8a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-8" />
                    <path d="M3 10h18" />
                    <path d="M10 3v11" />
                    <path d="M2 22l5 -5" />
                    <path d="M7 21.5v-4.5h-4.5" />
                </svg>
                Склад
            </a>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-receipt">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2" />
                </svg>
                Заявки
            </a>

        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="{{ route('suppliers') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-truck-delivery">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                    <path d="M3 9l4 0" />
                </svg>
                Поставщики
            </a>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="{{ route('empliyones') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
                Сотрудники
            </a>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="{{ route('revision') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-shield-lock">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                    <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                    <path d="M12 12l0 2.5" />
                </svg>
                Ревизии
            </a>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="{{ route('customers') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                </svg>
                Клиенты и долги
            </a>
        </li>
        <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10"
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                </svg>
                Настройки
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="flex items-center gap-x-3.5 w-full py-2 px-2.5 text-base text-white rounded-lg hover:bg-white/10 focus:outline-none focus:bg-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                    </svg>
                    Выйти из аккаунта
                </button>
            </form>
        </li>
    </ul>
</nav>