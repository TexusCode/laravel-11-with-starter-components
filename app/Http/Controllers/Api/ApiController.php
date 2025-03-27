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
class ApiController extends Controller
{
    public function azsSendData(Request $request)
    {

        $tenDaysAgo = Carbon::now()->subDays(10); // Дата 10 дней назад

        $transaction = Tranization::where('created_at', '>=', $tenDaysAgo)->get();
        $card = Card::where('created_at', '>=', $tenDaysAgo)->get();
        $cardregister = CardRegister::where('created_at', '>=', $tenDaysAgo)->get();
        $close = Close::where('created_at', '>=', $tenDaysAgo)->get();
        $expenses = Expenses::where('created_at', '>=', $tenDaysAgo)->get();
        $fuelbag = FuelBag::where('created_at', '>=', $tenDaysAgo)->get();
        $fueldayprice = FuelDayPrice::where('created_at', '>=', $tenDaysAgo)->get();
        $sms = Sms::where('created_at', '>=', $tenDaysAgo)->get();

        // return response()->json([
        //     'transaction' => $transaction,
        //     'card' => $card,
        //     'cardregister' => $cardregister,
        //     'close' => $close,
        //     'expenses' => $expenses,
        //     'fuelbag' => $fuelbag,
        //     'fueldayprice' => $fueldayprice,
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

                        // Конвертируем даты, если они есть
                        if (isset($item['created_at'])) {
                            $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d H:i:s');
                        }
                        if (isset($item['updated_at'])) {
                            $item['updated_at'] = Carbon::parse($item['updated_at'])->format('Y-m-d H:i:s');
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
        $tenDaysAgo = Carbon::now()->subDays(10);

        $application = Application::where('created_at', '>=', $tenDaysAgo)->get();
        $brand = Brand::where('created_at', '>=', $tenDaysAgo)->get();
        $buy = Buy::where('created_at', '>=', $tenDaysAgo)->get();
        $cart = Cart::where('created_at', '>=', $tenDaysAgo)->get();
        $category = Category::where('created_at', '>=', $tenDaysAgo)->get();
        $change = Change::where('created_at', '>=', $tenDaysAgo)->get();
        $customer = Customer::where('created_at', '>=', $tenDaysAgo)->get();
        $debt = Debt::where('created_at', '>=', $tenDaysAgo)->get();
        $exprnditure = Exprnditure::where('created_at', '>=', $tenDaysAgo)->get();
        $order = Order::where('created_at', '>=', $tenDaysAgo)->get();
        $product = Product::where('created_at', '>=', $tenDaysAgo)->get();
        $returnproduct = ReturnProduct::where('created_at', '>=', $tenDaysAgo)->get();
        $revision = Revision::where('created_at', '>=', $tenDaysAgo)->get();
        $subcart = SubCart::where('created_at', '>=', $tenDaysAgo)->get();
        $suborder = SubOrder::where('created_at', '>=', $tenDaysAgo)->get();
        $supplier = Supplier::where('created_at', '>=', $tenDaysAgo)->get();
        $unit = Unit::where('created_at', '>=', $tenDaysAgo)->get();

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
                        // Отключаем автоматическое обновление timestamps
                        $model::unguard();

                        $record = $model::updateOrCreate(
                            ['id' => $item['id']], // Условие для обновления (по id)
                            $item // Данные для обновления или создания
                        );

                        // Вручную устанавливаем timestamps, если они есть в переданных данных
                        if (isset($item['created_at'])) {
                            $record->created_at = $item['created_at'];
                        }
                        if (isset($item['updated_at'])) {
                            $record->updated_at = $item['updated_at'];
                        }

                        $record->save();

                        // Включаем обратно защиту атрибутов
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
