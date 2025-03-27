<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardRegister;
use App\Models\Close;
use App\Models\Expenses;
use App\Models\FuelBag;
use App\Models\FuelDayPrice;
use App\Models\Partner;
use App\Models\Tranization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
class ApiController extends Controller
{
    public function azsSendData(Request $request)
    {

        $tenDaysAgo = Carbon::now()->subDays(10); // Получаем дату 10 дней назад

        $transaction = Tranization::where('created_at', '>=', $tenDaysAgo)->get();
        $card = Card::where('created_at', '>=', $tenDaysAgo)->get();
        $cardregister = CardRegister::where('created_at', '>=', $tenDaysAgo)->get();
        $close = Close::where('created_at', '>=', $tenDaysAgo)->get();
        $expenses = Expenses::where('created_at', '>=', $tenDaysAgo)->get();
        $fuelbag = FuelBag::where('created_at', '>=', $tenDaysAgo)->get();
        $fueldayprice = FuelDayPrice::where('created_at', '>=', $tenDaysAgo)->get();
        $parner = Partner::where('created_at', '>=', $tenDaysAgo)->get();
        return response()->json([
            'transaction' => $transaction,
            'card' => $card,
            'cardregister' => $cardregister,
            'close' => $close,
            'expenses' => $expenses,
            'fuelbag' => $fuelbag,
            'fueldayprice' => $fueldayprice,
            'parner' => $parner,
        ]);
        // $response = Http::timeout(30000)->post('http://127.0.0.1:8000/api/azs-get-data', [
        //     'transaction' => $transaction,
        //     'card' => $card,
        //     'cardregister' => $cardregister,
        //     'close' => $close,
        //     'expenses' => $expenses,
        //     'fuelbag' => $fuelbag,
        //     'fueldayprice' => $fueldayprice,
        //     'parner' => $parner,
        // ]);

        // if ($response->successful()) {
        //     echo "Данные отправлены успешно!";
        // } else {
        //     echo "Ошибка: " . $response->body();
        // }
    }

    public function azsGetData(Request $request)
    {
        // 📥 Получаем JSON-данные
        $data = $request->all();

        $this->syncTable(Tranization::class, $data['transaction'] ?? []);
        $this->syncTable(Card::class, $data['card'] ?? []);
        $this->syncTable(CardRegister::class, $data['cardregister'] ?? []);
        $this->syncTable(Close::class, $data['close'] ?? []);
        $this->syncTable(Expenses::class, $data['expenses'] ?? []);
        $this->syncTable(FuelBag::class, $data['fuelbag'] ?? []);
        $this->syncTable(FuelDayPrice::class, $data['fueldayprice'] ?? []);
        $this->syncTable(Partner::class, $data['parner'] ?? []);

        return response()->json(['message' => 'Данные успешно сохранены'], 200);
    }

    private function syncTable($model, $items)
    {
        foreach ($items as $item) {
            $model::updateOrCreate(
                ['id' => $item['id']], // Условие для обновления
                $item // Данные для обновления
            );
        }
    }
}
