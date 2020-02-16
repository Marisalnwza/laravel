<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\LineNotify;

class LineNotifyController extends Controller
{
    public function pushNotify()
    {
        xxx
        $send = app(LineNotify::class)->notify('test message from controller ทดสอบภาษาไทย');
        return ['send_status' => $send];
    }
}