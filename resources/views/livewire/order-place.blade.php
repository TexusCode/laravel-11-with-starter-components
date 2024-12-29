<div>
    @if($modal)
    <div class="bg-green-20/60 absolute h-full w-full top-0 left-0 flex justify-center items-center">
        <div class="w-96 bg-white rounded-3xl p-4 relative">
            <p class="text-xl mb-4 whitespace-normal leading-5 font-ALSHaussBold">Оплата и детали заказа
            </p>
            <div class="border-t-2">

            </div>
            <button type="button" wire:click="modal_close"
                class="absolute top-3 right-3 text-red-500 hover:text-red-400 active:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M18 6l-12 12" />
                    <path d="M6 6l12 12" />
                </svg>

            </button>
            <div class="flex flex-col">
                <span class="mb-1 mt-3 text-lg">Способ оплата:</span>
                <select wire:model.live="payment_type"
                    class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
                    <option value="Наличными">Наличными</option>
                    <option value="Алиф Моби">Алиф Моби</option>
                    <option value="Душанбе Сити">Душанбе Сити</option>
                    <option value="Корти Милли">Корти Милли</option>
                    <option value="В долг">В долг</option>
                </select>
                <span class="mb-1 mt-3 text-lg">Полученная сумма:</span>
                <input type="text" wire:model.live="money"
                    class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300">
                <span class="mb-1 mt-3 text-lg">Примечания к заказу:</span>
                <textarea cols="30" rows="3" wire:model.live="note"
                    class="rounded-2xl outline-none border-2 border-green-20 w-full focus:border-green-20 focus:ring-green-20 duration-300"
                    placeholder="Заметка..."></textarea>
            </div>
            <div class="mt-4">
                <div class="flex justify-between items-center text-xl">
                    <p class="font-ALSHaussRegular">Общая сумма:</p>
                    <p class="font-ALSHaussBold">{{ $subtotal }}c</p>
                </div>
                <div class="flex justify-between items-center text-xl">
                    <p class="font-ALSHaussRegular">Скидка:</p>
                    <p class="font-ALSHaussBold">{{ $discount }}c</p>
                </div>
                <div class="flex justify-between items-center text-xl">
                    <p class="font-ALSHaussRegular">Сумма к оплате:</p>
                    <p class="font-ALSHaussBold">{{ $total }}c</p>
                </div>
                <div class="flex justify-between items-center text-xl">
                    <p class="font-ALSHaussRegular">Сдачи:</p>
                    <p class="font-ALSHaussBold text-red-500">{{ $return }}c</p>
                </div>
            </div>
            <button type="button" id="payment" wire:click="order_place"
                class="bg-green-20 mt-4 w-full flex items-center gap-2 justify-center hover:bg-green-10 active:bg-green-30 text-white font-ALSHaussBold text-xl py-2 rounded-xl"
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