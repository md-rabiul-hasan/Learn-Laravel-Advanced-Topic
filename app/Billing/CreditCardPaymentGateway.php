<?php
namespace App\Billing;

use Illuminate\Support\Str;

class CreditCardPaymentGateway implements PaymentGateway{
    public $discount =0;
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
        $card_fees = $amount * 0.03;
        return [
            "currency"       => $this->currency,
            "amount"         => ($amount - $this->discount) + $card_fees,
            "transaction_id" => Str::random(16),
            "discount"       => $this->discount,
            "fees"           => $card_fees
        ];
    }

}