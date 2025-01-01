<div>
    @if($modal)
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full bg-green-20/60">
        <div class="relative p-4 bg-white w-96 rounded-3xl">
            <p class="mb-4 text-xl leading-5 whitespace-normal font-ALSHaussBold">Оплата и детали заказа
            </p>
            <div class="border-t-2">

            </div>
            <button type="button" wire:click="modal_close"
                class="absolute text-red-500 top-3 right-3 hover:text-red-400 active:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>

            </button>
            <div class="flex flex-col">
                <span class="mt-3 mb-1 text-lg">Способ оплата:</span>
                <select wire:model.live="paymentType"
                    class="w-full duration-300 border-2 outline-none rounded-2xl border-green-20 focus:border-green-20 focus:ring-green-20">
                    <option value="Наличными">Наличными</option>
                    <option value="Алиф Моби">Алиф Моби</option>
                    <option value="Душанбе Сити">Душанбе Сити</option>
                    <option value="Корти Милли">Корти Милли</option>
                    <option value="В долг">В долг</option>
                </select>
                @if($debt)
                <div class="flex gap-2 mt-3">
                    <div>
                        <span class="mb-1 text-lg">Имя:</span>
                        <input required type="text" wire:model.live="customerName"
                            class="w-full duration-300 border-2 outline-none rounded-2xl border-green-20 focus:border-green-20 focus:ring-green-20">
                    </div>
                    <div>

                        <span class="mb-1 text-lg">Телефон:</span>
                        <input required type="text" wire:model.live="customerPhone"
                            class="w-full duration-300 border-2 outline-none rounded-2xl border-green-20 focus:border-green-20 focus:ring-green-20">
                    </div>
                </div>
                @endif
                <span class="mt-3 mb-1 text-lg">Полученная сумма:</span>
                <input type="text" wire:model.live="money"
                    class="w-full duration-300 border-2 outline-none rounded-2xl border-green-20 focus:border-green-20 focus:ring-green-20">
                <span class="mt-3 mb-1 text-lg">Примечания к заказу:</span>
                <textarea cols="30" rows="3" wire:model.live="note"
                    class="w-full duration-300 border-2 outline-none rounded-2xl border-green-20 focus:border-green-20 focus:ring-green-20"
                    placeholder="Заметка..."></textarea>
            </div>
            <div class="mt-4">
                <div class="flex items-center justify-between text-xl">
                    <p class="font-ALSHaussRegular">Общая сумма:</p>
                    <p class="font-ALSHaussBold">{{ $subtotal }}c</p>
                </div>
                <div class="flex items-center justify-between text-xl">
                    <p class="font-ALSHaussRegular">Скидка:</p>
                    <p class="font-ALSHaussBold">{{ $discount }}c</p>
                </div>
                <div class="flex items-center justify-between text-xl">
                    <p class="font-ALSHaussRegular">Сумма к оплате:</p>
                    <p class="font-ALSHaussBold">{{ $total }}c</p>
                </div>
                <div class="flex items-center justify-between text-xl">
                    <p class="font-ALSHaussRegular">Сдачи:</p>
                    <p class="text-red-500 font-ALSHaussBold">{{ $return }}c</p>
                </div>
            </div>
            <button type="button" id="payment" wire:click="order_place"
                class="flex items-center justify-center w-full gap-2 py-2 mt-4 text-xl text-white bg-green-20 hover:bg-green-10 active:bg-green-30 font-ALSHaussBold rounded-xl"
                x-data x-init="
                                    document.addEventListener('keydown', (event) => {
                                        if (event.shiftKey && event.key === 'Enter') {
                                            event.preventDefault();
                                            document.getElementById('payment').click();
                                        }
                                    });
                                ">
                <span>Закрыть и печать чек</span>
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

        </div>
    </div>
    @endif
</div>