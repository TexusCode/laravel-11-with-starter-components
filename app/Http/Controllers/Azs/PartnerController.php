<?php

namespace App\Http\Controllers\Azs;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function partner()
    {
        return view('azs.pages.partner');
    }
    public function partnerpost(Request $request)
    {
        $partner = Partner::where('qrcode', $request->qr2)->first();
        if (!$partner) {
            $partner = new Partner();
            $partner->partner_qr = $request->qr1;
            $partner->qrcode = $request->qr2;
            $partner->save();
        } else {
            return back()->with('info', 'Карта уже связано с другим партнером второй раз не возможно!');
        }
        return back()->with('info', 'Карта успешно связано с партнером!');
    }
}
