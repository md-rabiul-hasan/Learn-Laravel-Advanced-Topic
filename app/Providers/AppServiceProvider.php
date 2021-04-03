<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditCardPaymentGateway;
use App\Billing\PaymentGateway;
use App\View\Composers\ChannelComposers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGateway::class, function($app){
            if(request()->has('credit')){
                return new CreditCardPaymentGateway('usd');
            }
            return new BankPaymentGateway('bdt');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('view-composer.partial.channel.*', ChannelComposers::class);
    }
}
