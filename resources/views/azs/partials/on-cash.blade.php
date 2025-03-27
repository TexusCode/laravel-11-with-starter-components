  <div id="hs-static-backdrop-modal" class="hs-overlay text-xl [--overlay-backdrop:static] hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-static-backdrop-modal-label" data-hs-overlay-keyboard="false">
      <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
          <form id="myForm" action="{{ route('checkoutcashon') }}" method="POST" class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            @csrf
              <div class="overflow-y-auto mt-4">
                  <label class="hidden overflow-hidden rounded-md w-full p-4">
                      <span class="text-xl font-medium text-black">Номер бонусной карты: </span>
                      <input type="password" name="qrcode" value="{{ $qrcode->qrcode }}" required class="mt-2 text-xl w-full border-2 border-yellow-500 ring-1 ring-yellow-500 p-2 rounded-lg" />
                  </label>
                  <div class="px-4">
                      <span class="text-xl font-medium text-black">Тип топлива: </span>
                      <div class="grid sm:grid-cols-2 gap-2 mt-2">
                          <label for="hs-radio-in-form" class="flex p-2 w-full bg-white border-2 border-yellow-500 ring-1 ring-yellow-500 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500">
                              <input type="radio" value="benzin92" name="fuel" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-yellow-600 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-radio-in-form" checked>
                              <span class="text-lg text-black font-bold ms-3">Бензин 92 {{ $fuelprice->benzin92 }}c</span>
                          </label>
                          <label for="hs-radio-in-form3" class="flex p-2 w-full bg-white border-2 border-yellow-500 ring-1 ring-yellow-500 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500">
                              <input type="radio" value="benzin95" name="fuel" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-yellow-600 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-radio-in-form3">
                              <span class="text-lg text-black font-bold ms-3">Бензин 95 {{ $fuelprice->benzin95 }}c</span>
                          </label>
                          <label for="hs-radio-checked-in-form" class="flex p-2 w-full bg-white border-2 border-yellow-500 ring-1 ring-yellow-500 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500">
                              <input type="radio" value="gas" name="fuel" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-yellow-600 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-radio-checked-in-form">
                              <span class="text-lg text-black font-bold ms-3">Газ {{ $fuelprice->gas }}c</span>
                          </label>
                          <label for="hs-radio-checked-in-form1" class="flex p-2 w-full bg-white border-2 border-yellow-500 ring-1 ring-yellow-500 rounded-lg text-sm focus:border-yellow-500 focus:ring-yellow-500">
                              <input type="radio" value="diesel" name="fuel" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-yellow-600 focus:ring-yellow-500 disabled:opacity-50 disabled:pointer-events-none" id="hs-radio-checked-in-form1">
                              <span class="text-lg text-black font-bold ms-3">Дизель {{ $fuelprice->diesel }}c</span>
                          </label>
                      </div>
                  </div>
                  <label class="block overflow-hidden rounded-md w-full p-4">
                      <span class="text-xl font-medium text-black">Заправленная сумма: </span>
                      <input type="number" name="summ" placeholder="152.5" value="" required class="mt-2 text-xl w-full border-2 border-yellow-500 ring-1 ring-yellow-500 p-2 rounded-lg" />
                  </label>
              </div>
              <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-static-backdrop-modal">
                      Отменить
                  </button>
                  <button id="submitBtn" type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                      Зачислить
                  </button>
                  <div id="spinner" class="spinner"></div>

              </div>
            </form>
      </div>
  </div>
