<div class="lg:hidden absolute bottom-0 left-0 w-full p-4 flex justify-center items-center">
    <div class="bg-green-20 p-2 rounded-3xl flex gap-2">
        <button type="button" class="text-green-20 bg-white p-2 rounded-2xl" aria-haspopup="dialog"
            aria-expanded="false" aria-controls="hs-offcanvas-example" data-hs-overlay="#hs-offcanvas-example">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-category">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 4h6v6h-6z" />
                <path d="M14 4h6v6h-6z" />
                <path d="M4 14h6v6h-6z" />
                <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            </svg>
        </button>
        <button type="button" class="text-green-20 bg-white p-2 rounded-2xl" aria-haspopup="dialog"
            aria-expanded="false" aria-controls="hs-offcanvas-example" data-hs-overlay="#hs-offcanvas-example-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-bag">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                    d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z" />
                <path d="M9 11v-5a3 3 0 0 1 6 0v5" />
            </svg>
        </button>

    </div>
</div>
<div id="hs-offcanvas-example"
    class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-20 w-full z-[80] bg-white border-e"
    role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-example-label">
    <div class="flex flex-col justify-between w-20 gap-4 p-2 bg-green-20 h-full">
        <div class="flex items-center justify-center p-4 bg-white rounded-2xl">
            <img src="{{ asset('assets/logo/Favicon Green.svg') }}" alt="Logo" class="w-8 h-8">
        </div>
        @livewire('menu')
    </div>
</div>
<div id="hs-offcanvas-example-1"
    class="bg-green-20 hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-[300px] w-full z-[80] border-s dark:bg-neutral-800 dark:border-neutral-700"
    role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-example-1-label">
    @livewire('cart')
</div>