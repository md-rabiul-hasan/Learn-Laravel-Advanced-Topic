<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Order\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function payment(OrderDetails $orderDetails,PaymentGateway $paymentGateway){
        $orderDetails->all();
        dd($paymentGateway->charge('2000'));
    }
}
