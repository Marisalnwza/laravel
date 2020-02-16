<?php

namespace App\Service;

use KS\Line\LineNotify as LineNoti;

class LineNotify
{
    private $token = "SfBvIVVAFJgCx6NK8rABoXaFiaukb5t83YwvOVLsEVJ";

    public function notify($message = '')
    {
        return (new LineNoti($this->token))
            ->send($message);

    }
}