<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function user(Request $request)
    {
        Customer::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'location' => 'emptu',
            ]
        );
        return response()->json([
            'message' => 'Ползовател успешно добавлено',
        ]);
    }
}
