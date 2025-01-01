<div class="flex flex-col items-center justify-center gap-2 p-2 bg-white rounded-2xl">
    <button type="button" wire:click="close_change"
        class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
        <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-clock-x">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M20.926 13.15a9 9 0 1 0 -7.835 7.784" />
            <path d="M12 7v5l2 2" />
            <path d="M22 22l-5 -5" />
            <path d="M17 22l5 -5" />
        </svg>
    </button>
    <button type="button" wire:click="paydebt" class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
        <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-coins">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 14c0 1.657 2.686 3 6 3s6 -1.343 6 -3s-2.686 -3 -6 -3s-6 1.343 -6 3z" />
            <path d="M9 14v4c0 1.656 2.686 3 6 3s6 -1.344 6 -3v-4" />
            <path
                d="M3 6c0 1.072 1.144 2.062 3 2.598s4.144 .536 6 0c1.856 -.536 3 -1.526 3 -2.598c0 -1.072 -1.144 -2.062 -3 -2.598s-4.144 -.536 -6 0c-1.856 .536 -3 1.526 -3 2.598z" />
            <path d="M3 6v10c0 .888 .772 1.45 2 2" />
            <path d="M3 11c0 .888 .772 1.45 2 2" />
        </svg>
    </button>
    <button type="button" wire:click="return_pro"
        class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
        <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-receipt-refund">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
            <path d="M15 14v-2a2 2 0 0 0 -2 -2h-4l2 -2m0 4l-2 -2" />
        </svg>
    </button>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="p-2 bg-green-20 hover:bg-green-10 active:bg-green-30 rounded-xl">
            <svg class="size-8 stroke-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-power">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 6a7.75 7.75 0 1 0 10 0" />
                <path d="M12 4l0 8" />
            </svg>
        </button>
    </form>
</div>