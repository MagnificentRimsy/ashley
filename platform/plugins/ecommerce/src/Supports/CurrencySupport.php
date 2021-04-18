<?php

namespace Botble\Ecommerce\Supports;

use Botble\Ecommerce\Models\Currency;
use Botble\Ecommerce\Repositories\Interfaces\CurrencyInterface;
use Illuminate\Support\Collection;

class CurrencySupport
{
    /**
     * @var Currency
     */
    protected $currency;

    /**
     * @var Collection
     */
    protected $currencies = [];

    /**
     * @param Currency $currency
     */
    public function setApplicationCurrency(Currency $currency)
    {
        $this->currency = $currency;

        if (session('currency') == $currency->title) {
            return;
        }
        session(['currency' => $currency->title]);
    }

    /**
     * @return Currency
     */
    public function getApplicationCurrency()
    {
        $currency = $this->currency;

        if (empty($currency)) {
            if (session('currency')) {
                if ($this->currencies && $this->currencies instanceof Collection) {
                    $currency = $this->currencies->where('title', session('currency'))->first();
                } else {
                    $currency = app(CurrencyInterface::class)->getFirstBy(['title' => session('currency')]);
                }
            }

            if (!$currency) {
                if ($this->currencies && $this->currencies instanceof Collection) {
                    $currency = $this->currencies->where('is_default', 1)->first();
                } else {
                    $currency = app(CurrencyInterface::class)->getFirstBy(['is_default' => 1]);
                }
            }

            if (!$currency) {
                $currency = new Currency;
            }

            $this->currency = $currency;
        }

        return $currency;
    }

    /**
     * @return Collection
     */
    public function currencies(): Collection
    {
        if (!$this->currencies instanceof Collection) {
            $this->currencies = collect([]);
        }

        if ($this->currencies->count() == 0) {
            $this->currencies = app(CurrencyInterface::class)->getAllCurrencies();
        }

        return $this->currencies;
    }
}
