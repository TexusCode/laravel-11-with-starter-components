<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Azs\SmsController;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Brand;
use App\Models\Buy;
use App\Models\Card;
use App\Models\CardRegister;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Change;
use App\Models\Close;
use App\Models\Customer;
use App\Models\Debt;
use App\Models\Expenses;
use App\Models\Exprnditure;
use App\Models\FuelBag;
use App\Models\FuelDayPrice;
use App\Models\Order;
use App\Models\Partner;
use App\Models\Product;
use App\Models\ReturnProduct;
use App\Models\Revision;
use App\Models\Sms;
use App\Models\SubCart;
use App\Models\SubOrder;
use App\Models\Supplier;
use App\Models\Tranization;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use Illuminate\Support\Carbon as Carbom;
class ApiController extends Controller
{
    public function azsSendData(Request $request)
    {

        $tenDaysAgo = Carbon::now()->subDays(300); // Получаем дату 10 дней назад

        $transaction = Tranization::all();
        $card = Card::all();
        $cardregister = CardRegister::all();
        $close = Close::all();
        $expenses = Expenses::all();
        $fuelbag = FuelBag::all();
        $fueldayprice = FuelDayPrice::all();
        $sms = Sms::all();

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

        $response = Http::timeout(120)->post('https://topcars.tj/api/azs-get-data', [
            'transaction' => $transaction,
            'card' => $card,
            'cardregister' => $cardregister,
            'close' => $close,
            'expenses' => $expenses,
            'fuelbag' => $fuelbag,
            'fueldayprice' => $fueldayprice,
            'sms' => $sms,
        ]);

        if ($response->successful()) {
            Sms::truncate();
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
                Sms::class => 'sms',
            ];


            foreach ($models as $model => $key) {
                if (isset($data[$key]) && is_array($data[$key])) {
                    foreach ($data[$key] as $item) {
                        // Отключаем защиту полей
                        $model::unguard();

                        // Проверяем и конвертируем дату, если она есть
                        if (!empty($item['created_at'])) {
                            $timestamp = strtotime($item['created_at']);
                            if ($timestamp !== false) {
                                $item['created_at'] = Carbom::createFromTimestamp($timestamp)->format('Y-m-d H:i:s');
                            } else {
                                unset($item['created_at']); // Если дата некорректна, убираем её
                            }
                        }

                        if (!empty($item['updated_at'])) {
                            $timestamp = strtotime($item['updated_at']);
                            if ($timestamp !== false) {
                                $item['updated_at'] = Carbom::createFromTimestamp($timestamp)->format('Y-m-d H:i:s');
                            } else {
                                unset($item['updated_at']);
                            }
                        }

                        // Выполняем обновление или создание записи
                        $record = $model::updateOrCreate(
                            ['id' => $item['id']], // Условие для обновления (по id)
                            $item // Данные для обновления или создания
                        );

                        $record->save();

                        // Включаем защиту полей обратно
                        $model::reguard();
                    }
                }
            }

            $sms = Sms::where('status', 'notsend')->get();
            if ($sms) {
                foreach ($sms as $sms) {
                    $smsController = new SmsController();
                    $smsResponse = $smsController->sendSms($sms->phone, $sms->text);
                    $sms->status = 'send';
                    $sms->save();
                }
                Sms::truncate();
            }

            return response()->json(['message' => 'Данные успешно сохранены'], 200);
        } catch (\Exception $e) {
            // В случае ошибки возвращаем сообщение об ошибке
            return response()->json(['error' => 'Произошла ошибка: ' . $e->getMessage()], 500);
        }
    }

    public function posSendData(Request $request)
    {

        $transaction = Tranization::all();
        $card = Card::all();
        $cardregister = CardRegister::all();
        $close = Close::all();
        $expenses = Expenses::all();
        $fuelbag = FuelBag::all();
        $fueldayprice = FuelDayPrice::all();
        $parner = Partner::all();

        $application = Application::all();
        $brand = Brand::all();
        $buy = Buy::all();
        $cart = Cart::all();
        $category = Category::all();
        $change = Change::all();
        $customer = Customer::all();
        $debt = Debt::all();
        $exprnditure = Exprnditure::all();
        $order = Order::all();
        $product = Product::all();
        $returnproduct = ReturnProduct::all();
        $revision = Revision::all();
        $subcart = SubCart::all();
        $suborder = SubOrder::all();
        $supplier = Supplier::all();
        $unit = Unit::all();

        $response = Http::timeout(120)->post('https://topcars.tj/api/pos-get-data', [
            'application' => $application,
            'brand' => $brand,
            'buy' => $buy,
            'cart' => $cart,
            'category' => $category,
            'change' => $change,
            'customer' => $customer,
            'debt' => $debt,
            'exprnditure' => $exprnditure,
            'order' => $order,
            'product' => $product,
            'returnproduct' => $returnproduct,
            'revision' => $revision,
            'subcart' => $subcart,
            'suborder' => $suborder,
            'supplier' => $supplier,
            'unit' => $unit,
        ]);

        if ($response->successful()) {
            echo "Данные отправлены успешно!";
        } else {
            echo "Ошибка: " . $response->body();
        }
    }
    public function posGetData(Request $request)
    {
        try {
            // 📥 Получаем JSON-данные
            $data = $request->all();

            // Список моделей и соответствующих данных
            $models = [
                Application::class => 'application',
                Brand::class => 'brand',
                Buy::class => 'buy',
                Cart::class => 'cart',
                Category::class => 'category',
                Change::class => 'change',
                Customer::class => 'customer',
                Debt::class => 'debt',
                Exprnditure::class => 'exprnditure',
                Order::class => 'order',
                Product::class => 'product',
                ReturnProduct::class => 'returnproduct',
                Revision::class => 'revision',
                SubCart::class => 'subcart',
                SubOrder::class => 'suborder',
                Supplier::class => 'supplier',
                Unit::class => 'unit',
            ];

            foreach ($models as $model => $key) {
                if (isset($data[$key]) && is_array($data[$key])) {
                    foreach ($data[$key] as $item) {
                        // Отключаем защиту полей
                        $model::unguard();

                        // Конвертируем даты, если они есть
                        if (isset($item['created_at'])) {
                            $item['created_at'] = Carbom::parse($item['created_at'])->format('Y-m-d H:i:s');
                        }
                        if (isset($item['updated_at'])) {
                            $item['updated_at'] = Carbom::parse($item['updated_at'])->format('Y-m-d H:i:s');
                        }

                        $record = $model::updateOrCreate(
                            ['id' => $item['id']], // Условие для обновления (по id)
                            $item // Данные для обновления или создания
                        );

                        $record->save();

                        // Включаем защиту полей обратно
                        $model::reguard();
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
