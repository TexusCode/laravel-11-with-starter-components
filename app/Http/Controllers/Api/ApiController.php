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

        $tenDaysAgo = Carbon::now()->subDays(50); // Получаем дату 10 дней назад

        $transaction = Tranization::take(5)->get();
        $card = Card::take(5)->get();
        $cardregister = CardRegister::all();
        $close = Close::take(5)->get();
        $expenses = Expenses::take(5)->get();
        $fuelbag = FuelBag::take(5)->get();
        $fueldayprice = FuelDayPrice::take(5)->get();
        $parner = Partner::take(5)->get();

        // return response()->json([
        //     'transaction' => $transaction,
        //     'card' => $card,
        //     'cardregister' => $cardregister,
        //     'close' => $close,
        //     'expenses' => $expenses,
        //     'fuelbag' => $fuelbag,
        //     'fueldayprice' => $fueldayprice,
        //     'parner' => $parner,
        // ]);

        $response = Http::timeout(30000)->post('http://127.0.0.1:8000/api/azs-get-data', [
            'transaction' => $transaction,
            'card' => $card,
            'cardregister' => $cardregister,
            'close' => $close,
            'expenses' => $expenses,
            'fuelbag' => $fuelbag,
            'fueldayprice' => $fueldayprice,
            'parner' => $parner,
        ]);

        if ($response->successful()) {
            echo "Данные отправлены успешно!";
        } else {
            echo "Ошибка: " . $response->body();
        }
    }

    public function azsGetData(Request $request)
    {
        try {
            // 📥 Получаем JSON-данные
            $data = $request->all();

            // Список моделей и соответствующих данных
            $models = [
                Tranization::class => 'transaction',
                Card::class => 'card',
                CardRegister::class => 'cardregister',
                Close::class => 'close',
                Expenses::class => 'expenses',
                FuelBag::class => 'fuelbag',
                FuelDayPrice::class => 'fueldayprice',
                Partner::class => 'parner',
            ];

            // Проходим по всем моделям и синхронизируем данные
            foreach ($models as $model => $key) {
                if (isset($data[$key]) && is_array($data[$key])) {
                    foreach ($data[$key] as $item) {
                        // Используем updateOrCreate для обновления или создания записей
                        $model::updateOrCreate(
                            ['id' => $item['id']], // Условие для обновления (по id)
                            $item // Данные для обновления или создания
                        );
                    }
                }
            }

            return response()->json(['message' => 'Данные успешно сохранены'], 200);
        } catch (\Exception $e) {
            // В случае ошибки возвращаем сообщение об ошибке
            return response()->json(['error' => 'Произошла ошибка: ' . $e->getMessage()], 500);
        }
    }
}
