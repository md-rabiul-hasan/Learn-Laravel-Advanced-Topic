<?php
namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGateway{
    public $discount = 0;
    public $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        return [
            "currency"       => $this->currency,
            "amount"         => $amount - $this->discount,
            "transaction_id" => Str::random(16),
            "discount"       => $this->discount
        ];
    }
}