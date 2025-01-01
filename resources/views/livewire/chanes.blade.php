<div>
    @if($modal)
    <div class="absolute top-0 left-0 w-screen h-screen bg-green-20/60 flex justify-center items-center">
        <div class="bg-white lg:w-96 rounded-3xl p-4 relative">
            <p class="mb-4 text-xl leading-5 whitespace-normal font-ALSHaussBold">Окно закрыт кассу
            </p>
            <div class="border-t-2">

            </div>
            <div class="flex justify-between items-center text-xl mt-3">
                <p class="font-ALSHaussRegular">Сумма всех заказоов:</p>
                <p class="font-ALSHaussBold">{{ $orderTotal }}c</p>
            </div>
            <div class="flex justify-between items-center text-xl mt-3">
                <p class="font-ALSHaussRegular">Сумма всех возвратов:</p>
                <p class="font-ALSHaussBold">{{ $returnProductsTotal }}c</p>
            </div>
            <div class="flex justify-between items-center text-xl mt-3">
                <p class="font-ALSHaussRegular">Сумма всех расходов:</p>
                <p class="font-ALSHaussBold">{{ $expenditureTotal }}c</p>
            </div>
            <div class="flex justify-between items-center text-xl mt-3">
                <p class="font-ALSHaussRegular">Сумма заказы в долг:</p>
                <p class="font-ALSHaussBold">{{ $debtSellTotal }}c</p>
            </div>
            <div class="flex justify-between items-center text-xl mt-3">
                <p class="font-ALSHaussRegular">Сумма олаченных долгов:</p>
                <p class="font-ALSHaussBold">{{ $debtPayTotal }}c</p>
            </div>
            <div class="flex justify-between items-center text-xl mt-3 text-red-500">
                <p class="font-ALSHaussRegular">Остаток на кассе:</p>
                <p class="font-ALSHaussBold">{{ $total }}c</p>
            </div>
            <button type="button" wire:click="closemodal"
                class="text-red-500 hover:text-red-400 active:text-red-600 absolute top-3 right-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>
            </button>

            <button type="button" wire:click="changeClose" wire:confirm="Точно хотите закрыт кассу?"
                class="flex items-center justify-center w-full gap-2 py-2 mt-4 text-xl text-white bg-green-20 hover:bg-green-10 active:bg-green-30 font-ALSHaussBold rounded-xl">
                <span>Закрыт кассу</span>
                <svg wire:loading class="animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-loader">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 6l0 -3" />
                    <path d="M16.25 7.75l2.15 -2.15" />
                    <path d="M18 12l3 0" />
                    <path d="M16.25 16.25l2.15 2.15" />
                    <path d="M12 18l0 3" />
                    <path d="M7.75 16.25l-2.15 2.15" />
                    <path d="M6 12l-3 0" />
                    <path d="M7.75 7.75l-2.15 -2.15" />
                </svg>
            </button>
            @if($message)
            <div class="flex items-start w-full gap-2 p-3 mt-4 bg-red-500/20 rounded-xl">
                <img src="{{ asset('assets/icons/alert-square-rounded.svg') }}" alt="">
                <p class="text-base text-red-500 font-ALSHaussBold">{{ $message }}</p>
            </div>
            @endif
        </div>
    </div>
    @endif
</div>