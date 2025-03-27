<div class="w-full bg-yellow-500 absolute top-0 left-0 py-2 text-xl flex items-center justify-center gap-5 text-black font-bold select-none">
    <p>Цена топлива на: {{ \Carbon\Carbon::now()->format('d.m.Y') }}</p>
    <p>Бензин 92: {{ $benzin92 }}с</p>
    <p>Бензин 95: {{ $benzin95 }}с</p>
    <p>Газ: {{ $gas }}с</p>
    <p>Дизел: {{ $diesel }}с</p>
</div>
