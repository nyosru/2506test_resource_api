<?php

namespace App\Http\Resources;

use App\Http\Controllers\Api\ExchangeController;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GoodResource extends JsonResource
{

    protected static ?array $exchangeRates = null;

    /**
     * Получить курсы валют один раз для всех ресурсов.
     */
    protected function getExchangeRates(): array
    {
        if (self::$exchangeRates === null) {
            $service = new ExchangeController();
            self::$exchangeRates = $service->getExchangeRates();
        }
        return self::$exchangeRates;
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $rates = $this->getExchangeRates();

        return [
            'id' => $this->id,
            'title' => $this->title,
            'price_rub' => $this->price,
            'price_usd' => round($this->price * ($rates['USD'] ?? 0), 2),
            'price_eur' => round($this->price * ($rates['EUR'] ?? 0), 2),
        ];
    }
}
