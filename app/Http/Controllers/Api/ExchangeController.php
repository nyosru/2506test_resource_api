<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    /**
     * получаем обменный курс для рубля
     * @return int[]
     */
    public function getExchangeRates(): array
    {
        $ar = [
            'USD' => 90,
            'EUR' => 100,
        ];
        return $ar;
    }
}
