<?php
namespace App\Billing;

use Illuminate\Support\Str;

interface PaymentGateway{

    public function setDiscount($amount);

    public function charge($amount);

}