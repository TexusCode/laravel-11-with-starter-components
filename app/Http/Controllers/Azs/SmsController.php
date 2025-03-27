<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmsController extends Controller
{
    public function sendSms($phone, $message)
    {
        $config = [
            'login' => 'safinashop',
            'hash' => '66ec5ab12bc8fb392591548c8b82bd13',
            'sender' => 'AZS Safina',
            'server' => 'https://api.osonsms.com/sendsms_v1.php',
        ];

        $dlm = ";";
        $phone_number = $phone;
        $message = $message;
        $txn_id = uniqid();
        $str_hash = hash('sha256', $txn_id . $dlm . $config['login'] . $dlm . $config['sender'] . $dlm . $phone_number . $dlm . $config['hash']);

        $params = [
            "from" => $config['sender'],
            "phone_number" => $phone_number,
            "msg" => $message,
            "str_hash" => $str_hash,
            "txn_id" => $txn_id,
            "login" => $config['login'],
        ];

        $response = Http::get($config['server'], $params);

        if ($response->successful()) {
            $data = $response->json();
            return "SMS успешно отправлено. ID сообщения: " . $data['msg_id'];
        } else {
            return "Произошла ошибка при отправке SMS. Подробности: " . $response->body();
        }
    }
}
