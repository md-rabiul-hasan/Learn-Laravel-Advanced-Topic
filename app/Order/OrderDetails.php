<?php
namespace App\Order;

use App\Billing\PaymentGateway;

class OrderDetails{

    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all(){
        $this->paymentGateway->setDiscount(500);
        return [
            "name"    => "Rabiul Hasan",
            "address" => "Dhaka Bagladesh"
        ];
    }
}