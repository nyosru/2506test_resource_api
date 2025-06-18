<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller
{
    /**
     * получаем цены с товарами
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getPrices()
    {
        $goods = Good::all();
        return \App\Http\Resources\GoodResource::collection($goods);
    }
}
