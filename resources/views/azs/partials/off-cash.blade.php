<div id="hs-static-backdrop-modal-1" class="hs-overlay text-xl [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-static-backdrop-modal-1-label" data-hs-overlay-keyboard="false">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <form id="myForm2" action="{{ route('checkoutcashoff') }}" method="POST" class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
          @csrf
            <div class="overflow-y-auto mt-4">
                <label class="overflow-hidden rounded-md w-full px-4 hidden">
                    <span class="text-xl font-medium text-black">Номер бонусной карты: </span>
                    <input type="password" name="qrcode" value="{{ $qrcode->qrcode }}" required class="mt-2 text-xl w-full border-2 border-yellow-500 ring-1 ring-yellow-500 p-2 rounded-lg" />
                </label>
                <label class="block overflow-hidden rounded-md w-full p-4">
                    <span class="text-xl font-medium text-black">Сумма снятие: </span>
                    <input type="number" name="cashoff" placeholder="152.5" value="" required class="mt-2 text-xl w-full border-2 border-yellow-500 ring-1 ring-yellow-500 p-2 rounded-lg" />
                </label>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-static-backdrop-modal-1">
                    Отменить
                </button>
                <button id="submitBtn2" type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                    Снять
                </button>
                <div id="spinner2" class="spinner"></div>
            </div>
          </form>
    </div>
</div>
